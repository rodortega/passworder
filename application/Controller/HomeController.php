<?php
namespace Mini\Controller;

class HomeController
{
    public function index()
    {
    	require VIEW . '_template/header.php';
    	require VIEW . 'home/index.php';
    	require VIEW . '_template/footer.php';
    }
    public function validate()
    {
    	if (isset($_POST['encrypt']))
    	{
    		$result = encrypt($_POST['string'],$_POST['password']);
    	}
    	elseif (isset($_POST['decrypt']))
    	{
    		$result = decrypt($_POST['string'],$_POST['password']);
    	}

    	require VIEW . '_template/header.php';
    	require VIEW . 'home/vault.php';
    	require VIEW . '_template/footer.php';
    }
}
