<?php
    require "db-connect.php";
    $bd = new Database();
    $db = $bd->connect();
    $userStateOnline = $db->query("Select username from users where user_state = 1");
    $userOnline = $userStateOnline->fetchAll();
    for ($i=0; $i < count($userOnline); $i++) {
        echo "<p id='displayUser'>&#11044; ".$userOnline[$i]['username']."</p>";
    }
