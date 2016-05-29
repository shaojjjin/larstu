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
				<a href="/admin/home" @if (Request::is('admin/home')) class="active" @endif>
				<i class="fa fa-home fa-fw"></i>HOME</a>
			</li>

			<li>
				<a href="/admin/post" @if (Request::is('admin/post*')) class="active" @endif>
				<i class="fa fa-edit"></i>New Post</a>
			</li>

			<li>
				<a href="/admin/tag" @if (Request::is('admin/tag*')) class="active" @endif>
				<i class="fa fa-database fa-fw"></i>Tags</a>
			</li>

			<li>
				<a href="#" @if (Request::is('admin/post2*')) class="active" @endif>
				<i class="fa fa-sliders fa-fw"></i>Settings</a>
			</li>

			<li>
				<a href="/auth/logout">
				<i class="fa fa-eject fa-fw"></i>Sign Out</a>
			</li>

		</ul>  

	</nav>
	

</div>