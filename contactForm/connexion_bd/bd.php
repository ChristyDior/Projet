
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'gestion_placement_stagiaire';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
