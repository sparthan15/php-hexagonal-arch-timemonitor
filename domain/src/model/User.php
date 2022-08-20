<?php

namespace domain\model;

use DateTime;
use domain\vo\Genre;

class User
{
    private string $id;
    private string $userName;
    private string $password;
    private DateTime $createdAt;
    private DateTime $updatedAt;
    private bool $active;


    public function __construct(string $id, string $userName, string $password, bool $active,  DateTime $createdAt, DateTime $updatedAt)
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->password = $password;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->active = $active;
    }

    public function getId(): string
    {
        return $this->id;
    }

    function getUserName(): string
    {
        return $this->userName;
    }

    function getPassword(): string
    {
        return $this->password;
    }

    function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    public function isActive(): bool
    {
        return $this->active;
    }
}
