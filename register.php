<?php
	include "db_connect.php";

	$error="";
	if (isset($_POST['submit'])) {
		$fileExtension = strrchr($_FILES['picture']['name'], ".");

		$sn=strip_tags($_POST['surname']);
		$odaname=strip_tags($_POST['othername']);
		$LGA=strip_tags($_POST['LGA']);
		$ward=strip_tags($_POST['ward']);
		$address=strip_tags($_POST['address']);
		$number=strip_tags($_POST['number']);
		$category=strip_tags($_POST['category']);
		$farm_type=strip_tags($_POST['farm_type']);
		$hectare=strip_tags($_POST['hectare']);
		$acres=strip_tags($_POST['acres']);
		$texture=strip_tags($_POST['texture']);
		$farm_method=strip_tags($_POST['farm_method']);
		$yield=strip_tags($_POST['yield']);
		$geolocation=strip_tags($_POST['geolocation']);
		$earning=strip_tags($_POST['earning']);
		$challenges=strip_tags($_POST['challenges']);

		if(empty($challenges)){
        	$error = "please enter the challenges faced";
        }
		if(empty($earning)){
        	$error = "please enter the amount earned";
        }
		if(empty($geolocation)){
        	$error = "please enter the geolocation";
        }
        if(empty($yield)){
        	$error = "please enter the yield  value";
        }
        if(empty($farm_method)){
        	$error = "please enter the farming method used";
        }
        if(empty($texture)){
        	$error = "please enter the soil texture";
        }
        if(empty($acres)){
        	$error = "please enter the acre value of the Land";
        }
        if(empty($hectare)){
        	$error = "please enter the hectare value of the Land";
        }
        if(empty($farm_type)){
        	$error = "please select the farm_type";
        }
        if(empty($category)){
        	$error = "please select the farming category";
        }
        if(empty($number)){
        	$error = "please enter your phone number";
        }
        if(empty($address)){
        	$error = "please enter your Address";
        }
        if(empty($ward)){
        	$error = "please select your Ward Name";
        }
        if(empty($LGA)){
        	$error = "please enter your Local Government Area(LGA)";
        }
        if(empty($odaname)){
        	$error = "please enter your othernames";
        }
        if(empty($sn)){
        	$error = "please enter your Surname";
        }
        if (empty($error)) 
        {
        	$validExtensions = array('.jpg', '.jpeg', '.gif', '.png');
		    // get extension of the uploaded file
		    $fileExtension = strrchr($_FILES['picture']['name'], ".");
		    // get the extension of the file to be uploaded
		    // check if file Extension is on the list of allowed ones
		    if (in_array($fileExtension, $validExtensions)) 
		    {
		        
				$newName = time() . '_' . $_FILES['picture']['name'];
			        $destination = 'uploads/' . $newName;
				if (move_uploaded_file($_FILES['picture']['tmp_name'], $destination))
				{
			
		        	$insertquery = mysql_query("INSERT INTO farmers VALUES(NULL, '$sn', '$odaname', '$newName', '$address', '$number', '$hectare', '$texture', '$acres', '$yield','$geolocation', '$earning', '$challenges', '$farm_method', '$LGA', '$ward', '$category', '$farm_type', '123456789012')") or die(mysql_error());
		        
			        if ($insertquery) {   ?>
			          <script>
			            alert("Your Record is successfully added");
			          </script>
			          <?php
					}else{	?>
						<script>
			            	alert("Record addition failed");
			          	</script>
			          <?php
					}
			    }
		    }
		}
}
?>
<?php include 'includes/header.php'; ?> 
			<div class="col-md-6">
				<nav class="collapse navbar-collapse" id="myNavbar" role="navigation">
					<ul class="nav navbar-nav navbar-right menu">
							<li><a href="index.php" class="page-scroll active">Home</a></li>
							<li><a href="view.php" class="page-scroll">View Farmer</a></li>
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
				<h2 class="text-center features-text" style="color">Registration Form</h2>
			</div>
			<form action="register.php" method="POST" enctype="multipart/form-data">
			<div class="col-md-12" id="formfont">
				<div class="col-md-1"></div>

				<div class="col-md-10">
					<div class="col-md-12">
						<div style="text-align:center;"><i>All fields marked with the&nbsp;<em style="color:red;" >*</em>&nbsp; symbol are compulsory fields</i></div><br/>
						<h3  style="text-align:center; font-size:30px;">Personal Information</h3>
						<div class="col-md-12" style="color:red; text-align: centre; font-size: 20px;"><?php echo $error; ?></div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<label>Picture:</label>
								<input type="file" name="picture" value="">
						</div>
						<div class="col-md-8"></div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Surname:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="text" name="surname" value="<?php echo !empty($_POST['surname']) ? $_POST['surname'] : ""; ?>" Placeholder="Enter Surname" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Other Names:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="text" name="othername" value="<?php echo !empty($_POST['othername']) ? $_POST['othername'] : ""; ?>" Placeholder="Enter Other Names" class="form-control"><br/>
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-6">
							<label>L.G.A:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<select name="LGA" id="LGA" class="form-control">
									<option>Select LGA</option>
								</select>
						</div>
						<div class="col-md-6">
							<label>Ward:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<select name="ward" id="ward" disabled="disabled" class="form-control"></select>
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Address:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<textarea cols="20" rows="4" name="address" value="<?php echo !empty($_POST['address']) ? $_POST['address'] : ""; ?>" Placeholder="Enter Address"  class="form-control"></textarea>
						</div>
						<div class="col-md-6">
							<label>Phone Number:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="" name="number" value="<?php echo !empty($_POST['number']) ? $_POST['number'] : ""; ?>" Placeholder="Phone Number" class="form-control">
						</div>
					</div>
					<br/><br/>
					<div class="col-md-12">
						<h3  style="text-align:center; font-size:30px;">Farm information</h3><br/>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<label>Farming category:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<select name="category" id="category"  class="form-control">
									<option>Select Farm Category</option>
								</select>
						</div>
						<div class="col-md-6">
							<label>Farming Type:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<select name="farm_type" id="farm_type" disabled="disabled" class="form-control">
									<option>Select Farming Type</option>
								</select>
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Number of Hectares:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="text" name="hectare" value="<?php echo !empty($_POST['hectare']) ? $_POST['hectare'] : ""; ?>" Placeholder="No. of Hectares" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Number of Acres:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="text" name="acres" value="<?php echo !empty($_POST['acres']) ? $_POST['acres'] : ""; ?>" Placeholder="No. of Acres" class="form-control">
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Texture of Land:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="text" name="texture" value="<?php echo !empty($_POST['texture']) ? $_POST['texture'] : ""; ?>" Placeholder="e.g Sandy or loamy" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Farming Method:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="text" name="farm_method" value="<?php echo !empty($_POST['farm_method']) ? $_POST['farm_method'] : ""; ?>" Placeholder="Farming method"  class="form-control">
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Total Yield of product:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="text" name="yield" value="<?php echo !empty($_POST['yield']) ? $_POST['yield'] : ""; ?>" Placeholder="e.g 50 bags of maize" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Geolocation:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="text" name="geolocation" value="<?php echo !empty($_POST['geolocation']) ? $_POST['geolocation'] : ""; ?>" Placeholder="" class="form-control">
						</div>
					</div>
					<br/><br/>
					<div class="row">
						<div class="col-md-6">
							<label>Earnings:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="text" name="earning" value="<?php echo !empty($_POST['earning']) ? $_POST['earning'] : ""; ?>" Placeholder="Earnings" class="form-control">
						</div>
						<div class="col-md-6">
							<label>Challenges:&nbsp;<em style="color:red;" >*</em>&nbsp;</label>
								<input type="text" name="challenges" value="<?php echo !empty($_POST['challenges']) ? $_POST['challenges'] : ""; ?>" Placeholder="e.g Inadequate Manpower, Insufficent Fertilizer" class="form-control">
						</div>
					</div>
					<br/>
					<div class="row">
						<div class="col-md-3">
							<input type="submit" name="submit" value="Submit" Placeholder="" class="btn btn-warning">
						</div>
						<div class="col-md-9"></div>
					</div>
					
				</div>

				<div class="col-md-1"></div>
					
			</div>
			</form>		
		</div>
	</div>
</div>


<?php include 'includes/footer.php'; ?>
