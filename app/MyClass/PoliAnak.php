<?php
namespace App\MyClass;

class PoliAnak Extends Poli
{
    protected $keterangan;

    public function setKeteranganAnak($keterangan)
    {
        $this->keterangan = $keterangan;
    }

    public function getKeteranganAnak()
    {
        return $this->keterangan; 
    }

    public function greeting()
    {
        return "Poli Anak ada di ruangan nomor ".$this->getKeteranganAnak().""; 
    }
}