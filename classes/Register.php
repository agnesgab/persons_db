<?php

class Register extends DBHandler {

    protected function checkUser($idNumber){
        $statement = $this->connect()->prepare("SELECT persons_id_number FROM persons WHERE persons_id_number = ?;");

        if(!$statement->execute([$idNumber])){
            $statement = null;
            header("location: ../index.php?error=statementfailed");
            exit();
        }

        if($statement->rowCount() > 0){
            return true;
        }
        return false;
    }

    protected function setUser($name, $surname, $idNumber){
        $statement = $this->connect()->prepare("INSERT INTO persons(persons_name, persons_surname, persons_id_number) VALUES (?, ?, ?) ");


        if(!$statement->execute([$name, $surname, $idNumber])){
            $statement = null;
            header("location: ../index.php?error=statementfailed");
            exit();
        }

        $statement = null;
    }
}
