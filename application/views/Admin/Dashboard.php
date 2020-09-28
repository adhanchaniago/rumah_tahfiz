        <!-- page content -->
        <div class="right_col" role="main">
        <?php 
        $hari=array("Minggu","Senin","Selasa","Rabu","Kamis","Ju'mat","Sabtu");
        $bulan=array(1=>"Januari","Febuari","Maret","April","Mei","Juni","Juli","Agustus",
                  "September","Oktober","September","November","Desember");
        $tgl=date("d");
        $bln=date("n");
        $hr=date("w");
        $thn=date("Y");
        // echo("Kalender hari ini: ");
        echo("<b>$hari[$hr] $tgl $bulan[$bln] $thn</b>");
    ?>
          <!-- jam -->
             <script type="text/javascript">  
       // This function gets the current time and injects it into the DOM  
       function updateClock() {  
         // Gets the current time  
         var now = new Date();  
         // Get the hours, minutes and seconds from the current time  
         var hours = now.getHours();  
         var minutes = now.getMinutes();  
         var seconds = now.getSeconds();  
         // Format hours, minutes and seconds  
         if (hours < 10) {  
           hours = "0" + hours;  
         }  
         if (minutes < 10) {  
           minutes = "0" + minutes;  
         }  
         if (seconds < 10) {  
           seconds = "0" + seconds;  
         }  
         // Gets the element we want to inject the clock into  
         var elem = document.getElementById('clock');  
         // Sets the elements inner HTML value to our clock data  
         elem.innerHTML = hours + ':' + minutes + ':' + seconds;  
       }  
     </script> 
 <body onload="setInterval('updateClock()', 200);">  
     <!-- This is the container for our clock, it can be any HTML element.   -->
     <h1 id="clock"></h1>  
   </body>
   
   
    <hr>
          <div class="">
       
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count">179</div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">179</div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count">179</div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count">179</div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Transaction Summary <small>Weekly progress</small></h2>
                    <div class="filter">
                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="demo-container" style="height:280px">
                        <div id="chart_plot_02" class="demo-placeholder"></div>
                      </div>
        
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

   
   