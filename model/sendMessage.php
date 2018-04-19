<?php
    $bd = new Database();
    $db = $bd->connect();
    $last = $db->query("select messages from messages inner join users on messages.user_id = users.id where messages.id = (select MAX(id) from messages) and users.username = '".$_SESSION['username']."' ");
    $lastMessage = $last->fetch();
    if(isset($_POST['message']) && !empty($_POST['message']) && isset($_POST['sendMessage']) && $_POST['message'] != $lastMessage['messages']){
        $messageRaw = attribution('message');
        $message = filter_var($messageRaw, FILTER_SANITIZE_STRING);
        $db->exec("insert into messages (messages, user_id) values ('$message', (select ID from users where username = '".$_SESSION['username']."'))");
    }
