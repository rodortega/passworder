<?php
namespace Mini\Controller;

use Mini\Model\Admin;

class LoginController
{
    public function index()
    {
    	$password = hash('sha256', $_POST['password']);

    	$Admin = new Admin();
    	$admin = $Admin->login($password);

    	if ($admin->count == 1)
    	{
    		session_start();
    		$_SESSION['key'] = $_POST['password'];
    	}
    	else
    	{

    	}
    }
}
