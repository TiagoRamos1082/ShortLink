<?php

namespace App\Domain;

use Exception;

class ShortLink
{
    private ?int $id;
    private ?string $code;
    private string $link;

    public function __construct(
        string $link
    ){
        $this->id = null;
        $this->code = null;
        $this->link = $link;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function assignId(int $id): void
    {
        if($this->id !== null) {
            throw new Exception("Id ja definido.");
        }

        if($id < 0) {
            throw new Exception("Id inválido.");
        }

        $this->id = $id;
    }

    public function assignCode(string $code): void
    {
        if($this->code !== null){
            throw new Exception("codigo ja definido.");
        }
        
        $this->code = $code;
    }
}