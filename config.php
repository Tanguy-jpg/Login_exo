<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=id17440315_exercice_login;charset=UTF8','id17440315_tanguy', 'KAs~)8?@_3nQvVYe');
    }catch(Exception $e){
        die('Erreur'.$e->getMessage());
    }