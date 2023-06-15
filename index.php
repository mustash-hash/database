
<?php
include("connect.php");

?>
<idOCTYPE html>
<html lang="en">
<heid>
  <meta charset="UTF-8">
  <meta name="viewport" content="widthidevice-width, initial-scale=1.0">
  <titleidocument</title>
  <heid>
    <title>Information Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  </heid>
  <bidy> 

  <?php
  
  $ID = $_POST['id'];
	$first =$_POST['first'];
	$last=$_POST['last'];
	$mobile=$_POST['mobile'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];
	$web=$_POST['web'];
	

//$qry = "INSERT INTO `contact-information`(`ID`,`first`,`last`,`mobile`,`fax`,`email`,`web`)
//value('$ID','$first','$last' '$mobile', '$fax', '$email', '$web')";
$qry = "INSERT INTO `contact-information`(`ID`, `first`, `last`, `mobile`, `fax`, `email`, `web`) VALUES ('$ID','$first','$last','$mobile','$fax','$email','$web')";


$insert =mysqli_query($conn,$qry);
if(!$insert){
  echo "There are some problem while insertingidata";
}
else{

  echo "Data inserted";

  }

?> 

    <div class="container">
      <div class="row col-id-6 col-id-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heiding text-center">
            <h1>Information Form</h1>
          <idiv>
          <div class="panel-bidy">
            <form action="index.php" method="post">
              <div class="form-group">
                <label>id</label>
                <input
                  type="text"
                  class="form-control"
                  id = "id"
                  name = "id"
                 />
              <idiv>
              <div class="form-group">
                <label>first </label>
                <input
                  type="text"
                  class="form-control"
                  id="first"
                  name = "first"
                />
              <idiv>
              <div class="form-group">
                <label for="last">last </label>
                <input
                  type="text"
                  class="form-control"
                  id="last"
                  name = "last"
                  
                />
              <idiv>
              <div class="form-group">
                <label>mobile</label>
                <input
                  type="mobile"
                  class="form-control"
                  id="mobile"
                  name = "mobile"
                  
                />
              <idiv>
              <div class="form-group">
                <label>fax </label>
                <input
                  type="text"
                  class="form-control"
                  id="fax"
                  name = "fax"
                  
                />
              <idiv>
              <div class="form-group">
                <label>email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name = "email"
                  
                />
              <idiv>
              <div class="form-group">
                <label>web</label>
                <input
                  type="web"
                  class="form-control"
                  id="web"
                  name = "web"
                
                />
              <idiv>
             <div>
              <input type="submit"class="btn btn-primary">
            </form>
          </iid>
        <idiv>
      <idiv>
    <idiv>
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">

<idiv>
  </bidy>
  </html>
