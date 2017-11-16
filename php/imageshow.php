<?php 
include('db.php');
    $query= "SELECT * from image ORDER BY image_id DESC ";
	$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>	BOOTSTRAP</title>
    <link href="boot/css/bootstrap.min.css"  type="text/css" rel="stylesheet">
	<link href="boot/css/bs1.css"  type="text/css" rel="stylesheet">
</head>

<body>


<div class="container" style="border:2px solid black;">
<div style="margin-left:400px;">
<h1 style="color:#DC143C;text-shadow: 3px 2px black;font-family:serif;font-style: italic;">PICTURES</h1>
<button class="btn btn-primary" onclick="typeWriter()">Click here</button>
<a href="image.php"><button class="btn btn-primary">ADD MORE PICTURES</button></a>
</div>
<p id="demo"></p>
<hr>
<?php while($data = mysqli_fetch_array($result)){ ?>

<div class="row">

<div class="col-md-6">
<img src="images/<?php echo $data['image_name'];?>" height="200" width="400">
</div>
<div class="col-md-6">
<?php echo $data['title'];?><br>
<?php echo $data['description'];?>
</div>

</div><hr>

<?php } ?>
</div>
<script src="boot/js/jquery.min.js"></script>
<script>
var i = 0;
var txt = 'We are excited to announce our newest location in Fall River, MA. We will be apart of the SouthCoast Marketplace. Our new theater will feature 11 screens, luxury recliners, reserved seating, freestyle coke machines, an Atmos Sound System, an extended concession menu and a beer & wine bar.!'; 
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>
</body>
</html>