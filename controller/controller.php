<?php
    session_start();
    require model."db-connect.php";
    require model."function.php";
    require model."connexion.php";
    require model."logoff.php";
    require model."title.php";
    require view."header.php";
    if (isset($_SESSION['username'])) {
        if (isset($_GET['action']) && $_GET['action'] == 'tchat') {
                require model."sendMessage.php";
                require view."tchat.php";
        }
        else {
            echo "Vous n'êtes pas censés être là";
            echo "<form class='logoff' action='index.php' method='post'>
                <button type='submit' name='logoff'>Déconnexion</button>
            </form>";
        }
    }
    else {
        require view."connexionPage.php";
    }

    require view."footer.php";
