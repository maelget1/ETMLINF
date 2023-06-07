<?php
session_start();
include_once("PDO.php");
$pdo = new PDOconn();

$isOK=true;
$usernamePattern = '/^\w{1,30}/';
$namesPattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{1,50}$/u";
$mailPattern = "/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/";
$passwordPattern = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
if(!preg_match($usernamePattern, $_POST["pseudo"]))
{
    $isOK = false;
    $_SESSION["error"] .= "Le nom d'utilisateur ne doit contenir que des lettres, des chiffres ou des tirets du bas. De plus, il doit faire moins de 50 caractères\n";
}
if(!preg_match($mailPattern, $_POST["mail"]))
{
    $isOK = false;
    $_SESSION["error"] .= "Votre mail ne suit pas la norme de nommage d'une adresse mail. (exemple.name@domain.com).\n";
}
$user = $pdo->searchDuplicate($_POST['pseudo'], $_POST['mail']);
if(!preg_match($namesPattern, $_POST["firstname"]))
{
    $isOK = false;
    $_SESSION["error"] .= "Votre prénom est trop long ou contient trop de caractères. (50 caractères max.)\n";
}
if(!preg_match($namesPattern, $_POST["lastname"]))
{
    $isOK = false;
    $_SESSION["error"] .= "Votre nom est trop long ou contient trop de caractères. (50 caractères max.)\n";
}
if(!preg_match($passwordPattern, $_POST["password"]))
{
    $isOK = false;
    $_SESSION["error"] .= "votre mot de passe ne respecte pas les mesures imposées.\n";
}
if($_POST["password"] != $_POST["confirmPassword"])
{
    $isOK = false;
    $_SESSION["error"] .= "La confirmation du mot de passe ne corresponds pas.\n";
}
//TODO split la requête pour vérifier les mails et les pseudos de manières indépendantes
if(!empty($user))
{
    $isOK = false;
    var_dump($user);
    $_SESSION["error"] .= "cet utilisateur existe déjà avec ce nom ou cette adresse mail. veuillez choisir un autre nom ou une autre adresse mail.\n";
    $pdo->result = "";
}
if($isOK)
{
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $pseudo = $_POST["pseudo"];
    $mail = $_POST["mail"];
    $pswd = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $pdo->createUser($pseudo, $lastname, $firstname, $pswd, $mail);
    $_SESSION["isConnected"] = true;
    $_SESSION['connectedUser'] = $pseudo;
    $_SESSION['userMail'] = $mail;
    //TODO mettre la page du compte utilisateur
    header('Location: home.php');
}
else
{
    header('Location: signIn.php');
}
?>