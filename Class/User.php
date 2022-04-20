<?php
session_start();
date_default_timezone_set('africa/casablanca');
include 'Contact.php';
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
            if (empty($username)) {
                header('location:login.php?error=enter your username');
            } else if (empty($password)) {
                header('location:login.php?error=enter your password');
            } else if ($username != $this->result[$i]['username']) {
                header('location:login.php?error=username or password incorrect');
            } else if ($password != $this->result[$i]["password"]) {
                header('location:login.php?error=username or password incorrect');
            } else {
                $_SESSION['lastLoginDate'] = date("Y/m/d H:i:s");
                $_SESSION['name'] = $this->result[$i]['username'];
                $_SESSION['password'] =  $this->result[$i]["password"];
                $_SESSION['signUpDate'] = $this->result[$i]["signUpDate"];
                $_SESSION['id_u'] = $this->result[$i]['id_u'];
                header('location:profile.php');
                break;
            }
        }
    }


    // signup 
    public function signUp($username, $password, $passwordC)
    {
        $var = 1;
        $this->select('user', '*');
        for ($i = 0; $i < count($this->result); $i++) {
            if (empty($username) && empty($password)) {
                $var++;
            } else if ($username === $this->result[$i]['username']) {
                $var++;
                header('location:singUp.php? error=username exist');
            } else {
            }
        }
        if ($var <= 1) {
            $this->insert('user', ['username' => $username, 'password' => $password, 'signUpDate' => date(" Y/m/d H:i:s")]);
            $_SESSION['signUpDate'] = date("Y/m/d H:i:s");
            header('location:login.php');
        }
    }
    public function addContact($nameC, $emailC, $phoneC, $addressC, $fqU): Contact
    {
        $contact = new Contact(null, $nameC, $emailC, $phoneC, $addressC, $this->id);
        $contact->insert('contacts', ['name' => $nameC, 'email' => $emailC, 'phone' => $phoneC, 'address' => $addressC, 'fq_u' => $fqU]);
        $this->contactList[] = $contact;
        return $contact;
    }
}


