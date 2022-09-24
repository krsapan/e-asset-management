<!--
creating  php  code
-->

<?php
include 'conn.php';
if(count($_POST)!=0)
{
	extract($_POST);
	$query="INSERT INTO asset(asset_id,asset_holder,asset_amt) Values('$asset_id','$asset_holder','$asset_amt')";
	$result=mysqli_query($conn,$query);
	if($result==true)
	{
		echo "Record Inserted ";
	}
	else
	{
		echo "Failed";
	}


}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h5><a href="display.php"><input type="button" class="btn btn-primary" value="Display Data"></a></h5>
		<div class="row">
			<div class="col-lg-6 m-auto">
				<form action="#" method="post">
						<div class="card">
					<div class="card-header bg-dark">
						<h1 class="text-center text-white">Insert New Data</h1>
					</div>
					<div class="form-group">
						<label for="asset_id" >Asset_id</label>
						<input type="text" name="asset_id" class="form-control">

					</div>
					<div class="form-group">
						<label for="asset_holder">Asset_holder</label>
						<input type="text" name="asset_holder" class="form-control">

					</div>
					<div class="form-group">
						<label for="asset_amt">Asset_amt</label>
						<input type="text" name="asset_amt" class="form-control">

					</div>
					<button  type="submit " class="btn  btn-success">SUBMIT</button>

				</div>
				
				</form>
				
				

			</div>	

		</div>



	</div>	

</body>
</html>