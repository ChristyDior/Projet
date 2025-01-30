<?php
// Exemple simple de liens dans la sidebar selon le rôle
$role = $_SESSION['role'] ?? null;
?>
<aside class="w-64 bg-gray-800 text-white min-h-screen">
    <nav class="flex flex-col space-y-4 py-6 px-4">
        <a href="index.php" class="hover:bg-gray-700 px-4 py-2 rounded">Accueil</a>
        <?php if ($role === 'admin'): ?>
            <a href="stagiaires.php" class="hover:bg-gray-700 px-4 py-2 rounded">Stagiaires</a>
            <a href="entreprises.php" class="hover:bg-gray-700 px-4 py-2 rounded">Entreprises</a>
            <a href="offres_stage.php" class="hover:bg-gray-700 px-4 py-2 rounded">Offres de stage</a>
            <a href="candidatures.php" class="hover:bg-gray-700 px-4 py-2 rounded">Candidatures</a>
        <?php elseif ($role === 'stagiaire'): ?>
            <a href="offres_disponibles.php" class="hover:bg-gray-700 px-4 py-2 rounded">Offres disponibles</a>
            <a href="mes_candidatures.php" class="hover:bg-gray-700 px-4 py-2 rounded">Mes candidatures</a>
        <?php elseif ($role === 'employeur'): ?>
            <a href="mes_offres.php" class="hover:bg-gray-700 px-4 py-2 rounded">Mes offres</a>
            <a href="candidatures_reçues.php" class="hover:bg-gray-700 px-4 py-2 rounded">Candidatures reçues</a>
        <?php endif; ?>
        <a href="profil.php" class="hover:bg-gray-700 px-4 py-2 rounded">Mon profil</a>
    </nav>
</aside>
