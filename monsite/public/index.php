<?php
require_once(dirname(dirname(__FILE__)) . "/app/config/config.php");
require_once(APPROOT . "/helpers/url_helper.php");
require_once(APPROOT . "/helpers/session_helper.php");
require_once(APPROOT . "/views/inc/navbar.php");
require_once(APPROOT . "/views/inc/footer.php");
require_once(APPROOT . "/bootstrap.php");
require_once(APPROOT . "/controller/Core.php");
$init = new Core();

require_once(APPROOT . "/controller/Users.php");


?>