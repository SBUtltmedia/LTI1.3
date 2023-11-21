<?php
require_once __DIR__ . '/../../db/example_database.php';


$toolHost = TOOL_HOST; // Assuming TOOL_HOST is defined elsewhere
$iss = urlencode('http://localhost:9001');
$loginHint = urlencode('12345');

$ltiMessageHint = urlencode('12345');
$appURL ="$toolhost/login.php?iss=${iss}&login_hint=$loginHint&lti_message_hint=$ltiMessageHint";



?>
<ul>
    <li>Fancy LMS</li>
    <li>Users</li>
    <li>Courses</li>
   <?php 
   
   for($i=1;$i<5;$i++){

    $targetLinkUri = urlencode("http://localhost:9001/vq/nee/$i/game.php");
    $game="$appURL&target_link_uri=$targetLinkUri";
    print <<<END
    <li class="sub" onclick="document.getElementById('frame').src='$game'">Games 10$i</li>
END;
   }
 ?>

        





    <li>Settings</li>
</ul>
<iframe id="frame" style="width:1200px; height:600px" >

</iframe>
<style>
ul {
    position:absolute;
    left:0;
    top:0;
    width:200px;
    bottom:0;
    background-color:darkslategray;
    color: white;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 28px;
    font-weight: bold;
    margin:0;
    list-style-type: none;
}
li {
    padding-top: 26px;

}
li.sub {
    padding-left:26px;
    font-size: 24px;
}
iframe {
    position: absolute;
    margin-left: 250px;
}
</style>