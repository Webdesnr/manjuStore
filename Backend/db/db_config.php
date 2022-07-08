<?php
    session_start();
    CONST HOST = "localhost";
    CONST USER = "root";
    CONST PASSWORD = "123456";
    CONST DBNAME = "employeeinfo";
    CONST SITEURL = "http://localhost/manju_store/Backend/";
    $conn = new mysqli(HOST, USER, PASSWORD, DBNAME);
?>