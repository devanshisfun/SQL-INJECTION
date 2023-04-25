<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
$cat=mysqli_query($con,"select * from `student` ORDER BY sno DESC");
include("header.php");
?>		
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Manage Student</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li class="active"><span>Manage Student</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
										<div class="row">
												<div class="col-sm-4">
														</div>
														<div class="col-sm-4">
															</div>
										<div class="col-sm-4">
										<a href="student_add"><button class="btn btn-default btn-block" style="margin-bottom:20px;"><i class="fa fa-plus" aria-hidden="true"></i> Create New Record</button></a>
										</div>
										</div>
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>S.No</th>
														<th>Name</th>
														<th>Roll No.</th>
														<th>Email</th>
														<th>Mobile</th>
														<th>Message</th>
														<th>Action</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>S.No</th>
														<th>Name</th>
														<th>Roll No.</th>
														<th>Email</th>
														<th>Mobile</th>
														<th>Message</th>
														<th>Action</th>
													</tr>
												</tfoot>
												<tbody>
													<?php
														$i=1;
							                            while($row=mysqli_fetch_array($cat))
														{
													?>
													<tr>
														<td><?php echo $i; ?></td>
														<td><?php echo $row['name'];?></td>
                                                        <td><?php echo $row['rno'];?></td>
                                                        <td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['mobile'];?></td>
                                                        <td><?php echo $row['message'];?></td>

														<!-- <td>
                                                            <img src='<?php echo "../img/".$row['image']?>'height="80px" width="80px" align="">
                                                        </td> -->
														<td>
														   <a class='edit btn btn-sm btn-primary' href='./student_delete.php?id=<?php echo $row['sno']; ?>' onclick='return checkdelete()'>Delete</a>
														</td>
													</tr>
												<?php
													$i++;
												}
												?>	
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
					
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
		
		<!-- Data table JavaScript -->
			<script src="vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
			<script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
			<script src="vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js"></script>
			<script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
			<script src="vendors/bower_components/pdfmake/build/pdfmake.min.js"></script>
			<script src="vendors/bower_components/pdfmake/build/vfs_fonts.js"></script>
			
			<script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
			<script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
			<script src="dist/js/export-table-data.js"></script>
		
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<script>
			function checkdelete()
			{
				return confirm('Are You Sure You Want To Delete This Record.');
			}
		</script>

		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>