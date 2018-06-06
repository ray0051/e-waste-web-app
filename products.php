<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HEADER</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/header.css">

<style type="text/css">
  
</style>
<style type="text/css">
 
</style>


</head> 
<body style="background-color: #dedede color: white" >
<nav class="navbar navbar-default navbar-expand-xl navbar-light navbar1" style="background-image: url(img/header.jpg); background-repeat: no-repeat; background-size: cover; font-size: 25px" >
  <div class="navbar-header d-flex col">
    
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
      <span class="navbar-toggler-icon"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start" style="padding-top: 25px; color: white">
   
     <center>E-WASTE Items You Can Buy</center>
      
  </div>
</nav>

<?php
echo "<div style='font-size: 25px;padding-right: 2px;padding-left: 2px'>";
require('config.php');
$query = "SELECT item,conditions,address,phone,pic,price,path from products";

$response = mysqli_query($con,$query);

if ($response) {
  echo "<table colspan='2' style='border:2px'>

  <tr><td colspan='2'><u>pitchure</u> </td>
  <td colspan='2'  style='padding-left: 180px;padding-left: 100px'></td>

  <td colspan='2'> <u>item</u> </td>
  <td colspan='2' style='padding-left: 180px'></td>

  <td colspan='2'><u> condition</u> </td>
  <td colspan='2' style='padding-left: 180px'></td>

  <td colspan='2'><u> price</u> </td>
  <td colspan='2' style='padding-left: 180px'></td>

   <td colspan='2'><u> address</u> </td>
  <td colspan='2' style='padding-left: 180px'></td>

   <td colspan='2'><u> email</u> </td>
  <td colspan='2' style='padding-left: 180px'></td>


  </tr>";



  
  

  while($row=mysqli_fetch_array($response))
  {
  $path = $row['path'];

    echo "<tr colspan='2'>";
 
echo"
    <td colspan='2'>";  echo '<img src ="'.$path.'" width="100px" height="100px"/>'; echo "</td>";
   echo " <td colspan='2'>
 </td>
        <td colspan='2'>".$row['item']."</td>
<td colspan='2'></td>
    <td colspan='2'>".$row['conditions']."</td>
    <td colspan='2'>
 </td>


    <td colspan='2'>".$row['price']."</td>
    <td colspan='2'>
 </td>

 <td colspan='2'>".$row['address']."</td>
    <td colspan='2'>
 </td>

 <td colspan='2'><a href='https://mail.google.com/mail/u/0/#inbox'>".$row['phone']."</a></td>
    <td colspan='2'>
 </td>
 
</tr>";
  }
  
 echo" </table>";
  # code...
}

mysqli_close($con);
?>
<center>
 <a href="upload.php"> <BUTTON class="btn btn-primary" type="submit" style=" font-size: 20px; text-align: center; padding-right: 30px;" id="upload"> Upload</BUTTON></a></center>
 </div>";
</body>
</html>                                                        