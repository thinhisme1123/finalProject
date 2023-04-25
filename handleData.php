<?php 
    // function to connet
    function connect() {
        return new mysqli('127.0.0.1', 'root', '', 'ManageFilmWeb');
    }

    //function to verify login
    function login($user, $pass) {
        $conn = connect();
        $sql = "select * from userAcc where username = '$user'";

        $ref = $conn->query($sql);
        $acc = $ref->fetch_assoc();

        if (!$acc) {
            return 3;
        }

        if ($pass != $acc['userpass']) {
            return 4;
        }

        return $acc;
    }

    //function to get all film
    function getFilm() {
        $conn = connect();
        $ref = $conn->query('select * from FilmInfo');
        $films = [];
        for ($i = 1; $i <= $ref->num_rows; $i++) {
            $films[] = $ref->fetch_assoc();
        }
        return $films;
    }

    // funtion to return an array to get info for film detail 
    // getFilmDetail(id): id is parametre to check with db
    function getFilmDetail($id) {
        $films = getFilm();
        foreach($films as $f) {
            if ($id === $f['fId']) {
                return $f;
            }
        }
    }

    //function to get film with the same genre
    function getSameGenre($id) {
        $films = getFilm();
        foreach($films as $f) {
            if ($id === $f['fId']) {
                $genre = $f['fGenre'];
            }
        }
        $filmGenre = [];
        foreach($films as $f) {
            if ($genre === $f['fGenre'] && $id != $f['fId']) {
                $filmGenre[] = $f;
            }
        }
        return $filmGenre; 
    }

    //function to get film with the same genre by by genre searching
    function getSameGenreBySearch($genre) {
        $films = getFilm();
        $filmSameGenre = [];
        foreach($films as $f) {
            if ($genre == $f['fGenre']) {
                $filmSameGenre[] = $f;
            }
        }
        return $filmSameGenre;
    }

    //function to search film by name on searching bar
    function getFilmBySearchBar($input) {
        $conn = connect();
        $ref = $conn->query("select * from FilmInfo where fName like '%$input%'");
        $film = [];
        for ($i = 1; $i <= $ref->num_rows; $i++) {
            $film[] = $ref->fetch_assoc();
        }
        return $film;
    }

    //function to check if username is set or not
    function checkUser($username) {
        $conn = connect();
        $sql = "select distinct username from userAcc where username = '$username'";
        $ref = $conn->query($sql);
        if ($ref == null || $ref) {
            return array(
                'code' => 6,
                'message' => 'success'
            );
        } else {
            return array(
                'code' => 5,
                'message' => 'exist'
            );
        }
    }

    //function to add new account
    function register($username, $userpass) {
        $conn = connect();
        $sqlcount = "select * from userAcc";
        $sqlid = mysqli_num_rows($conn->query($sqlcount));
        print_r($sqlid . ' ' . $sqlid);
        $userid = 'user' . strval($sqlid);
        $sql = "insert into userAcc values ('$userid', '$username', '$userpass')";
        $conn->query($sql);
    }

    //function to get newest film (from 2022)
    function getNewFilm() {
        $conn = connect();
        $ref = $conn->query('select * from FilmInfo where fYear > 2021');
        $films = [];
        for ($i = 1; $i <= $ref->num_rows; $i++) {
            $films[] = $ref->fetch_assoc();
        }
        return $films;
    }
    
?>