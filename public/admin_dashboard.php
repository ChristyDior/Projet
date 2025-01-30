<?php
session_start();
include '../contactForm/connexion_bd/bd.php';

// Vérifier si l'utilisateur est connecté et s'il est admin
//if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
//    header('Location: ../contactForm/formulaire.php');
//    exit();
//}

// Récupérer les statistiques
$nbStagiaires = $conn->query("SELECT COUNT(*) AS total FROM stagiaires")->fetch_assoc()['total'];
$nbEntreprises = $conn->query("SELECT COUNT(*) AS total FROM entreprise")->fetch_assoc()['total'];
$nbEntreprises = $conn->query("SELECT COUNT(*) AS total FROM entreprise")->fetch_assoc()['total'];
$nbOffres = $conn->query("SELECT COUNT(*) AS total FROM stage")->fetch_assoc()['total'];
//$nbCandidatures = $conn->query("SELECT COUNT(*) AS total FROM candidatures")->fetch_assoc()['total'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Administrateur</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers le fichier CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Barre de Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="liste_stagiaires.html">Stagiaires</a></li>
                    <li class="nav-item"><a class="nav-link" href="entreprises.php">Entreprises</a></li>
                    <li class="nav-item"><a class="nav-link" href="offres_stage.php">Offres de Stage</a></li>
                    <li class="nav-item"><a class="nav-link" href="candidatures.php">Candidatures</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Déconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Contenu Principal -->
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Bienvenue, Administrateur</h1>
        
        <!-- Section Statistiques -->
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Stagiaires</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $nbStagiaires ?></h5>
                        <p class="card-text">Nombre total de stagiaires inscrits.</p>
                        <a href="stagiaires.php" class="btn btn-light">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Entreprises</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $nbEntreprises ?></h5>
                        <p class="card-text">Nombre total d'entreprises partenaires.</p>
                        <a href="entreprises.php" class="btn btn-light">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Offres de Stage</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $nbOffres ?></h5>
                        <p class="card-text">Nombre total d'offres de stage disponibles.</p>
                        <a href="offres_stage.php" class="btn btn-light">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Candidatures</div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $nbCandidatures ?></h5>
                        <p class="card-text">Nombre total de candidatures soumises.</p>
                        <a href="candidatures.php" class="btn btn-light">Voir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accès Rapide -->
        <h3 class="mt-5 text-center">Accès Rapide</h3>
        <div class="row mt-4 text-center">
            <div class="col-md-3">
                <a href="test.html" class="btn btn-outline-primary w-100">Gérer les Stagiaires</a>
            </div>
            <div class="col-md-3">
                <a href="entreprises.php" class="btn btn-outline-success w-100">Gérer les Entreprises</a>
            </div>
            <div class="col-md-3">
                <a href="offres_stage.php" class="btn btn-outline-warning w-100">Gérer les Offres</a>
            </div>
            <div class="col-md-3">
                <a href="candidatures.php" class="btn btn-outline-danger w-100">Gérer les Candidatures</a>
            </div>
        </div>
    </div>

    <!-- Pied de page -->
    <footer class="text-center mt-5 py-3 bg-light">
        <p>&copy; <?= date('Y'); ?> Gestion des Stagiaires - Tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
