<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Interaction utilisateur via un message</title>
</head>
    <body>
        <?php
            // Connexion à la base de données
            $host = "localhost";
            $user = "root";
            $password = "";
            $dbname = "gestion_placement_stagiaire";

            $conn = new mysqli($host, $user, $password, $dbname);
            if ($conn->connect_error) {
                die("Erreur de connexion : " . $conn->connect_error);
            }

            // Dossier où enregistrer les fichiers
            $upload_dir = "uploads/";

            // Créer le dossier si nécessaire
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            // Récupérer les fichiers soumis
            $lettre_motivation = $upload_dir . basename($_FILES['lettre_motivation']['name']);
            $cv = $upload_dir . basename($_FILES['cv']['name']);
            $carte_identite = $upload_dir . basename($_FILES['carte_identite']['name']);
            $carte_etudiant = $upload_dir . basename($_FILES['carte_etudiant']['name']);
            $releve_notes = $upload_dir . basename($_FILES['releve_notes']['name']);
            $attestation_scolarite = $upload_dir . basename($_FILES['attestation_scolarite']['name']);
            $photo_identite = $upload_dir . basename($_FILES['photo_identite']['name']);

            // Déplacer les fichiers uploadés vers le dossier de destination
            move_uploaded_file($_FILES['lettre_motivation']['tmp_name'], $lettre_motivation);
            move_uploaded_file($_FILES['cv']['tmp_name'], $cv);
            move_uploaded_file($_FILES['carte_identite']['tmp_name'], $carte_identite);
            move_uploaded_file($_FILES['carte_etudiant']['tmp_name'], $carte_etudiant);
            move_uploaded_file($_FILES['releve_notes']['tmp_name'], $releve_notes);
            move_uploaded_file($_FILES['attestation_scolarite']['tmp_name'], $attestation_scolarite);
            move_uploaded_file($_FILES['photo_identite']['tmp_name'], $photo_identite);

            // Enregistrer les informations dans la base de données
            $sql = "INSERT INTO dossiers (id_stagiaire, lettre_motivation, cv, carte_identite, carte_etudiant, releve_notes, attestation_scolarite, photo_identite)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $id_stagiaire = 1; // Remplacer par l'ID du stagiaire connecté
            $stmt->bind_param("isssssss", $id_stagiaire, $lettre_motivation, $cv, $carte_identite, $carte_etudiant, $releve_notes, $attestation_scolarite, $photo_identite);

            if ($stmt->execute()) {
                echo "
                <script>
                    // Afficher un message de confirmation
                    if (confirm('Dossier soumis avec succès ! Cliquez sur OK pour revenir au tableau de bord.')) {
                        // Redirection vers admin_dashboard.php
                        window.location.href = '../public/admin_dashboard.php';
                    }
                </script>";
                
            } else {
                echo "Erreur : " . $conn->error;
            }

            // Fermer la connexion
            $stmt->close();
            $conn->close();
        ?>
    </body>
</html>
