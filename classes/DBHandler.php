<?php
class DBHandler {
    protected function connect(){
        try {
            $username = "agnese";
            $password = "kvieklis";
            $handler = new PDO("mysql:host=localhost;dbname=persons", $username, $password);
            return $handler;
        }
        catch (PDOException $exception){
            print "Error!: " . $exception->getMessage() . "<br/>";
            die();
        }
    }
}