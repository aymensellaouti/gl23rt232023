<?php
// Vérifier l'existance des credentials
if (isset($_POST['username']) && isset($_POST['password'])) {
//Vérifier la véracité des credentials
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
    //On crée une session et on le redirige vers la page home
        session_start();
        $_SESSION['user'] = $_POST['username'];
        header("Location:home.php");
        return;
    }
}
//sinon on le redirige vers la page login
header("Location:login.php?error=veuillez vérifier vos credentials");