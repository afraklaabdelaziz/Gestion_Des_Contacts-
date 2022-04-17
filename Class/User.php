<?php
session_start();
date_default_timezone_set('africa/casablanca');
include 'DataBase.php';
class User extends Database
{
    private $id;
    private $userName;
    private $password;
    private $signUpDate;
    private $lastLoginDate;
    public $contactList = array();
    // construct
    public function __construct($id, $username, $password, $signUpDate)
    {
        parent::__construct();
        $this->id = $id;
        $this->userName = $username;
        $this->password = $password;
        $this->signUpDate = $signUpDate;
    }
    // getters
    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->userName;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getSignUpdate()
    {
        return $this->signUpDate;
    }
    public function getLastLoginDate()
    {
        return $this->lastLoginDate;
    }
    // setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setUserName($userName)
    {
        $this->id = $userName;
    }
    public function setPassword($password)
    {
        $this->id = $password;
    }
    public function setSinUpDate($signUpDate)
    {
        $this->id = $signUpDate;
    }
    // login
    public function login($username, $password)
    {
        $this->select('user', '*');
        for ($i = 0; $i < count($this->result); $i++) {
            if (empty($username) && empty($password)) {
            } else if ($username == $this->result[$i]['username'] && $password == $this->result[$i]["password"]) {
                $_SESSION['lastLoginDate'] = date("Y/m/d H:i:s");
                $_SESSION['name'] = $username;
                $_SESSION['password'] = $password;
                header('location:profile.php');
            } else {
            }
        }
    }
    // signup 
    public function signUp($username, $password, $passwordC)
    {
        $var = 1;
        $this->select('user', '*');
        for ($i = 0; $i < count($this->result); $i++) {
            if ($username === $this->result[$i]['username']) {
                echo $this->result[$i]['username'];
                $var++;
            } else {
            }
        }
        if ($var <= 1) {
            $this->insert('user', ['username' => $username, 'password' => $password, 'signUpDate' => date(" Y/m/d H:i:s")]);
            $_SESSION['signUpDate'] = date("Y/m/d H:i:s");
            header('location:login.php');
        }
    }
      public function addContact($nameC,$emailC,$phoneC,$addressC) : Contact{
      $contact = new Contact($nameC,$emailC,$phoneC,$addressC);
      return $contact;
}
}
// $obj = new User(2, 'afrakla', 'afraklaab99', date('Y/m/d'));
// $obj->insert('user', ['username' => 'afrakla', 'password' => 'afraklaab99', 'signUpDate' => date('Y/m/d H:i:s')]);
// $obj->login('anassss', 'afrakla');
// $obj->signUp('anassss', 'afrakla', 'afrakla');
// $obj->signUp('anasss', 'afrakla', 'afrakla');
// $obj->select('user', '*');
// echo '<pre>';
// var_dump($obj);
// echo '</pre>';
