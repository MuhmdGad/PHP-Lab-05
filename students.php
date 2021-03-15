<?php
class Students{

    public $firstname;
    private $lastname;
    private $email;
    private $password;


    public function getFirstName()
    {
            return $this->firstname;
    }

    public function setFirstName($_first)
    {
         return $this->firstname = $_first;
    }


    public function getLastName()
    {
            return $this->lastname;
    }

    public function setLastName($_last)
    {
         return $this->lastname = $_last;
    }

    public function getPassword()
    {
            return $this->password;
    }

    public function setPassword($_pass)
    {
        return $this->password = $_pass;
    }

    public function getEmail()
    {
            return $this->email;
    }

    public function setemail($_email)
    {
        return $this->email = $_email;
    }

}

?>