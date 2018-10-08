<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project Management Uploads</title>
  <meta charset="utf-8">
  
  <!---Image Courtesy: http://www.skiexpo.ru/assets/catalog/1300.JPG-->
  <link rel="shortcut icon" href="img.jpeg" type="image/x-icon" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body background = "bg.jpg">
<br><br>
<div class="col-lg-2">
</div>
<div class="col-lg-8">
<div class="panel panel-primary">
	<div class="panel-heading"><center>Project Management - Team 12 - Homepage</center></div><br>
	<div class ="panel-info"><center>Team Members: <a href="mailto:harmitjasani@tamu.edu">Harmit Jasani</a>, <a href="mailto:shreyank@tamu.edu">Shreyank Prabhu</a>, <a href="mailto:bhavishya1809@tamu.edu">Bhavishya Tyagi</a>, <a href="mailto:anshuman.bhatnagar@tamu.edu">Anshuman Bhatnagar</a><br><br>Team Group ID: <a href="mailto:fall2018602group12@tamu.edu">Fall 2018, Project Management Section 602, Group Number 12</a><br><br><center></div>
</div>
<div class="col-lg-2">
</div>

<div class="alert alert-danger">
    <strong> <center>Please ensure that the filenames do not contain any spaces.</center></strong>
 </div>

<?php
$i=1;
for ($i=1; $i<=10; $i++) { 
if(isset($_POST['submit'.$i]))
{

	$name = $_FILES['fileToUpload']['name'];
	$size = $_FILES['fileToUpload']['size'];
	$type = $_FILES['fileToUpload']['type'];
	$tmp_location = $_FILES['fileToUpload']['tmp_name'];
	$file_store = "Files/Assignment".$i."/".$name;

	move_uploaded_file($tmp_location, $file_store);
}
?>
<div class="panel panel-success">
      <div class="panel-heading">Assignment <?php echo $i ?></div>
      <div class="panel-body"><?php $dir = "./Files/Assignment".$i."/";
$counter=0;
$c=1; ?>
<div class = "form-group">
<form action="" method="POST" enctype="multipart/form-data">
    <center><input type="file" class = "form-control-file" name="fileToUpload" id="fileToUpload"></center><br>
    <center><input type="submit" class = "btn btn-success" value="Upload File" name = <?php echo "submit".$i?>> </center>
</form>
</div>
<?php  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
    	if($counter>=2) {

      		echo $c.": "."<a href = ".$dir."".$file." download>" . $file. "</a><br>";
      		$c+=1;
      	}
      	$counter+=1;
      	
    }
    closedir($dh);
  }
  ?>
</div>
</div>
<?php } ?>
</body>
</html>