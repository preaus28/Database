<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/custom.css">
	<title> Application form </title>
</head>

<body>
	<div id="container" class="container">            
		
		<div class="form" style="width:800px; margin:0 auto;">
			<fieldset>
				<legend><strong>Form Fields</strong></legend>
				<form method="POST" action="store.php" id="form">

				<div class="row">
     				<div class="col-25">
        				<label for="name">Name</label>
      				</div>
      				<div class="col-75">
        				<input type="text" id="name" name="name">
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
        				<label for="designation">Designation</>
      				</div>
      				<div class="col-75">
					    <select name="designation" id="designation">
							<option value="">-- Select Option --</option>
							<option value="Professor">Professor</option>
							<option value="Assosiate Professor">Assosiate Professor</option>
							<option value="Assistant Professor">Assistant Professor</option>
							<option value="Lecturer">Lecturer</option>
						</select>
					</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="working_unit">Working Unit</label>
      				</div>
      				<div class="col-75">
					  <select name="working_unit" id="working_unit">
							<option value="">-- Select Option --</option>
							<option value="Office">Office</option>
							<option value="Hall">Hall</option>
							<option value="Department">Department</option>
							<option value="Institute">Institute</option>
						</select>
					</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 <label for="permanent">Permanent</label>
      				</div>
      				<div class="col-75">
        				<input type="radio" name="permanent" value="Yes">Yes</>
						<input type="radio" name="permanent" value="No">No</input>
					</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="national_id">National Id</label>
      				</div>
      				<div class="col-75">
					  <input type="number" name="national_id" id="national_id"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 <label for="number">Contact Number</label>
      				</div>
      				<div class="col-75">
					  <input type="number" name="number" id="number"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="mail">Email</label>	
      				</div>
      				<div class="col-75">
					  	<input type="mail" name="mail" id="mail"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="spouse_name">Spouse Name</label>	
      				</div>
      				<div class="col-75">
					  <input type="text" name="spouse_name" id="spouse_name"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
						<label for="child_1_name">Child Name 1</label>
      				</div>
      				<div class="col-75">
					  <input type="text" name="child_1_name" id="child_1_name"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 <label for="chile_2_name">Child Name 2</label>
      				</div>
      				<div class="col-75">
					  <input type="text" name="chile_2_name" id="chile_2_name"/>	
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="noc_version">NOC Version Number</label>	
      				</div>
      				<div class="col-75">
					  	<input type="text" name="noc_version" id="noc_version"/>	
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="relation">Spouse Relation</label>	
      				</div>
      				<div class="col-75">
					  	<input type="radio" name="relation" value="Husband">Husband</input>
						<input type="radio" name="relation" value="Wife">Wife</input>	
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label>Chile 1 Gender</label>	
      				</div>
      				<div class="col-75">
					  	<input type="radio" name="child_1" value="Male">Male</input>
						<input type="radio" name="child_1" value="Female">Female</input>
						<input type="radio" name="child_1" value="Other">Other</input>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label>Chile 2 Gender</label>	
      				</div>
      				<div class="col-75">
					  	<input type="radio" name="child_2" value="Male">Male</input>
						<input type="radio" name="child_2" value="Female">Female</input>
						<input type="radio" name="child_2" value="Other">Other</input>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					   	<label for="child_1_age">Child 1 Age</label>	
      				</div>
      				<div class="col-75">
					 	 <input type="number" name="child_1_age" id="child_1_age"/>	
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="child_2_age">Child 2 Age</label>
      				</div>
      				<div class="col-75">
					 	<input type="number" name="child_2_age" id="child_2_age"/>
      				</div>
    			</div>

				<div class="row">
     				<div class="col-25">
					 	<label for="image">Image</label>
      				</div>
      				<div class="col-75">
					 	<input type="file" name="image" id="image"/>
      				</div>
    			</div>

     			<div>
					<input type="submit" class="submit" name="submit" id="submit" value="Submit"/>    <input type="reset" class="reset" name="reset" value="Reset"/> </pre>	
      			</div>

				<form>

			</fieldset>

		</div>
		<a href="index.php" id="back-to-home">Back to home</a>
	</div>
</body>
</html>