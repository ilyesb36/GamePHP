<?php

class PDOFactory
{
    public static function getMySqlConnection(): PDO
    {
        try {
            return new PDO('mysql:host=db;dbname=personnage', 'root', 'example');
        } catch
        (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

}
