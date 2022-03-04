<?php

class RegisterController extends Register
{

    private string $name;
    private string $surname;
    private int $idNumber;

    /**
     * @param string $name
     * @param string $surname
     * @param int $idNumber
     */
    public function __construct(string $name, string $surname, int $idNumber)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->idNumber = $idNumber;
    }


    public function registerUser()
    {
        if (!$this->emptyInput()) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if (!$this->validateName()) {
            header("location: ../index.php?error=nameorsurname");
            exit();
        }

        if (!$this->validateIfTaken()) {
            header("location: ../index.php?error=alreadyexists");
            exit();
        }


        $this->setUser($this->name, $this->surname, $this->idNumber);
    }

    private function emptyInput(): bool
    {
        if (!empty($this->name) || !empty($this->surname) || !empty($this->idNumber)) {
            return true;
        }
        return false;
    }

    private function validateName(): bool
    {
        if (preg_match("/^([a-zA-Z' ]+)$/", $this->name)) {
            return true;
        } else {
            return false;
        }
    }


    private function validateIfTaken(): bool
    {
        if (!$this->checkUser($this->idNumber)) {
            return true;
        }
        return false;
    }

}
