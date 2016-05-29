<div class="templatemo-sidebar">

	<header class="templatemo-site-header">

		<div class="square"></div>
		<h1>&nbsp;Visual Admin</h1>

	</header>
	
	<!-- Search box
	<form class="templatemo-search-form" role="search">
		<div class="input-group">
				<button type="submit" class="fa fa-search"></button>
				<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
		</div>
	</form>  
	-->
	
	<nav class="templatemo-left-nav">    

	
		<ul>

			<li>
				<a href="/test" @if (Request::is('test')) class="active" @endif>
				<i class="fa fa-home fa-fw"></i>Dashboard</a>
			</li>

			<li>
				<a href="/test/post" @if (Request::is('test/post*')) class="active" @endif>
				<i class="fa fa-bar-chart fa-fw"></i>New Post</a>
			</li>

			<li>
				<a href="/test/tag" @if (Request::is('test/tag*')) class="active" @endif>
				<i class="fa fa-database fa-fw"></i>Tags</a>
			</li>

			<li>
				<a href="/test/setting" @if (Request::is('test/post2*')) class="active" @endif>
				<i class="fa fa-map-marker fa-fw"></i>Settings</a>
			</li>

			<li>
				<a href="/auth/logout" @if (Request::is('test/post3*')) class="active" @endif>
				<i class="fa fa-eject fa-fw"></i>Sign Out</a>
			</li>

		</ul>  

	</nav>
	

</div>