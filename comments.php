<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comments File</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
</head>
<body>

	<div class="panel panel-success">
<div class="panel-heading">Submit Your Comments</div>
  <div class="panel-body">
  	<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
  	<form method="post">
  	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Subject</label>
	    <textarea name="subject" class="form-control" rows="3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  </div>
</div>

<?php
require('connect.php');
if(isset($_GET['id']) & !empty($_GET['id'])){
	$id = $_GET['id'];}
if(isset($_POST) & !empty($_POST)){
	$name = $_POST['name'];
	$email =$_POST['email'];
	$subject =$_POST['subject'];

$arr=array('shit','bitch','damn','fuck','bastard','asshole','piss off','dick head','shit','bugger','bollocks','bloody','choad','crikey','rubbish','shag','wanker','twat','root','suck','bimbo','porn','sex');
$str=strtolower($subject);
foreach ($arr as $a) {
	if(strpos($str,$a)!==false){
				echo '<script>alert("Your Comment is Inappropriate!")</script>';

		return false;
	}
	else{

 $o = array('silentErrors' => true);
$res=mysqli_query($connection,"INSERT INTO comments (name,email,subject,blog_id) VALUES('$name', '$email', '$subject','$id')");
        echo '<script>alert("Your comment added successfully!")</script>';

    return true;

	

 }}
}
?>
</body>
</html>
