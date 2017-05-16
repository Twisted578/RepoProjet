<?php 
       include 'INC/includes.php';
       ini_set('display_errors',1);


       //insertion du message à l'aide d'une requête préparée
       $req = $db->prepare('INSERT INTO edition (id_chapitre, titre, corps, date_creation) VALUES (?, ?, ?,NOW)');
       $req -> execute(array($_POST['id_chapitre'], $_POST['titre'], $_POST['corps'], $_POST['date_creation']));

       //redirection vers la page d'édition
       header('location: page_admin.php');

?>