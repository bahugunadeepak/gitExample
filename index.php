<? header('X-Frame-Options:SAMEORIGIN');?>
<meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />
<? header("X-Content-Type-Options: nosniff"); ?>
<? header('Content-type: text/html; charset=UTF-8'); ?> 
<? header('X-XSS-Protection: 1; mode=block'); ?>
<? @ini_set("session.cookie_secure", 0); ?> 

<?PHP

    ob_start();

	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);

	require_once('web_config.php');
	$module_name = $MODULES['Mod_Profile'];
	$module_path = $MODULES['Path'];

	require_once($module_path."class/general.class.php");
	require_once($module_path.'component/session.php');

	$session = new session();

	$session_id = $session->check_session();

	if($session_id=="")
	{ 
		header("Location: login.php"); 
		die;
	}

	$loginInfo = $session->session_read();

	require_once('menu.php');	
?> 

<div>
 <img src="bg_img/bg.jpg" width='100%' height='100%' />
</div>
