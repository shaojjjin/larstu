@include('test.partials.head')
	<body>  
	<!-- Left column -->
	<div class="templatemo-flex-row">
	@include('test.partials.navbar')
	<!-- Main content --> 
	<div class="templatemo-content col-1 light-gray-bg">
		<div class="templatemo-content-container">
			<div class="templatemo-flex-row flex-content-row">
				<div class="templatemo-content-widget white-bg col-2">
					<i class="fa fa-times"></i>
					<div class="square"></div>
					<h2 class="templatemo-inline-block">Visual Admin Template</h2><hr>
					<p>Works on all major browsers. IE 10+. Visual Admin is <a href="#" target="_parent">free responsive admin template</a> for everyone. Feel free to use this template for your backend user interfaces. Please tell your friends about <a href="http://www.templatemo.com" target="_parent">templatemo.com</a> website. You may <a href="#" target="_parent">contact us</a> if you have anything to say.</p>
					<p>Nunc placerat purus eu tincidunt consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus nulla quis risus auctor, non placerat augue consectetur. Fusce mi lacus, semper sit amet mattis eu.</p>              
				</div>
				<div class="templatemo-content-widget white-bg col-1 text-center">
					<i class="fa fa-times"></i>
					<h2 class="text-uppercase">Maris</h2>
					<h3 class="text-uppercase margin-bottom-10">Design Project</h3>
					<img src="images/bicycle.jpg" alt="Bicycle" class="img-circle img-thumbnail">
				</div>
				<div class="templatemo-content-widget white-bg col-1">
					<i class="fa fa-times"></i>
					<h2 class="text-uppercase">Dictum</h2>
					<h3 class="text-uppercase">Sedvel Erat Non</h3><hr>
					<div class="progress">
						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
					</div>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
					</div>                          
				</div>
			</div>
  		
  		  <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
          <div class="panel-heading templatemo-position-relative">
           
            <h2 class="text-uppercase">Post Table</h2>
          </div>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td style="width:25%;">Title</td>
                  <td style="width:15%;">Tags</td>
                  <td style="width:15%;">Subtitle</td>
                  <td style="width:15%;">Time</td>
                  <td style="width:12%;">Action</td>
                </tr>
                 </thead>
               <tbody>

                <td>Tag</td>
                <td>Title</td>
                <td>Subtitle</td>
                <td>Meta Descriptin</td>
                <td>
                    <a href="" class="templatemo-edit-btn">Edit</a>
                    <a href="" class="templatemo-edit-btn">Delete</a>
                </td>
                </tr>


              </tbody>
            </table>                             
    
		     </div>
		     </div>

			<footer class="text-right">
				<p>Copyright &copy; 2016</p>
			</footer>         
		</div>
	</div>
	</div>

	<!-- JS -->
	<script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
	<script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
	<script src="https://www.google.com/jsapi"></script> <!-- Google Chart -->
	<script>
	/* Google Chart 
	-------------------------------------------------------------------*/
	// Load the Visualization API and the piechart package.
	google.load('visualization', '1.0', {'packages':['corechart']});

	// Set a callback to run when the Google Visualization API is loaded.
	google.setOnLoadCallback(drawChart); 

	// Callback that creates and populates a data table,
	// instantiates the pie chart, passes in the data and
	// draws it.
	function drawChart() {

			// Create the data table.
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'Topping');
			data.addColumn('number', 'Slices');
			data.addRows([
				['Mushrooms', 3],
				['Onions', 1],
				['Olives', 1],
				['Zucchini', 1],
				['Pepperoni', 2]
			]);

			// Set chart options
			var options = {'title':'How Much Pizza I Ate Last Night'};

			// Instantiate and draw our chart, passing in some options.
			var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
			pieChart.draw(data, options);

			var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
			barChart.draw(data, options);
	}

	$(document).ready(function(){
		if($.browser.mozilla) {
			//refresh page on browser resize
			// http://www.sitepoint.com/jquery-refresh-page-browser-resize/
			$(window).bind('resize', function(e)
			{
				if (window.RT) clearTimeout(window.RT);
				window.RT = setTimeout(function()
				{
					this.location.reload(false); /* false to get page from cache */
				}, 200);
			});      
		} else {
			$(window).resize(function(){
				drawChart();
			});  
		}   
	});

	</script>
	<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

	</body>
</html>