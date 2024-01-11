<?php
if (isset($_POST['submit']))
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    
    include 'cv.phtml';
}
else
{
    include 'formulaire.phtml';
}

?>