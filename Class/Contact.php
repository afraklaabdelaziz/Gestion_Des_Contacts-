<?php
include 'DataBase.php';
class Contact extends Database {
    private $id; 
    private $name;
    private $phone;
    private $email;
    private $address;
    public function __construct($name,$phone,$email,$address)
    {
        parent::__construct();
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address; 
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getAddress(){
        return $this->address;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setAddress($address){
        $this->address = $address;
    }
}
?>