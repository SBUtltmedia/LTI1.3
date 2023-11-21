<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../db/example_database.php';

use \IMSGlobal\LTI;
// print_r($_POST);
LTI\LTI_OIDC_Login::new(new Example_Database())
//    ->do_oidc_login_redirect(TOOL_HOST . "/game.php")
   ->do_oidc_login_redirect($_GET["target_link_uri"])
    ->do_redirect();

?>