<?php
@$object = $_POST['objectif'];
@$chauf = $_POST['chauffeur'];
@$voiture = $_POST['voiture'];
@$date = $_POST['date'];
@$description = $_POST['description'];
@$ville = $_POST['ville'];
if (isset($_POST['submitF'])) {
    if (empty($object) && empty($chauf) && empty($voiture) && empty($date) && empty($description) && empty($ville)) {
        @$messageGroupe = '<div class="erreur">Les ne doivent pas être vide.</div>';
    }
    if (empty($object)) {
        @$message_object = '<div class="erreur">Indiquer objectif de la mission.</div>';
    }
    if (empty($chauf)) {
        @$message_chauf = '<div class="erreur">Selectionner un chauffeur.</div>';
    }
    if (empty($voiture)) {
        @$message_voiture = '<div class="erreur">Selectionner une voiture.</div>';
    }
    if (empty($date)) {
        @$message_date = '<div class="erreur">Date laisser vide.</div>';
    }
    if (empty($description)) {
        @$message_description = '<div class="erreur">Donner une description pour la mission.</div>';
    }
    if (empty($ville)) {
        @$message_ville = '<div class="erreur">Indiquer la ville.</div>';
    }
    if ((!empty(@$object)) && (!empty(@$chauf)) && (!empty(@$voiture)) && (!empty(@$date)) && (!empty(@$description)) && (!empty(@$ville))) {
        include('../Model/Mission.php');
        // $mission = new Mission($object, $ville, $description, $date, 0, $description, $chauf, $voiture);
        Mission::add_Mission($mission);
        header('Location:../Controlleur/administrateur.php');
        // header('Location:../View/FormulaireMission.php');
    }
}
if (isset($_POST['Cancel'])) {
    header('Location:../Controlleur/administrateur.php');
}
// else {
//     header('Location:../View/FormulaireMission.php');
// }
