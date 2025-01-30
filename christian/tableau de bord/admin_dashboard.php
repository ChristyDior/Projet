<?php
// session_start();
// if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
//     header('Location: ../page/login.php');
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex">
    <?php include '../sidebar/sidebar.php'; ?>
    <main class="flex-1 p-6">
        <h1 class="text-2xl font-bold">Tableau de Bord Administrateur</h1>
        <div class="mt-4 grid grid-cols-3 gap-4">
            <div class="bg-blue-600 text-white p-4 rounded shadow">Stagiaires : 10</div>
            <div class="bg-green-600 text-white p-4 rounded shadow">Entreprises : 5</div>
            <div class="bg-red-600 text-white p-4 rounded shadow">Candidatures : 15</div>
        </div>
    </main>
</body>
</html>
