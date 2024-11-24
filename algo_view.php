<?php
include 'db.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "UPDATE notes SET views = views + 1 WHERE id = $id";
    mysqli_query($conn, $sql);
    header("Location: view_note.php?id=$id");
    exit();
}else{
    header("Location: index.php");
    exit();
}