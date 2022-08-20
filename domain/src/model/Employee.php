<?php

namespace domain\model;

use domain\vo\Genre;

class Employee
{
    private User $user;
    private string $name;
    private string $lastName;
    private int $age;
    private Genre $genre;

    public function __construct(User $user, string $id, string $name, string $lastName, int $age, Genre $genre)
    {
        $this->user = $user;
        $this->userName =
            $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->genre = $genre;
        $this->id = $id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getId(): string
    {
        return $this->id;
    }

    function isMale(): bool
    {
        return $this->genre == Genre::MALE;
    }

    function getName(): string
    {
        return $this->name;
    }

    function getLastName(): string
    {
        return $this->lastName;
    }

    function getAge(): string
    {
        return $this->age;
    }

    function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
}
