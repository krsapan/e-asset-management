<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>
<body>


	

	<div class="container">
		<h5><a href="create.php"><input type="button" class="btn btn-primary" value="Create Data"></a></h5><br><br>
		<h5><a href="search.php"><input type="button" class="btn btn-primary" value="Search Data"></a></h5><br><br>


		<div class="row">
			<div class="col-lg-10">

				<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">ASSET_ID</th>
					      <th scope="col">ASSET_HOLDER</th>
					      <th scope="col">ASSET_AMOUNT</th>
					      <th scope="col">UPDATE</th>
					      
					     </tr>
					  </thead>
					  <?php
					  include 'conn.php';
					  $query="SELECT * FROM asset";
					  $result=mysqli_query($conn,$query);
					  while($res=mysqli_fetch_array($result)){
					  ?>
					  <tbody class="table-group-divider">
					    <tr>
					      
					      <td><?php echo $res['asset_id']?></td>
					      <td><?php echo $res['asset_holder']?></td>
					      <td><?php echo $res['asset_amt']?></td>
					      
					       <td><a href="update.php?id=<?php echo $res['asset_id']?>>"><input type="button"  class="btn btn-success"value="UPDATE"></a></td>
					    </tr>
					</tbody>
				  <?php } ?>
			    </table>
				



			</div>
		</div>

	</div>
	<br><br>
	


</body>
</html>



