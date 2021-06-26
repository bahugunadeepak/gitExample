<?

  require_once('component/session.php');

  $session = new session();

  $session->session_destroy();
  $session_id = $session->check_session();

  if($session_id=="")
  { 
    header ("Location: login.php");
  }
  
?>
