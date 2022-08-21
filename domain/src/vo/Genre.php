<?php
namespace timeMonitor\domain\vo;

class Genre
{

    const MALE = "MALE";

    const FEMALE = "FEMALE";

    private $name;

    public function __construct(string $genre) {
        $this->name = $genre;
        ;
    } 
    
    public function isMale(){
        return $this->name==Genre::MALE;
    }
}