<?php
	include "db_connect.php";
	$bar= $_GET['barcode'];
	$sql = mysql_query("select * from farmers WHERE barcode='$bar'") or die(mysql_error());
	//die(print_r($sql));
	if(mysql_num_rows($sql)< 1)
	{
		header("location:view.php?error=1");
	}
	$g=mysql_fetch_array($sql);
	//die(print_r($g));
?>
<?php include 'includes/header.php'; ?> 
			<div class="col-md-6">
				<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
					<ul class="nav navbar-nav navbar-right menu">
							<li><a href="index.php" class="page-scroll active">Home</a></li>
							<li><a href="register.php" class="page-scroll">Registration</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>

<div class="container-fluid features" id="section2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center features-text" style="color">Farmer's Record</h2>
			</div>
			<form>
			<div class="col-md-12" id="formfont">
				<div class="col-md-1"></div>

				<div class="col-md-10">
			
					<div class="col-md-12">
						<h3  style="text-align:center">Personal Information</h3><br/><br/>
					</div>
					<div class="row">
					<div class="col-md-5"></div>
						<div class="col-md-2">
								<img src="uploads/<?php echo $g['picture']?>" width="120px" height="100px">
						</div>
					<div class="col-md-5"></div>

					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Surname:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['surname']?>" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Other Names:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['othernames']?>" class="form-control"><br/>
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Address:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['address']?>" class="form-control"><br/>
						</div>
						<div class="col-md-6">
							<label>Phone Number:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['phone_number']?>" class="form-control"><br/>
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
						<?php
							$id=$g['LGA_id'];
							$qwery=mysql_query("SELECT * FROM localgov WHERE id='$id'") or die(mysql_error());
							$lg=mysql_fetch_array($qwery);
						?>
							<label>LGA:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $lg['name']?>" class="form-control"><br/>
						</div>
						<div class="col-md-6">
							<?php
								$id=$g['ward_id'];
								$qwery=mysql_query("SELECT * FROM ward WHERE id='$id'") or die(mysql_error());
								$lg=mysql_fetch_array($qwery);
							?>
							<label>ward:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $lg['name']?>" class="form-control"><br/>
						</div>
					</div><br/>
					<div class="col-md-12">
						<h3  style="text-align:center">Farm information</h3>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<?php
								$id=$g['farmcat_id'];
								$qwery=mysql_query("SELECT * FROM farming_category WHERE id='$id'") or die(mysql_error());
								$lg=mysql_fetch_array($qwery);
							?>
							<label>Farming category:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $lg['name'];?>" class="form-control"><br/>
						</div>
						<div class="col-md-6">
							<?php
								$id=$g['farmtype_id'];
								$qwery=mysql_query("SELECT * FROM farm_type WHERE id='$id'") or die(mysql_error());
								$lg=mysql_fetch_array($qwery);
							?>
							<label>Farming Type:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $lg['description']?>" class="form-control"><br/>
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Number of Hectares:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['number_of_hectares']?>" class="form-control"><br/>
						</div>
						<div class="col-md-6">
							<label>Number of Acres:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['number_of_acres']?>" class="form-control"><br/>
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Texture of Land:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['land_texture']?>" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Farming Method:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['farming_method'];?>" class="form-control">
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Total Yield of product:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['product_yield'];?>" class="form-control"><br/>
						</div>
						<div class="col-md-6">
							<label>Geolocation:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['geolocation']; ?>" class="form-control"><br/>
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Earnings</label>								<input type="text" name="" value="" Placeholder="<?php echo $g['earning'];?>" class="form-control"><br/>
						</div>
						<div class="col-md-6">
							<label>Challenges:</label>
								<input type="text" name="" value="" Placeholder="<?php echo $g['challenges'];?>" class="form-control"><br/>
						</div>
					</div>
					<br/>
					
				</div>

				<div class="col-md-1"></div>
					
			</div>
			</form>		
		</div>
	</div>
</div>

<?php include 'includes/footer.php'; ?>