<?php
namespace App\MyClass;

class Poli Extends RumahSakit
{
    protected $lantai;

    public function setLantai($lantai)
    {
        $this->lantai = $lantai;
    }

    public function getLantai()
    {
        return $this->lantai; 
    }

    public function greeting()
    {
        return "Poli Klinik berada di lantai ".$this->getLantai().""; 
    }
}