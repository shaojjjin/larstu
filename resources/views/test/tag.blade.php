<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Visual Admin Dashboard - Manage Users</title>
    <meta name="description" content="">

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
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      
      @include('test.partials.navbar')
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        
        <div class="templatemo-content-container">
        <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
              <div class="panel-heading templatemo-position-relative">
                <h2 class="text-uppercase">Tags Table</h2>
              </div>
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <td>Tag</td>
                      <td>Title</td>
                      <td>Subtitle</td>
                      <td>Meta Descriptin</td>
                      <td>Action</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>John</td>
                      <td>Smith</td>
                      <td>@jS</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Bill</td>
                      <td>Jones</td>
                      <td>@bJ</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Mary</td>
                      <td>James</td>
                      <td>@mJ</td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Steve</td>
                      <td>Bride</td>
                      <td>@sB</td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Paul</td>
                      <td>Richard</td>
                      <td>@pR</td>
                    </tr>                    
                  </tbody>
                </table>    
              </div>                          
        
        </div>

          
          <div class="pagination-wrap">
            <ul class="pagination">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3 <span class="sr-only">(current)</span></a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true"><i class="fa fa-play"></i></span>
                </a>
              </li>
            </ul>
          </div>          
          <footer class="text-right">
            <p>Copyright &copy; 2084 Company Name 
            | More Templates <a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>