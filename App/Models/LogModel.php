<?php
namespace App\Models;

class LogModel{

	public function __construct($user,$pass){
		$this->user = $user;
		$this->pass = $pass;
	}

    public function login(){
        if($this->getUserData() == true){
            return false;
        }
        if($this->validatePass() ==  false){
            return false;
        }

        return true;
    }

	public function getUserData(){
		$app = \Yee\Yee::getInstance();
		$userData = $app->db['default']->where ("username",$this->user)->getOne("registers");

		return $userData == null;
	}

     public function checkIfNull(){

        if( !is_null( $this->username ) )
        {
            
            return true;

        } else {
            return false;
        }
    }

	public function validateUser()
  	{
        $app = \Yee\Yee::getInstance();
        $userData = $app->db['default']
            ->where("username", $this->user)
            ->getOne ("registers");

        if($userData['username'] === $this->user)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

   	public function validatePass()
    {
        $app=\Yee\Yee::getInstance();
        $userData= $app->db['default']->where("username", $this->user)->getOne("registers");

        $hash =$userData['password'];
        // password_verify()
        if(password_verify($this->pass,$hash))
        {
            return true;
        }
        else
        {
            return false;
        }   
    }
}