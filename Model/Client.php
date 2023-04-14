<?php

class Client
{
    private ?int $IdClient = null;

    private ?string $FirstName = null;
    private ?string $LastName = null;
    private ?string $email = null;
    private ?string $password = null;
    private ?int $phone = null;

    //Construct
    public function __construct($FirstName, $LastName, $email, $password, $phone) {
        $this->IdClient = $IdClient;

        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
    }

    // Getters
    public function getIdClient() {
        return $this->IdClient;
    }

    public function getFirstName() {
        return $this->FirstName;
    }
    public function getLastName() {
        return $this->LastName;
    }

    public function getemail() {
        return $this->email;
    }

    public function getpassword() {
        return $this->password;
    }

  

    public function getphone() {
        return $this->phone;
    }

   
    
    // Setters
    public function setFirstName($IdClient) {
        $this->IdClient = $IdClient;
    }

    public function setFirstName($FirstName) {
        $this->FirstName = $FirstName;
    }

    public function setLastName($LastName) {
        $this->LastName = $LastName;
    }
    public function setemail($email) {
        $this->email = $email;
    }
   

    public function setpassword($password) {
        $this->password = $password;
    }

    

    public function setphone($phone) {
        $this->phone = $phone;
    }

   

}

?>