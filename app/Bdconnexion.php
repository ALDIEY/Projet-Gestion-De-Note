<?php


class Bdconnexion
{
 
public function connexion()
{

$serveur='localhost';
$dbname='GESTION_DE_NOTE';
$login='root';
$password='Alkir@320';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);


try {
    return new PDO("mysql:host=$serveur;dbname=$dbname", $login, $password, $options);

} catch (Exception $e) {
    die ('Erreur de connexion : '.$e->getMessage());

}


}
}


