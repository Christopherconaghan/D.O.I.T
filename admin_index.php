 <!--Author@ Nimmy Augustin and Renuka Allbanur-->
 <!--Date@ 15/09/18-->
 <!--A DevOps group project-->
 <!--file used by studentdisplay.php -->
 
<?php include ('admin_header.php'); ?>

	<div class="container">
		<div>
			<h1 class="section-title text-center" style="margin: 3%">Welcome Admin</h1>
		</div>
		<div class="row" style="padding-bottom: 25px">
			<div class="col-sm-4 col-md-4">
				<h4 style="color:blue;margin: 5%">All Students List:</h4>
				<div class="card">
				<div class="card-body">
                
        		<?php include_once("display.php"); 
				echo '<a href="profiles.php">All Profiles</a>';?>
        		</div>
				</div>
			</div>
			<div class="col-sm-4 col-md-4">
				<h4 style="color:blue;margin: 5%">Course Quick Link</h4>
				<div class="card">
					<div class="card-body">
					<h5 class="card-title">Courses Quicklist</h5>
					<table class="table table-hover table-bordered">
						<thead class="thead-light">
							<tr>
							<th scope="col">Course</th>
							<th scope="col">View</th>
							<th scope="col">Edit</th>
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<th scope="row">Cloud Technology</th>
								<td><button type="button" onclick="location.href='../course.php';" class="btn btn-success">View</button></td>
								<td><button type="button" onclick="location.href='courseedit.php';" class="btn btn-danger">Edit</button></td>
							</tr>
							<tr>
								<th scope="row">Applied Computing</th>
								<td><button type="button" onclick="location.href='../course.php';" class="btn btn-success">View</button></td>
								<td><button type="button" onclick="location.href='courseedit.php';" class="btn btn-danger">Edit</button></td>
							</tr>
							<tr>
								<th scope="row">DevOps</th>
								<td><button type="button" onclick="location.href='../course.php';" class="btn btn-success">View</button></td>
								<td><button type="button" onclick="location.href='courseedit.php';" class="btn btn-danger">Edit</button></td>
							</tr>
							
							
						</tbody>
					</table>
					
				</div>
			</div>
			</div>
				<div class="col-sm-4 col-md-4">
					<h4 style="color:blue;margin: 5%">Percentage of Registration of Courses</h4>
					<div class="card">
					<div class="card-body">
	                <div id="piechart" style="width: 100%; height: 250px;"></div>
	                </div>
					</div>
				</div>
		</div>
	</div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Course', 'Percentage'],
          ['Cloud Technology',     30],
          ['Applied Computing',      30],
          ['DevOps',  40],
        ]);

        var options = {
          title: 'Registration By Percentage'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	

<?php include ('admin_footer.php'); ?>