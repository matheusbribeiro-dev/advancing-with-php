<?php

namespace Utils;

class ReaderFile
{
    private $file;

    public function __construct(string $nameFile)
    {
        $this->file = fopen($nameFile, 'r');
    }

    public function read()
    {
        while (!feof($this->file)) {
            yield fgetcsv($this->file);//Conceito de Generators: Armazena na memória linha por linha ao invés de todo o arquivo
        }
    }

    public function __destruct()
    {
        fclose($this->file);
    }
}