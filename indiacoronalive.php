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
                    <a class="nav-link" href="index.php#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#symptoms">Symptoms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="global-corona.php">GlobalCoronaLive</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     India
                  </a>
                    <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="indiacoronalive.php">Statewise</a>
                      <a class="dropdown-item" href="dist-indiacorona.php">Districtwise</a>
           
                </li>

                <li class="nav-item">
                   <a class="nav-link" href="index.php#contact">Contact</a>
                </li>
             </ul>

          </div>
    </nav>
<!-- Navbar Ends-->

<!-- India-Live-Updates-Starts -->
    <section class="corona-update container-fluid">
      <div class="mb-3">
         <h2 class="text-uppercase text-center"> India States Live Covid-19 Updates </h2>
      </div>
      <div class="table-responsive  mytbl">
         <table class="table-bordered table-striped text-center" id="casesList">
            <tr>
              <th>Lastupdatedtime</th>
              <th>State</th>
              <th>Total Confirmed</th>
              <th>Active</th>
              <th>Total Recovered</th>
              <th>Total Deaths</th>
            </tr>
            <?php
              
              $data = file_get_contents('https://api.covid19india.org/data.json');
              $coranalive = json_decode($data, true);
              $statescount = count($coranalive['statewise']);
              $i=1;

              while($i < $statescount){
            ?>
            <tr>
              <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'];?></td>
              <td><?php echo $coranalive['statewise'][$i]['state'];?></td>
              <td class="count"><?php echo $coranalive['statewise'][$i]['confirmed'];?></td>
              <td class="count"><?php echo $coranalive['statewise'][$i]['active'];?></td>
              <td class="count"><?php echo $coranalive['statewise'][$i]['recovered'];?></td>
              <td class="count"><?php echo $coranalive['statewise'][$i]['deaths']; ?></td>
            </tr>
            <?php 
                $i++;
             }
           ?>
         </table>
       </div>
    </section>
<!-- World-Live-Updates-Starts -->

<!-- Footer-Starts-->
     <footer class="mt-5">
        <div class="footer-style text-white text-center container-fluid">
           <p>Copyright by Bilal & Pooja</p>
        </div>
     </footer>  
<!-- Footer-Ends--> 

<!-- script-for-counting -->
     <script type="text/javascript">

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