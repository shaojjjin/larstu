@include('test.partials.head')
		<body>  
		<!-- Left column -->
		<div class="templatemo-flex-row">
		@include('test.partials.navbar')
		<!-- Main content --> 
 <div class="templatemo-content col-1 light-gray-bg">
		<div class="templatemo-content-container">
		  <div class="templatemo-content-widget white-bg">
			<h2 class="margin-bottom-10">New Post</h2>
			<p>Here is where you can write down.</p>
			<form action="index.html" class="templatemo-login-form" method="post" enctype="multipart/form-data">
			  <div class="row form-group">
				<div class="col-lg-9 col-md-6 form-group">                  
					<label for="inputFirstName">Title</label>
					<input type="text" class="form-control" id="inputFirstName">                  
				</div>
				<div class="col-lg-3 col-md-6 form-group">                  
					<label for="inputFirstName">Time</label>
					<input type="text" class="form-control" id="inputFirstName">                  
				</div>
			  </div>
			  <div class="row form-group">
				<div class="col-lg-9 col-md-6 form-group">                  
					<label for="inputUsername">Subtitle</label>
					<input type="text" class="form-control" id="inputUsername">                  
				</div>
				<div class="col-lg-3 col-md-6 form-group">                  
					<label for="inputFirstName">Tags</label>
					<input type="text" class="form-control" id="inputFirstName">                  
				</div>
			  </div>
			  <div class="row form-group">
				<div class="col-lg-9 form-group">                   
					<label class="control-label" for="inputNote">Content</label>
					<textarea class="form-control" id="inputNote" rows="8"></textarea>
				</div>
			  </div>
			  
			  <div class="form-group">
				<button type="submit" class="templatemo-blue-button">Update</button>
				<button type="submit" class="templatemo-white-button">Draf</button>
			  </div>                           
			</form>
		  </div>
		  <footer class="text-right">
			<p>Copyright &copy; 2084 Company Name 
			| More Templates <a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
		  </footer>
		</div>
	  </div>
	</div>

	<!-- JS -->
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
	<script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->

  </body>
</html>