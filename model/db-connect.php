<?php

    class Database
    {
        public function connect() {
            try {
                $db = new PDO('mysql:host=localhost;dbname=thanatchat', "", "");
                return $db;
            } catch (Exception $e) {
                echo "erreur: ".$e->getMessage();
            }

        }

    }
