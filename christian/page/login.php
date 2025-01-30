<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simulation d'authentification (à remplacer par une base de données)
    if ($email === 'admin@example.com' && $password === 'admin') {
        $_SESSION['user_id'] = 1;
        $_SESSION['role'] = 'admin';
        header('Location: admin_dashboard.php');
        exit;
    } elseif ($email === 'stagiaire@example.com' && $password === 'stagiaire') {
        $_SESSION['user_id'] = 2;
        $_SESSION['role'] = 'stagiaire';
        header('Location: stagiaire_dashboard.php');
        exit;
    } elseif ($email === 'employeur@example.com' && $password === 'employeur') {
        $_SESSION['user_id'] = 3;
        $_SESSION['role'] = 'employeur';
        header('Location: employeur_dashboard.php');
        exit;
    } else {
        $error = "Identifiants invalides.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <form class="bg-white shadow-md rounded p-6 max-w-sm w-full" method="POST" action="">
        <h2 class="text-2xl font-bold mb-4">Connexion</h2>
        <?php if (!empty($error)): ?>
            <p class="text-red-500"><?php echo $error; ?></p>
        <?php endif; ?>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full px-3 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Mot de passe</label>
            <input type="password" name="password" class="w-full px-3 py-2 border rounded" required>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white px-3 py-2 rounded">Se connecter</button>
        <p class="mt-4 text-gray-600">Pas encore de compte ? <a href="register.php" class="text-blue-600">Créer un compte</a></p>
    </form>
</body>
</html>
