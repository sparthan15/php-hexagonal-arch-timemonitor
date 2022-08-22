<?php

namespace timeMonitor\domain\model;

use timeMonitor\domain\vo\Genre;

class Employee
{

    private int $id;

    private ?User $user;

    private string $name;

    private string $lastName;

    private int $age;

    private ?Genre $genre;

    public function __construct(User $user, int $id, string $name, string $lastName, int $age, Genre $genre)
    {
        $this->user = $user;
        $this->userName = $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->genre = $genre;
        $this->id = $id;
    }

    public static function createWithId(int $id):Employee{
        return new self(null, $id, "", "", 0, null);
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
        return $this->genre->isMale();
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
