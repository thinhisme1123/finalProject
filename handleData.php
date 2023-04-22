<?php 
    // function to connet
    function connect() {
        return new mysqli('127.0.0.1', 'root', '', 'FilmDB');
    }

    //function to verify login
    function login($user, $pass) {
        $conn = connect();
        $sql = "select * from account where userName = '$user'";

        echo $sql . "\n";
        $ref = $conn->query($sql);
        $acc = $ref->fetch_assoc();

        if (!$acc) {
            return 'Username is wrong or does not exist!';
        }

        $hash = $acc['userPass'];
        if (!password_verify($pass, $hash)) {
            return 'Password is wrong';
        }

        unset($acc['userPass']);
        
    }
    // funtion to return an array to get info for film detail 
    // getFilmDetail(id): id is parametre to check with db

    
    // funtion checkLogin will return a value
    /* 
        check username exist or not
        if logged will return code 0
        else reuturn code 1 
    */
    // funtion to check login or not yet
    function checkLogin() {
        return array(
            'code' => 0,
            'message' => 'logged'
        );
        // return array(
        //     'code' => 1,
        //     'message' => 'not logged yet'
        // );
    }
    
?>