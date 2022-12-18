<?php
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phplogin';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECRI_CARE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <div class="wrapper">
     <!--Top Menu & Menu button-->
        <div class="sidebar">
            <div class="profile">
                <img src="images/Picture1.png" alt="profile picture">
                <h3>JOHNSON</h3>
                <P>Doctor</P>
            </div>
                <ul >
                    <li>
                        <a href="#" class="active">
                            <span class="icon"><i class="fas fa-home"></i></span>
                            <span class="item">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-desktop"></i></span>
                            <span class="item">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#container">
                            <span class="icon"><i class="fas fa-user-friends"></i></span>
                            <span class="item">All Patients</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                            <span class="item">Perfomance</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-database"></i></span>
                            <span class="item">Development</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-chart-line"></i></span>
                            <span class="item">Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-user-shield"></i></span>
                            <span class="item">Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon"><i class="fas fa-cog"></i></span>
                            <span class="item">Settings</span>
                        </a>
                    </li>
                </ul>
        </div>
        
        <div class="section">
            <nav class="navbar navbar-dark bg-mynav">
                <div class="container-fluid justify-content-between">
                    <a class="navbar-brand" href="#">ECRI<i class="fa-solid fa-heart-pulse"></i>CARE</a>
                    <a class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-right-from-bracket"></i>&ensp;Logout</a>
                </div>
            </nav>

            <div class="container border border-primary">
	            <div class="table-responsive">
	            	<div class="table-wrapper">
                        <div class="table-title">
		        		    <div class="d-grid gap-2 d-md-flex bg-primary justify-content-between">
                                <h2 class="text-white">All <b>Patients</b></h2>
                                <a href="#addpatient" class="btn btn-success " data-toggle="modal"><i class="fa-solid fa-user-plus"></i>&ensp; <span>Add New Patient</span></a>
                            </div>
                        </div>
	            		<table class="table table-striped table-hover">
		        		<thead>
		        			<tr>
		        				<th>
		        					<span class="custom-checkbox">
		        						<input type="checkbox" id="selectAll">
		        						<label for="selectAll"></label>
		        					</span>
		        				</th>
		        				<th>Name</th>
		        				<th>Email</th>
		        				<th>Address</th>
		        				<th>Phone</th>
		        				<th>Actions</th>
		        			</tr>
		        		</thead>
		        		<tbody>
		        			<tr>
		        				<td>
		        					<span class="custom-checkbox">
		        						<input type="checkbox" id="checkbox1" name="options[]" value="1">
		        						<label for="checkbox1"></label>
		        					</span>
		        				</td>
		        				<td>Johnson Clever</td>
		        				<td>johnson@ecricare.de</td>
		        				<td>Woching 3, Pfarrkirchen, Germany</td>
		        				<td>+4910000000000</td>
		        				<td>
		        					<a href="#editpatient" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
		        					<a href="#deletepatient" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					<span class="custom-checkbox">
		        						<input type="checkbox" id="checkbox2" name="options[]" value="1">
		        						<label for="checkbox2"></label>
		        					</span>
		        				</td>
		        				<td>Lupacescu Madalina</td>
		        				<td>madalina@ecricare.de</td>
		        				<td>Posmunster 1, Munich, Germany</td>
		        				<td>+4910000000001</td>
		        				<td>
		        					<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
		        					<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					<span class="custom-checkbox">
		        						<input type="checkbox" id="checkbox3" name="options[]" value="1">
		        						<label for="checkbox3"></label>
		        					</span>
		        				</td>
		        				<td>Okoro Olivia</td>
		        				<td>olivia@ecricare.de</td>
		        				<td>Allach 1, Limburg, Germany</td>
		        				<td>+49100000000002</td>
		        				<td>
		        					<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
		        					<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
		        				</td>
		        			</tr>
		        			<tr>
		        				<td>
		        					<span class="custom-checkbox">
		        						<input type="checkbox" id="checkbox4" name="options[]" value="1">
		        						<label for="checkbox4"></label>
		        					</span>
		        				</td>
		        				<td>Pozhidaeva Marina</td>
		        				<td>marina@ecricare.de</td>
		        				<td>Posmunster 25, Bavaria, Germany</td>
		        				<td>+49100000000003</td>
		        				<td>
		        					<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
		        					<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
		        				</td>
		        			</tr>					
		        		</tbody>
		        	</table>
	            	</div>
	            </div>        
            </div>
        </div>
        </div>


<!-- Edit Modal HTML -->
<div id="addpatient" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Add Patient</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>


<!-- Edit Patient-->
<div id="editpatient" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Edit Patient</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Delete Patient -->
<div id="deletepatient" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Patient</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   
</body>
</html>
