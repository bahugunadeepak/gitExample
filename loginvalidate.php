<?php

	require_once('web_config.php');
	$module_name = $MODULES['Mod_Profile'];
	$module_path = $MODULES['Path'];

	require_once($module_path."class/general.class.php");
	require_once($module_path."component/session.php");

	$objGen = new General();
	$session = new session();


	$objGen->username =  $_REQUEST['username'];
	$objGen->password =  md5($_REQUEST['passwd']);



	$userDetails = $objGen->CheckLogin($objGen); 

	// echo '<pre>';
	// print_r($userDetails);
	// die;

	$arrData = $objGen->GET_Login($objGen);
	 
	if($arrData['logincount']>=5){
		header("location: localhost.php"); 
		die;
	}

	if($userDetails['user_id']!="")
	{
		$login = 1;
	}

	if(@$login==1)
	{
		$session->session_write($userDetails);
		$loginInfo = $session->session_read();

		 // print_R($loginInfo); die;

		header("location: index.php");
	}
	else
	{
		$arrData = $objGen->GET_Login($objGen);
		 
		$login_count = 0;
		if($arrData['logincount']==""){
			$login_count = 1;
		}
		else{
			$login_count = $arrData['logincount'] + 1;
		}
		
		$objGen->login_count = $login_count;
		$objGen->id = $arrData['user_id'];

		//print_r($objGen); die;
		if($objGen->id>0){
			$objGen->UPDATE_Login($objGen);
		}
		
		header("location: login.php");
	} 
	

	ob_end_clean(); 
?>



