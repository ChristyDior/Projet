<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion et Placement des Stagiaires</title>
    <!-- Lien TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navigation -->
    <header class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-4">
            <div>
                <h1 class="text-2xl font-bold">Gestion des Stagiaires</h1>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="index.php" class="hover:underline">Accueil</a></li>
                    <li><a href="about.php" class="hover:underline">À propos</a></li>
                    <li><a href="contact.php" class="hover:underline">Contact</a></li>
                    <li><a href="platform.php" class="hover:underline">Espace Stagiaire</a></li>
                    <li><a href="admin/login.php" class="hover:underline">Administration</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Section principale -->
    <main class="container mx-auto py-10">
        <div class="bg-white shadow-md rounded-md p-6">
            <h2 class="text-2xl font-semibold text-gray-800">Bienvenue sur la plateforme de gestion des stagiaires</h2>
            <p class="mt-4 text-gray-600">
                Cette application vous permet de gérer les informations des stagiaires, d'assigner des encadrants, et de suivre le déroulement de leurs stages.
            </p>
            <div class="mt-6">
                <a href="register.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Créer un compte</a>
                <a href="login.php" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 ml-2">Se connecter</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; <?php echo date("Y"); ?> Gestion et Placement des Stagiaires. Tous droits réservés.
        </div>
    </footer>

</body>
</html>
