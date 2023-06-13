<?php
        try 
        {
            $bdd = new PDO("mysql:host=mysql-dpmusic.alwaysdata.net;dbname=dpmusic_db;charset=utf8", "dpmusic", "InesM2002");
        }
        catch(PDOException $e)
        {
            die('Erreur : '.$e->getMessage());
        }