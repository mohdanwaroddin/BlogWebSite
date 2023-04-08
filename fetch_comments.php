
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>fetch_comments</title>
	<style type="text/css">
		#did{
			margin-top: 15px;
			padding-left: 20px;
			background-color: mintcream;

		}
		#pid{
			font-family: clibri;
			font-size: 17px ;
			color: black;
		}
	#hid{
		font-family: cursive ;
	}
		#panid{
			margin-left: 200px;
			padding: 10px;
			width: 730px;
			height: 500px;
			overflow: hidden;
			overflow-y: scroll;
			
		}
		.panel-heading{
			font-size: 30px;
			font-family: algerian;
		}
		#pid2{
		background-color: whitesmoke;
		width: 150px;	
		text-align: center;
		}
	</style>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


<body>

<?php include('connect.php'); ?>
<div class="panel panel-info" id="panid">
	<div class="panel-heading">Comments</div>

<?php	$sql = "SELECT * FROM comments where blog_id=$id";
$res = mysqli_query($connection, $sql); ?>
	
		
			<?php
			
	while ( $r = mysqli_fetch_assoc($res)) {
					

?>
	<div id="did"> <br>
		<h4 id="hid"><strong><?php echo ucwords($r['name']); ?></strong></h4>
<br>
		<p id="pid"><?php echo $r['subject']; ?></p><br>
		<p id="pid2"><?php echo $r['submittime']; ?></p>
			<hr>

		</div> 
<?php 
 }
?>
		
</div>
</body>
</html>