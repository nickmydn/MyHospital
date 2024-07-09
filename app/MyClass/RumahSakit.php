<?php
namespace App\MyClass;

class RumahSakit
{
    protected $nama;
    protected $address;
    protected $telp;

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama; 
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address; 
    }

    public function setTelp($telp)
    {
        $this->telp = $telp;
    }

    public function getTelp()
    {
        return $this->telp; 
    }

    public function greeting()
    {
        return "Welcome to ".$this->getNama()." Hospital. Location in ".$this->getAddress().". Telp. ".$this->getTelp().""; 
    }
}