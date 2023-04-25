<?php
session_start();
include('config.php');
if(!isset($_SESSION['username']))
{
header('location:login');
}
include("header.php");
$cat=mysqli_query($con,"select * from `contact` ORDER BY sno DESC");

?>		
		
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Manage Contact</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index">Dashboard</a></li>
							<li class="active"><span>Manage Contact</span></li>
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
										
										</div>
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>S.No</th>
														<th>Name</th>
														<th>Email</th>
														<th>Contact Number</th>
														<th>Subject</th>
														<th>Message</th>
														<th>Date</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>S.No</th>
														<th>Name</th>
														<th>Email</th>
														<th>Contact Number</th>
														<th>Subject</th>
														<th>Message</th>
														<th>Date</th>
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
													    <td><?php echo $row['email'];?></td>
                                                        <td><?php echo $row['mobile'];?></td>
														<td><?php echo $row['subject'];?></td>
														<td><?php echo $row['message'];?></td>
														<td><?php echo $row['date'];?></td>
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
		<!-- <script src="dist/js/jquery.slimscroll.js"></script> -->
	
		<!-- Fancy Dropdown JS -->
		<!-- <script src="dist/js/dropdown-bootstrap-extended.js"></script> -->
		
		<!-- Owl JavaScript -->
		<!-- <script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> -->
	
		<!-- Switchery JavaScript -->
		<!-- <script src="vendors/bower_components/switchery/dist/switchery.min.js"></script> -->
		
			<!-- Filter -->

		<!-- <link href="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css"> -->

		<!-- <script src="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/js/jquery.js"></script> -->
		<!-- <script src="https://www.jqueryscript.net/demo/DataTables-Jquery-Table-Plugin/media/js/jquery.dataTables.js"></script> -->

		<script>

		$(document).ready(function() {
			var table = $('#example').DataTable();
		
			$("#example tfoot th").each( function ( i ) {
				var select = $('<select><option value=""></option></select>')
					.appendTo( $(this).empty() )
					.on( 'change', function () {
						table.column( i )
							.search( $(this).val() )
							.draw();
					} );
		
				table.column( i ).data().unique().sort().each( function ( d, j ) {
					select.append( '<option value="'+d+'">'+d+'</option>' )
				} );
			} );
		} );

		</script>
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