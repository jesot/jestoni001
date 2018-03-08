<?php
include('ifnotlogin.php');
?>

 <?php
 $connect = mysqli_connect("localhost", "root", "", "asset");  
 $query = "SELECT air_kondition, count(*) as number FROM tb_aircon GROUP BY air_kondition";  
 $result = mysqli_query($connect, $query);  



 ?>  
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('dbcon.php'); 
	include('dashboard_asset_overview.php');?>
	<?php include('header.php'); ?>

           <title>Dashboard Chart</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Condition', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["air_kondition"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
           
                var options = {  
                      title: 'AIRCONDITIONER',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
        
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);

            

           }  
           </script>  
  <?php include('chartprinter.php'); 
        include('chartsystemunit.php');
        include('charttelevision.php');

  ?>
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php include('navbar.php');?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
	    <?php include('main_sidebar.php');?>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
					 <div class="panel-heading">
						<h3 class="panel-title">Assets Overview</h3>
						<p class="panel-subtitle">Period: January 2017 - December 2018</p>
					 </div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-gear"></i></span>
										<p>
											<span class="number"><?php echo $tot; ?></span>
											<span class="title"><a href="//WORKING ASSETS">Working</a>
										    </span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-database"></i></span>
										<p>
											<span class="number"><?php echo $notworking; ?></span>
											<span class="title">Not Working</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-trash"></i></span>
										<p>
											<span class="number"><?php echo $Deprecated; ?></span>
											<span class="title">Deprecated</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-user"></i></span>
										<p>
											<span class="number"><?php echo $total; ?></span>
											<span class="title">Overall Assets</span>
										</p>
									</div>
								</div>
							</div>
		    <div class="row">

			   <div class="col-md-6">
                  <div id="piechart" style="width: 450px; height: 300px;" ></div>  
               </div>
               <div class="col-md-6">	
                 <div id="piechart2" style="width: 450px; height: 300px;" ></div>  
			  </div>

		    </div>
		       <div class="row">

			   <div class="col-md-6">
                  <div id="piechart3" style="width: 450px; height: 300px;" ></div>  
               </div>
                <div class="col-md-6">
                  <div id="piechart4" style="width: 450px; height: 300px;" ></div>  
               </div>
           

		    </div>
					<!-- END OVERVIEW -->



					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.punptayug.edu.ph" target="_blank">PUNP</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<!--<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>-->




</body>

</html>
