<?php
// Informations de connexion à la base de données
$host = 'localhost'; // L'adresse de votre serveur MySQL
$dbname = 'gestion_placement_stagiaire'; // Nom de la base de données
$username = 'root'; // Votre nom d'utilisateur MySQL
$password = ''; // Votre mot de passe MySQL

// Créer une connexion
$connection = new mysqli($host, $username, $password, $dbname);

// Vérifier la connexion
if ($connection->connect_error) {
    die("Échec de la connexion : " . $connection->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Préparer la requête pour éviter les injections SQL
    $stmt = $connection->prepare("SELECT mot_de_passe FROM utilisateurs WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Si l'email existe, récupérer le mot de passe
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Vérifier le mot de passe
        if (password_verify($mot_de_passe, $hashed_password)) {
            // Authentification réussie
            echo "Connexion réussie !";
            // Rediriger vers une page protégée ou une page d'accueil
            header("Location: dashboard.php"); // Changez vers votre page d'accueil
            exit();
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect.";
        }
    } else {
        // Email non trouvé
        echo "Aucun compte trouvé avec cet email.";
    }

    $stmt->close();
}

$connection->close();
?>