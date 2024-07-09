<?php
namespace App\MyClass;

class PoliGigi Extends Poli
{
    protected $keterangan;

    public function setKeteranganGigi($keterangan)
    {
        $this->keterangan = $keterangan;
    }

    public function getKeterangan()
    {
        return $this->keterangan; 
    }

    public function greeting()
    {
        return "Poli Gigi ada di ruangan nomor ".$this->getKeterangan().""; 
    }
}