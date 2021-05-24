<!DOCTYPE html>
<!-- ## Developed by bilal & pooja ##-->
<html lang="en">
  <head>
    <title>COVI-TRACKER</title>
    <?php include 'links.php'?>
    <?php include 'style.php'?>
  </head>
<body>

<!-- Navbar Starts-->
    <nav class="navbar navbar-expand-lg  navStyle p-3">
      <a class="navbar-brand pl-5" href="index.php">COVI-TRACKER</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto pr-5 text-capitalize">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#symptoms">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="global-corona.php">GlobalCoronaLive</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="indiacoronalive.php">IndiaCoronaLive</a>
                </li> -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     India
                  </a>
                    <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="indiacoronalive.php">Statewise</a>
                      <a class="dropdown-item" href="dist-indiacorona.php">Districtwise</a>
           
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="#contact">Contact</a>
                </li>
             </ul>

          </div>
    </nav>
<!-- Navbar Ends-->

<!-- World-Live-Updates-Starts -->
<section class="corona-update container-fluid" id="world">
       <div class="mb-3">
         <h2 class="text-uppercase text-center">World Covid-19 Live Updates</h2>
       </div>
       <div class="table-responsive  mytbl">
         <table class="table-bordered table-striped text-center" id="casesList">           
           <tr>
              <th>Date</th>
              <th>State</th>
              <th>Total Confirmed</th>
              <th>Total Recovered</th>
              <th>Total Deaths</th>
           </tr>
           <?php
             $data = file_get_contents('https://api.covid19api.com/summary');
             $coranalive = json_decode($data, true);
             $statescount = count($coranalive['Countries']);
             $i=1;
               while($i < $statescount){
           ?>
           <tr>
              <td><?php echo $coranalive['Countries'][$i]['Date'];?></td>
              <td><?php echo $coranalive['Countries'][$i]['Country'];?></td>
              <td class="count"><?php echo $coranalive['Countries'][$i]['TotalConfirmed'];?></td>
              <td class="count"><?php echo $coranalive['Countries'][$i]['TotalRecovered'];?></td>
              <td class="count"><?php echo $coranalive['Countries'][$i]['TotalDeaths']; ?></td>
           </tr>
           <?php 
              $i++;
             }
           ?>
          
          </table>
       </div>
    </section>

<!-- World-Live-Updates-Ends-->


<!-- Footer-Starts-->

<footer class="mt-5">
       <div class="footer-style text-white text-center container-fluid">
         <p>Copyright by Bilal & Pooja</p>
       </div>
     </footer>   
<!-- Footer-Ends-->

<!-- Back to top button -->
<a id="button"></a>

 <!-- script-for-counting -->

     <script type="text/javascript">
           
           var btn = $('#button');
            $(window).scroll(function() {
              if ($(window).scrollTop() > 300) {
                  btn.addClass('show');
                } else {
                   btn.removeClass('show');
               }
            });

               btn.on('click', function(e) {
               e.preventDefault();
               $('html, body').animate({scrollTop:0}, '300');
               });



         $('.count').each(function () {
            $(this).prop('Counter',0).animate({
             Counter: $(this).text()
          }, 
          {
             duration: 4000,
             easing: 'swing',
             step: function (now) {
               $(this).text(Math.ceil(now));
            }
          });
        });    

     </script>
</body>
</html>

