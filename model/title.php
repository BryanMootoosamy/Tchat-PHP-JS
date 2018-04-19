<?php
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'tchat') {
            $currentPage = "tchat";
        }
    }
    else {
        $currentPage = "ThanaTchat";
    }
