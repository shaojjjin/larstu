<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>小秘密 - 登陆</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        
	    <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet">
	    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
	    <link href="{{asset('/css/templatemo-style.css')}}" rel="stylesheet">
	    
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="js/html5shiv.min.js"></script>
	      <script src="js/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg" style="margin-top: 10%;">
			<header class="text-center">
	          <div class="square"></div>
	          <h1>&nbsp;后台登陆</h1>
	        </header>
	        <form action="index.html" class="templatemo-login-form">
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-user fa-fw"></i></div>	        		
		              	<input type="text" class="form-control">           
		          	</div>	
	        	</div>
	        	<div class="form-group">
	        		<div class="input-group">
		        		<div class="input-group-addon"><i class="fa fa-key fa-fw"></i></div>	        		
		              	<input type="password" class="form-control">           
		          	</div>	
	        	</div>	          	
<!-- 	          	<div class="form-group">
				    <div class="checkbox squaredTwo">
				        <input type="checkbox" id="c1" name="cc" />
						<label for="c1"><span></span>记住</label>
				    </div>				    
				</div>
 -->				<div class="form-group">
					<button type="submit" class="templatemo-blue-button width-100">登陆</button>
				</div>
	        </form>
		</div>
	</body>
</html>