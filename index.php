<?php
include(dirname( __FILE__ ).'/classes/Manage.class.php');
include('config.php');
session_start();

if((!isset($_SESSION['choice']) || empty($_SESSION['choice'])) && $_GET['page']!='welcome')
{
  function Redirect($url, $permanent = false)
  {
      if (headers_sent() === false)
      {
      	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
      }
      exit();
  }
  Redirect('index.php?page=welcome');
}

if(isset($_POST['unsetChoiceSession']) && $_POST['unsetChoiceSession'] == 'Reset Choice')
{
  Manage::removeChoice();
}

if(isset($_POST['light']) && $_POST['light'] == 'Light Side')
{
  Manage::setChoice('light');
}

if(isset($_POST['dark']) && $_POST['dark'] == 'Dark Side')
{
  Manage::setChoice('dark');
}

// Need to adjust the below most likely
if(isset($_POST['surveySubmit']) /* && $_POST['surveySubmit'] == 'Dark Side' */)
{
  Manage::setSurvey();
}

// setting session id for recording in table -- if actual production site, probably would also set cookie of some sort to prevent reload/resubmit of form data.
if(!isset($_SESSION['id']) || empty($_SESSION['id']))
{
  Manage::setSessionId();
}

include('header.php');

// eventually add here the class to create the header that also passes in the $_SESSION for the css
 if(!isset($_GET['page']) || empty($_GET['page']))
 {
 	$_GET['page'] = 'welcome';
 }

if (isset($_GET['reset']))
{
  session_destroy();
}

// handling basic routing -- no need to use switch
$filepath = BASE_PATH . '/controllers/' . preg_replace('#\W#', '', $_GET['page']) . '.controller.php';
if (file_exists($filepath))
{
    require_once($filepath);
}
