@include('admin.partials.head')

	<body>  
	<!-- Left column -->
	<div class="templatemo-flex-row">
	@include('admin.partials.navbar')
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
					<img src="../images/bicycle.jpg" alt="Bicycle" class="img-circle img-thumbnail">
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

            @include('admin.partials.errors')
            @include('admin.partials.success')

            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <td style="width:35%;">Title</td>
                  <td style="width:8%;">Tags</td>
                  <td style="width:10%;">Time</td>
                  <td style="width:8.5%;">Action</td>
                </tr>
                 </thead>
               <tbody>
                @foreach ($posts as $post)
				<tr>

                <td>{{ $post->title }}</td>
                <td>Title</td>
                <td>{{ $post->published_at->format('j-M-y g:ia') }}</td>
                <td>
                    <a href="" class="templatemo-edit-btn">Edit</a>
                    <a href="" class="templatemo-edit-btn">Delete</a>
                </td>
                </tr>
				@endforeach

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
	
	

	@section('scripts')
	<script>
	    $(function() {
	        $("#posts-table").DataTable({
	            order: [[0, "desc"]]
	        });
	    });
	</script>
	@stop
	<!-- JS -->
	<script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
	<script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
	
	
	<script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

	</body>
</html>