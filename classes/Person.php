<?php

class Person extends SignupController
{
    private string $name;
    private string $surname;
    private int $id;


    public function __construct(string $name, string $surname, int $id)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
    }


    /* @return string */
    public function getName(): string
    {
        return $this->name;
    }

    /* @return string */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /* @return int */
    public function getId(): int
    {
        return $this->id;
    }


}