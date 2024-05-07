
<?php 
include '../includes/database.php';
session_start();

if (!isset($_SESSION["userFname"])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header('Location:../pages/signinPage.php'); 

    // Vérifier si le formulaire est soumis
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $query = 'SELECT * FROM clients WHERE Email= ? AND PasswordHash=?';
    
        $statement = $connect->prepare($query);
        $statement->execute([$email,$password]);

        $count = $statement->rowCount();
    
        if ($count > 0) {
            // Utilisateur authentifié, enregistrer les informations de session et rediriger vers la page de profil
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            $_SESSION["userFname"] = $user['FirstName'];
            $_SESSION["userLname"] = $user['LastName'];
            $_SESSION["email"] = $user['Email'];
            $_SESSION["phone"] = $user['PhoneNumber'];
            $_SESSION["address"] = $user['Address'];
            $_SESSION["ClientID"] = $user['ClientID'];
            header('Location:../pages/profilePage.php'); 
            exit();
        } else {
            // Mauvaises informations d'identification, rediriger vers la page de connexion
            header('Location:../pages/signinPage.php');
            exit();
        }
    } 
} else {
    // Utilisateur déjà connecté, rediriger vers la page de profil
    header('Location:../pages/profilePage.php'); 
    exit();
}
?>