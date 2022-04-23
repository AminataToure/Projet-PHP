<?php
@$cin = $_POST['cin'];
@$nom = $_POST['nom'];
@$dateN = $_POST['date'];
@$email = $_POST['mail'];
@$login = $_POST['login'];
@$motP = $_POST['motPass'];
@$cmotP = $_POST['Cofpass'];
if (isset($_POST['submit'])) {
    if (empty($cin) && empty($dateN) && empty($email) && empty($login) && empty($motP)) {
        @$messageGroupe = '<div class="erreur">Les ne doivent pas être vide.</div>';
    }
    if (empty($cin)) {
        @$messageCin = '<div class="erreur">Cin laissé vide.</div>';
    }
    if (empty($nom)) {
        @$messageNom = '<div class="erreur">Nom laissé vide.</div>';
    }
    if (empty($dateN)) {
        @$messageDate = '<div class="erreur">date laissé vide.</div>';
    }
    if (empty($email)) {
        @$messageEmail = '<div class="erreur">Email laissé vide.</div>';
    }
    if (empty($login)) {
        @$messageLogin = '<div class="erreur">Login laissé vide.</div>';
    }
    if (empty($motP)) {
        @$messageMot = '<div class="erreur">Mot de passe laissé vide.</div>';
    }
    if ($motP != $cmotP) {
        @$message = '<div class="erreur">Les mots de passe ne sont pas identiques.</div>';
    }
    if (!empty(@$cin) && !empty(@$nom) && !empty(@$dateN) && !empty(@$email) && !empty(@$motP)) {
        include('../Model/User.php');
        $user = new User($login, $motP, $nom, $cin, $dateN, $email, 0);
        User::add_User($user);
        header('Location:../View/Authentification.php');
    }
}
