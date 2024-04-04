<?php

class User implements JsonSerializable{

    private $id,$name,$email,$password,$isAdmin;

    public function __construct($id,$name, $email,$password,$isAdmin) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->isAdmin = $isAdmin;

    }


    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassWord(){
        return $this->password;
    }

    public function getIsAdmin(){
        return $this->isAdmin;
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'is_admin' => $this->is_admin
        ];
    }


}



?>