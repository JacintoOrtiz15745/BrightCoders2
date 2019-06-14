<?php

session_start();

$mysqli = new mysqli('localhost','root','','agenda_crud') or die(mysqli_error($mysqli));

$id =0;
$update = false;
$name = '';
$num = '';
$mail = '';


//save information
if(isset($_POST['save'])){
  $name = $_POST['name'];
  $num = $_POST['num'];
  $mail = $_POST['mail'];

  $mysqli->query("INSERT INTO data (name, num, mail) VALUES ('$name', '$num', '$mail')") or
    die($mysqli->error);

  $_SESSION['message'] = "Record has been saved!";
  $_SESSION['msg_type'] = "success";

  header("location: index.php");
}

//save information


//delete information
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

  $_SESSION['message'] = "Record has been deleted!";
  $_SESSION['msg_type'] = "danger";

  header("location: index.php");

}
//delete information


//edit information
if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $update = true;
  $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());

  if(count($result)==1){
      $row = $result->fetch_array();
      $name = $row['name'];
      $num = $row['num'];
      $mail = $row['mail'];
  }
//edit information


//update information
}

if(isset($_POST['update'])){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $num = $_POST['num'];
  $mail = $_POST['mail'];

  $mysqli->query("UPDATE data SET name='$name', num='$num', mail='$mail' WHERE id=$id") or
    die($mysqli->error);

  $_SESSION['message'] = "Record has been updated!";
  $_SESSION['msg_type'] = "warning";

  header('location: index.php');
}
//update information

?>
