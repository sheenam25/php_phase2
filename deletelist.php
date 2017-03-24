<?php

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    require_once 'database.php';
    $query = "DELETE FROM faq WHERE id = :id";
    $pdostmt = $db->prepare($query);
    $pdostmt->bindValue(':id',$id, PDO::PARAM_INT);
    $row = $pdostmt->execute();
    //echo "Deleted " . $row;
    header("Location: listfaq.php");
}