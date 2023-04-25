
<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
include("header.php");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $rno = $_POST['rno'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    // $image = $_FILES['image']['name'];

	$sql = "INSERT INTO student (name,rno,email,mobile,message)
    VALUES ('$name','$rno','$email','$mobile','$message')";

    $run = mysqli_query($con,$sql);

	if($run)
	{
		// move_uploaded_file($_FILES['image']['tmp_name'],'../img/'.$_FILES['image']['name']);
		echo ("<script LANGUAGE='JavaScript'>
         window.location.href='student.php';
         </script>");
	}
else 
	{
		echo "Error: record not Added " ;
	}
}
?>
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Add Student</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li><a href="student"><span>Back</span></a></li>
							<li class="active"><span>Add New Student</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Add New Student</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="post" enctype="multipart/form-data">
												<div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Name <span class="help"></span></label>
													<input type="text" class="form-control" name="name" placeholder="Please Enter Name">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Roll No. <span class="help"></span></label>
													<input type="text" class="form-control" name="rno" placeholder="Please Enter Roll No.">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Email <span class="help"></span></label>
													<input type="email" class="form-control" name="email" placeholder="Please Enter Email">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Mobile <span class="help"></span></label>
													<input type="text" class="form-control" name="mobile" placeholder="Please Enter Mobile">
												</div>
                                                <div class="form-group">
													<label class="control-label mb-10 text-left">Please Enter Message <span class="help"></span></label>
													<input type="text" class="form-control" name="message" placeholder="Please Enter Message">
												</div>
                                                
												<!-- <div class="form-group mb-30">
													<label class="control-label mb-10 text-left">Upload Image</label>
													<div class="fileinput fileinput-new input-group" data-provides="fileinput">
														<div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
														<span class="input-group-addon fileupload btn btn-info btn-anim btn-file"><i class="fa fa-upload"></i> <span class="fileinput-new btn-text">Select Image</span> <span class="fileinput-exists btn-text">Change</span>
														<input type="file" name="image">
														</span> <a href="#" class="input-group-addon btn btn-danger btn-anim fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i><span class="btn-text"> Remove</span></a> 
													</div>
												</div> -->
												<button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<!-- Footer -->
				<footer class="footer container-fluid pl-30 pr-30">
					<div class="row">
						<div class="col-sm-12">
						<p>2023 &copy; Designed and developed by DEVANSH GUPTA. </p>
						</div>
					</div>
				</footer>
				<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>