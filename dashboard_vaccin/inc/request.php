<?php

function requeteListeUser(){
global $pdo;

$sql = "SELECT * FROM v5_users";
$query= $pdo -> prepare($sql) ;
$query-> execute();
$tableauUsers = $query -> fetchall();
return $tableauUsers;
}

function requeteListeVaccins(){
global $pdo;

$sql = "SELECT * FROM v5_vaccin WHERE 1=1";
$query= $pdo -> prepare($sql) ;
$query-> execute();
$tableauVaccins = $query -> fetchall();
return $tableauVaccins;
}


//Fonction pour effacer un utilisateur en fonction de son id
function deleteuser($id){
  global $pdo;

  $sql="DELETE FROM v5_users WHERE id=:id";
  $query = $pdo ->prepare($sql);
  $query -> bindValue(':id',$id,PDO::PARAM_INT);
  $query -> execute();
}

?>
