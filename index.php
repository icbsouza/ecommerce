<?php 
// start session
    session_start();
// end start session

// loading all class
    require_once("vendor/autoload.php");
// end loading all class

// using namespaces
    use \Slim\Slim;
    // use \Hcode\Page;
    // use \Hcode\PageAdmin;
    // use \Hcode\Model\User;
    // use \Hcode\Model\Category;
// end namespaces

// configure slim
    $app = new Slim();
    
    $app->config("debug", true);
// end configure slim
require_once("functions.php");
require_once("site.php");
require_once("admin.php");
require_once("admin-users.php");
require_once("admin-categories.php");
require_once("admin-products.php");



$app->run();

?>