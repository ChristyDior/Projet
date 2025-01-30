<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soumission du Dossier de Stage</title>
    <link rel="stylesheet" href="../css/candidatures.css">
    <link rel="stylesheet" href="../css/text.css">
</head>
<body>
<div class="instructions-container">
    <h2>Instructions pour la soumission du dossier de stage</h2>
    <p>Pour postuler à une offre de stage, veuillez préparer les documents suivants et les télécharger à l'aide du formulaire ci-dessous :</p>
    <ul>
        <li><strong>Lettre de motivation</strong> : Une lettre dans laquelle vous exprimez vos motivations pour le stage proposé, ainsi que les compétences que vous pouvez apporter. <em>Format accepté : PDF, DOC, DOCX</em>.</li>
        <li><strong>Curriculum Vitae (CV)</strong> : Votre CV actualisé, détaillant vos expériences professionnelles, formations, et compétences pertinentes pour le stage. <em>Format accepté : PDF, DOC, DOCX</em>.</li>
        <li><strong>Carte d'identité</strong> : Une copie de votre carte d'identité nationale pour prouver votre identité. <em>Format accepté : JPG, PNG, PDF</em>.</li>
        <li><strong>Carte d'étudiant</strong> : Une copie de votre carte d'étudiant valide (facultative, mais recommandée). <em>Format accepté : JPG, PNG, PDF</em>.</li>
        <li><strong>Relevé de notes</strong> : Votre relevé de notes académique des derniers semestres ou années universitaires. <em>Format accepté : PDF, JPG, PNG</em>.</li>
        <li><strong>Attestation de scolarité</strong> : Une attestation récente de scolarité délivrée par votre établissement d'enseignement. <em>Format accepté : PDF, JPG, PNG</em>.</li>
        <li><strong>Photo d'identité</strong> : Une photo d'identité récente pour compléter votre dossier. <em>Format accepté : JPG, PNG</em>.</li>
    </ul>
    <p>Une fois que tous les fichiers sont prêts, vous pouvez les télécharger en remplissant le formulaire ci-dessous. Assurez-vous que les fichiers sont correctement nommés et conformes aux exigences de taille.</p>
    <p>Si vous avez des questions ou des préoccupations concernant votre candidature, n'hésitez pas à nous contacter à l'adresse email indiquée sur la page de contact.</p>
    <p>Bonne chance pour votre candidature!</p>
</div>

    <div class="form-container">
        <h1>Soumettre votre Dossier de Stage</h1>
        <form action="../public/uplord_dossier.php" method="POST" enctype="multipart/form-data">
            <label for="lettre_motivation">Lettre de motivation :</label>
            <input type="file" name="lettre_motivation" required>

            <label for="cv">Curriculum Vitae (CV) :</label>
            <input type="file" name="cv" required>

            <label for="carte_identite">Carte d'identité :</label>
            <input type="file" name="carte_identite" required>

            <label for="carte_etudiant">Carte d'étudiant :</label>
            <input type="file" name="carte_etudiant">

            <label for="releve_notes">Relevé de notes :</label>
            <input type="file" name="releve_notes">

            <label for="attestation_scolarite">Attestation de scolarité :</label>
            <input type="file" name="attestation_scolarite">

            <label for="photo_identite">Photo d'identité :</label>
            <input type="file" name="photo_identite">

            <button type="submit">Soumettre</button>
        </form>
    </div>
</body>
</html>
