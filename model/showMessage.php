<?php
    require "db-connect.php";
    $bd = new Database();
    $db = $bd->connect();
    $recupMsg = $db->query("select users.username, messages.user_id, messages.id, messages.messages from messages inner join users on messages.user_id = users.id order by messages.id asc limit 1, 50");
    $recup = $recupMsg->fetchAll();
    for ($i=0; $i < count($recup); $i++) {
        echo "<p class='line'>".$recup[$i]['username']." a écrit:</p>";
        echo "<p class='messageLine'>".$recup[$i]['messages']."</p>";
    }
