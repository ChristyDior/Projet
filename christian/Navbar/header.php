<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>
<header class="bg-blue-600 text-white shadow-lg">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <!-- Logo -->
        <a href="index.php" class="text-2xl font-bold">Mon Application</a>
        
        <!-- Navbar Links -->
        <nav class="flex items-center space-x-4">
            <?php if ($isLoggedIn): ?>
                <a href="profil.php" class="flex items-center space-x-2 hover:underline">
                    <span>Profil</span>
                    <img src="assets/profile-icon.png" alt="Profile Icon" class="w-6 h-6">
                </a>
                <a href="logout.php" class="hover:underline">Déconnexion</a>
                <?php if ($_SESSION['role'] === 'admin'): ?>
                    <a href="admin_dashboard.php" class="hover:underline">Administration</a>
                <?php endif; ?>
            <?php else: ?>
                <a href="login.php" class="hover:underline">Connexion</a>
                <a href="register.php" class="hover:underline">Créer un compte</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
