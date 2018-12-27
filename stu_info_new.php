<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"> -->
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="Font-Awesome-master/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.min.css">
	<!-- <script type="text/javascript" src= "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">

	<!- bangla font -->
	<link rel="stylesheet" type="text/css" href="css/font.css">
  	<!-- </script> -->

  	<script type="text/javascript" src="js/jquery.js"></script>


  	<script type="text/javascript" src="bootstrap1/js/bootstrap.min.js"></script>

  	<script src="js/wow.min.js"></script>
    <script>
        //new WOW().init();
    </script>
    <script type="text/javascript">
    	function showTable(one,second,three,h1)
	    {
	      document.getElementById(one).style.display = 'block';
	      document.getElementById(second).style.display = 'none';
	      document.getElementById(three).style.display = 'none';
	      document.getElementById(h1).style.display = 'none';
	    }
	    function showTable1(one)
	    {
	      document.getElementById(one).style.display = 'block';


	    }
	    function showform(select,f6,f1,f2)

	    {

	    var select = select.options[select.selectedIndex].textContent;
	  		if (select='Panjabi') {
	  			//alert("ok")
	  			document.getElementById(f6).style.display = 'block';
	  			document.getElementById(f1).style.display = 'none';
	  		}
	  		else if (select='Shirt') {
	  			//alert("ok")
	  			document.getElementById(f2).style.display = 'block';
	  			document.getElementById(f6).style.display = 'none';
	  		}




	    }
    </script>

	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
</head>
<body>
	<div id="navbar" class="navbar navbar-default navbar-fixed-top navbar-inverse"
	role="navigation">
		<div class="container">
			<div class="navbar-header">
				<!-- <button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target=".navbar-collapse">
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
				</button> -->
				<a href="dashboard.php" class="navbar-brand">Admin Panel</a>
				<p class="navp">XYZ HIGH SCHOOL</p>

			</div>
			<div class="navbar-collapse navbar-collapse collapse navc">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<p>Hello Admin</p>
					</li>

					<li>
						<a href="#services">Log Out</a>
					</li>

				</ul>
			</div>

		</div>

	</div>

	<!-- Mid -->

<nav class="navbar navbar-inverse visible-xs navbar-fixed-top" id="navbar2">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>

	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#section1">Dashboard</a></li>
			<li><a href="#section2">Student Information</a></li>
			<li><a href="#section3">Student Attendance</a></li>
			<li><a href="#section3">Bulk Sms</a></li>
			<li><a href="#section3">Result Processing</a></li>
			<li><a href="#section3">Teacher Login	</a></li>
	      </ul>
	    </div>
	  </div>
</nav>


		<div class="container-fluid" style="background-color: #fff;">
			<div class="row content" >
				<div class="col-sm-3 sidenav hidden-xs navbar-fixed-top">

					<ul class="nav nav-pills nav-stacked">

				        <li class="dropdown">


							    <button class="btn btn-primary dropdown-toggle"
							    type="button" data-toggle="dropdown">Student Information
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="stu_info_new.php" onClick="showTable1('f1')" >New Student</a></li>
							      <li><a href="show_info.php">Show information</a></li>
							    </ul>

				        </li>
				        <li class="dropdown">

							    <button class="btn btn-primary dropdown-toggle"
							    type="button" data-toggle="dropdown">Student Attendance
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="#">All</a></li>
							      <li><a href="#">Class One</a></li>
							      <li><a href="#">Class Two</a></li>
							      <li><a href="#">Class Three</a></li>
							      <li><a href="#">Class Four</a></li>
							      <li><a href="#">Class Five</a></li>
							      <li><a href="#">Class Six</a></li>
							      <li><a href="#">Class Seven</a></li>
							      <li><a href="#">Class Eight</a></li>
							      <li><a href="#">Class Nine</a></li>
							      <li><a href="#">Class Ten</a></li>
							    </ul>

				        </li>

				        <li class="dropdown">

							    <button class="btn btn-primary dropdown-toggle"
							    type="button" data-toggle="dropdown">Result Processing
							    <span class="caret"></span></button>
							    <ul class="dropdown-menu">
							      <li><a href="insert_result.php">Insert Result</a></li>
							      <li><a href="search_result.php">Show Result</a></li>
							      <li><a href="#">Marksheet</a></li>
							      <li><a href="#">Tabulation Sheet</a></li>
							    </ul>

				        </li>
				        <li class="">

							    <button class="btn btn-primary dropdown-toggle"
							    type="button" data-toggle="dropdown">Teacher Login
							 <!--    <span class="caret"></span> --></button>
							    <!-- <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->

				        </li>
				        <li class="">

							    <button class="btn btn-primary dropdown-toggle"
							    type="button" data-toggle="dropdown">Classified Bulk Sms</button>
							    <!-- <span class="caret"></span>
							    <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->

				        </li>
				        <li class="">

							    <button class="btn btn-primary dropdown-toggle"
							    type="button" data-toggle="dropdown">Academic Calender
							 <!--    <span class="caret"></span> --></button>
							    <!-- <ul class="dropdown-menu">
							      <li><a href="#">HTML</a></li>
							      <li><a href="#">CSS</a></li>
							      <li><a href="#">JavaScript</a></li>
							    </ul> -->

				        </li>

      				</ul><br>
				</div>
				</div>
				<br>

				<div class="row" id="row_form">

					<!-- <h1 class="title">Personal Information</h1> -->
					<div class="col-sm-12 col-md-12" id="row_1st_col" style="">
							<form class="form-horizontal fixed" id="form-horizontal"  action="/action_page.php">
								<button type="submit" id="button1" name="submit" class="btn-lg btn-primary buttons" data-toggle="" data-target=""
									onClick="showTable('f1','f2','f3','h1')">Dress Information
								</button>
								<button type="submit"  id="button2" name="submit" class="btn-lg btn-primary buttons" data-toggle="" data-target=""
									onClick="showTable('f2','f1','f3','h1')">Education
								</button>
								<button type="submit"  id="button3" name="submit" class="btn-lg btn-primary buttons" onClick="showTable('f3','f2','f1','h1')">
								Address
								</button>
								<br>

								<h1 id="h1">Please Insert The information of personal, education and Address Correctly</h1>

								<div class=" " id="f1" style="display: none;" >

									<div class="pinformation">
							    	<h1></h1>
							        </div>

							    	<div class="" id="dtype">
										<label for="class" class="control-label">Select Dress Type: </label>
										<select class="" id="dressformtype" onchange="showform(this,'f6','f1','f2')">
											<option >
												Panjabi
											</option>
											<option>
												Shirt
											</option>
											<option>
												পায়জামা
											</option>
											<option>
												প্যান্ট
											</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Height" class="control-label, col-sm-3 col-md-3">লম্বা</label>
											<input type="text" class="form-control, col-sm-3 col-md-3" id="Height" placeholder="Height Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Body" class="control-label, col-sm-3 col-md-3">বডি</label>
											<input type="text" class="form-control, col-sm-3 col-md-3" id="Body" placeholder="Body Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Waist" class="control-label, col-sm-3 col-md-3">মাজা</label>
											<input type="text" class="form-control, col-sm-3 col-md-3" id="Waist" placeholder="Waist Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Hip" class="control-label, col-sm-3 col-md-3">হিপ</label>
											<input type="text" class="form-control, col-sm-3 col-md-3" id="Hip" placeholder="Hip Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Gate" class="control-label, col-sm-3 col-md-3">গেট</label>
											<input type="text" class="form-control, col-sm-3 col-md-3" id="Gate" placeholder="Gate Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Sleeve" class="control-label, col-sm-3 col-md-3">হাত/কোট</label>
											<input type="text" class="form-control, col-sm-3 col-md-3" id="Sleeve" placeholder="Sleeve Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Wristband" class="control-label, col-sm-3 col-md-3">হাতার মহুরি</label>
											<input type="text" class="form-control, col-sm-3 col-md-3" id="Wristband" placeholder="Wristband Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Colar" class="control-label, col-sm-3 col-md-3">কলার</label>
											<input type="text" class="form-control, col-sm-3 col-md-3" id="Colar" placeholder="Colar Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="btn_reg" id="btn_reg">
											<button type="submit" class="btn btn-lg" id="btn_reg">submit</button>
										</div>
									</div>
								</div>
								<!-- new div -->
								<div class=" " id="f6" style="display: none;" >

									<div class="pinformation">
							    	<h1></h1>
							        </div>

							    	<div class="" id="dtype">
										<label for="class" class="control-label">Select Dress Type: </label>
										<select class="" id="dressformtype">
											<option>
												পাঞ্জাবী
											</option>
											<option>
												শার্ট
											</option>
											<option>
												পায়জামা
											</option>
											<option>
												প্যান্ট
											</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
									<div class="form-group, col-sm-6 col-md-6">
										<label for="Height" class="control-label">লম্বা</label>
										<input type="text" class="form-control" id="Height" placeholder="Height Size" data-error="" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group, col-sm-6 col-md-6">
										<label for="Body" class="control-label">বডি</label>
										<input type="text" class="form-control" id="Body" placeholder="Body Size" data-error="" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group, col-sm-6 col-md-6">
										<label for="Wristband" class="control-label">পোট</label>
										<input type="text" class="form-control" id="Wristband" placeholder="Wristband Size" data-error="" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group, col-sm-6 col-md-6">
										<label for="Waist" class="control-label">হাতা</label>
										<input type="text" class="form-control" id="Waist" placeholder="Waist Size" data-error="" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group, col-sm-6 col-md-6">
										<label for="Wristband" class="control-label">কপ</label>
										<input type="text" class="form-control" id="Wristband" placeholder="Wristband Size" data-error="" required>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group, col-sm-6 col-md-6">
										<label for="Colar" class="control-label">কলার</label>
										<input type="text" class="form-control" id="Colar" placeholder="Colar Size" data-error="" required>
										<div class="help-block with-errors"></div>
									</div>
										<button type="submit" class="btn btn-lg" id="btn_reg">submit</button>
									</div>
								</div>
								<!-- Shirt er req.  -->
								<div class=" " id="f7" style="display: none;" >

									<div class="pinformation">
							    	<h1></h1>
							        </div>

							    	<div class="" id="dtype">
										<label for="class" class="control-label">Select Dress Type: </label>
										<select class="" id="dressformtype">
											<option>
												পাঞ্জাবী
											</option>
											<option>
												শার্ট
											</option>
											<option>
												পায়জামা
											</option>
											<option>
												প্যান্ট
											</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Height" class="control-label">লম্বা</label>
											<input type="text" class="form-control" id="Height" placeholder="Height Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Body" class="control-label">বডি</label>
											<input type="text" class="form-control" id="Body" placeholder="Body Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Waist" class="control-label">মাজা</label>
											<input type="text" class="form-control" id="Waist" placeholder="Waist Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Hip" class="control-label">হিপ</label>
											<input type="text" class="form-control" id="Hip" placeholder="Hip Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Gate" class="control-label">গেট</label>
											<input type="text" class="form-control" id="Gate" placeholder="Gate Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Sleeve" class="control-label">হাত/কোট</label>
											<input type="text" class="form-control" id="Sleeve" placeholder="Sleeve Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Wristband" class="control-label">হাতার মহুরি</label>
											<input type="text" class="form-control" id="Wristband" placeholder="Wristband Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group, col-sm-6 col-md-6">
											<label for="Colar" class="control-label">কলার</label>
											<input type="text" class="form-control" id="Colar" placeholder="Colar Size" data-error="" required>
											<div class="help-block with-errors"></div>
										</div>
										<button type="submit" class="btn btn-lg" id="btn_reg">submit</button>
									</div>
								</div>
								<!-- education -->
								<div class="col-sm-12 col-md-12 " id="f2" style="display: none;">
									<div class="pinformation">
						    	            <h1>Educational Information</h1>
						            </div>
										<div class="col-sm-6 col-md-6" >
											<div class="form-group">
												<label for="lname" class="control-label">Class</label>
												<select class="form-control" id="class">
													<option>
														2
													</option>
													<option>
														3
													</option>
													<option>
														4
													</option>
													<option>
														5
													</option>
													<option>
														6
													</option>
													<option>
														7
													</option>
													<option>
														8
													</option>
													<option>
														9
													</option>
												</select>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-sm-6 col-md-6" >
											<div class="form-group">
												<label for="lname" class="control-label">Section</label>
												<select class="form-control" id="class">
													<option>
														a
													</option>
													<option>
														b
													</option>
												</select>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-sm-6 col-md-6" >
											<div class="form-group">
												<label for="lname" class="control-label">Group</label>
												<select class="form-control" id="class">
													<option>
														Science
													</option>
													<option>
														Commerce
													</option>
													<option>
														Arts
													</option>
												</select>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="col-sm-6 col-md-6" >
											<div class="form-group">
												<label for="lname" class="control-label">Shift</label>
												<select class="form-control" id="class">
													<option>
														Morning
													</option>
													<option>
														Day
													</option>
												</select>
												<div class="help-block with-errors"></div>
											</div>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-lg" id="btn_reg">submit</button>
										</div>
								</div>
								<div class="col-sm-12 col-md-12" style="display: none;" id="f3">
									<div class="pinformation">
						    	            <h1>Address</h1>
						            </div>
									<div class="col-sm-6 col-md-6"  id="padd">
										<h2 style="text-align: center;">Present Address</h2>
										<div class="form-group">
											<label for="lname" class="control-label">House Number:</label>
											<input type="text" class="form-control" id="lname" placeholder="House number" data-error="Enter Your Last Name" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">Area Name:</label>
											<input type="text" class="form-control" id="lname" placeholder="Area Name" data-error="Enter Your Last Name" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">Post Office:</label>
											<input type="text" class="form-control" id="lname" placeholder="Post Office" data-error="Enter Your Last Name" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">District:</label>
											<input type="text" class="form-control" id="lname" placeholder="District" data-error="Enter Your Last Name" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">Police Station:</label>
											<input type="text" class="form-control" id="lname" placeholder="Police Station" data-error="Enter Your Last Name" required>
											<div class="help-block with-errors"></div>
										</div>


										<div class="form-group">
											<label for="lname" class="control-label">Postal Code:</label>
											<input type="text" class="form-control" id="lname" placeholder="Postal Code" data-error="Enter Your Last Name" required>
											<div class="help-block with-errors"></div>
										</div>



									</div>

									<div class="col-sm-6 col-md-6" >
										<h2 style="text-align: center;" >Permanent Address</h2>
										<div class="form-group">
											<label for="lname" class="control-label">Village:</label>
											<input type="text" class="form-control" id="lname" placeholder="Village" data-error="Enter Your Last Name" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">Post Office:</label>
											<input type="text" class="form-control" id="lname" placeholder="Post Office" data-error="Enter Your Last Name" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">Police Station:</label>
											<input type="text" class="form-control" id="lname" placeholder="Police Station" data-error="Enter Your Last Name" required>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group">
											<label for="lname" class="control-label">District:</label>
											<input type="text" class="form-control" id="lname" placeholder="District" data-error="Enter Your Last Name" required>
											<div class="help-block with-errors"></div>
										</div>

									</div>
									<div class="form-group">
									<button type="submit" class="btn btn-lg" id="btn_reg">submit</button>
									</div>
								</div>


							</form>
					</div>
				</div>


				</div>
			</div>
		</div>

</body>
</html>
