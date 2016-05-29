@include('admin.partials.head')
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      
      @include('admin.partials.navbar')
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        
        <div class="templatemo-content-container">
        <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
              <div class="panel-heading templatemo-position-relative">
               
                <h2 class="text-uppercase">Tags Table</h2>
                <a href="#" class="fa fa-plus"></a>
              </div>
              <div class="table-responsive">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <td style="width:8%;">Tag</td>
                      <td style="width:18%;">Title</td>
                      <td style="width:20%;">Subtitle</td>
                      <td style="width:30%;">Meta Descriptin</td>
                      <td style="width:13%;">Action</td>
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