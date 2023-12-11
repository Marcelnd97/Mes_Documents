<?php

    function login($username, $password){
        require('config.php');

        if ($username === DB_USERNAME && $password === DB_PASSWORD) {
            $_SESSION['authenticated'] = true;
            return true;
        }else{
            return false;
        }
    }
    function logout(){
        session_unset();
        
        session_destroy();
    }

    function isAuthenticated() {
        return isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;
        
    }
?>