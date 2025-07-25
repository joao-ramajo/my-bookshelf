<?php

namespace Api\Models;

class Livro
{
    public ?int $id = null;
    public ?int $id_usuario = null;
    public ?string $titulo = null;
    public ?string $autores = null;
    public ?int $numero_paginas = null;
    public ?string $genero = null;
    public ?string $nacional = null;
    public ?string $capa_path = null;
    public ?string $editora = null;
    public ?string $descricao = null;

    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }


}
