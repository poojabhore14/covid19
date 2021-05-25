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

<!-- Main-Header-Section-Starts -->
    <div class="main-header">
       <div class="row w-100 h-100">
           <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
             <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
               <img src="img/allTogether.jpg" alt="" width="300" height="300" >
             </div>
           </div>
           <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
             <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
               <h1>Let's Stay Safe & Fight Together Againest Cor<span class="cor-anm">
                   <img src="img/corona.png" alt="" width="80" height="80"></span>na Virus</h1>
             </div>
           </div>
       </div>
    </div>
<!-- Main-Header-Section-Ends -->

<!-- World-Live-Updates-Starts -->
<section class=" container-fluid" id="world">
       <div class="mb-5 corona-update">
         <h1 class="text-uppercase text-center">World Covid-19 Live Updates</h1>
       </div>
       

       <?php
             $data = file_get_contents('https://api.covid19api.com/summary');
             $coranalive = json_decode($data, true);
             $statescount = count($coranalive['Global']);
             
           ?>
<div class="col-md-12 ">
    <div class="row ">
        <div class="col-xl-4 col-lg-6">
            <div class="card newconfirm">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">New Confirmed</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0 count">
                            <?php echo $coranalive['Global']['NewConfirmed'];?>
                            </h2>
                        </div>
                        
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card totalconfirm">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Total Confirmed</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0 count">
                            <?php echo $coranalive['Global']['TotalConfirmed'];?>
                            </h2>
                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-6">
            <div class="card newdeath">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">New Deaths</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0 count">
                            <?php echo $coranalive['Global']['NewDeaths'];?>
                            </h2>
                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="row ">
<div class="col-xl-4 col-lg-6">
            <div class="card totaldeath">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Total Deaths</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0 count">
                            <?php echo $coranalive['Global']['TotalDeaths'];?>
                            </h2>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card newrecover">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">New Recovered</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0 count">
                            <?php echo $coranalive['Global']['NewRecovered'];?>
                            </h2>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card totalrecover">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Total Recovered</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0 count">
                            <?php echo $coranalive['Global']['TotalRecovered'];?>
                            </h2>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
</div>


    </section>

<!-- World-Live-Updates-Ends-->

<!-- About-Section-Starts -->

     <div class="container-fluid sub-section pt-5 pb-5 " id="about">
        <div class="corona-update text-center mt-4 mb-5">
          <h1>About Covid-19</h1>
        </div>
        <div class="row pt-5">
           <div class="col-lg-5 col-md-6 col-12 ml-5 abou-img">
              <img src="img/covid-info.jpg" class="img-fluid">
           </div>
           <div class="col-lg-6 col-md-6 col-12 ">
               <h2>What is Covid-19?</h2>
               <p>Coronavirus disease (COVID-19) 
                   is an infectious disease caused by a newly
                   discovered coronavirus.Most people who fall 
                   sick with COVID-19 will experience mild to moderate
                   symptoms and recover without special treatment.
               </p>
               <p>The virus that causes COVID-19 is mainly transmitted through
                  droplets generated when an infected person coughs, sneezes, or 
                  exhales. These droplets are too heavy  to hang in the air, and 
                  quickly fall on floors or surfaces.
                  You can be infected by breathing in the virus if you are within 
                  close proximity of someone who has COVID-19, or by touching a 
                  contaminated surface and then your eyes, nose or mouth.
              </p>
           </div>
       </div>
    </div>
<!-- About-Section-Ends-->

<!-- Symptoms-Section-Starts -->

   <div class="container-fluid  pt-5 pb-5 " id="symptoms">
     <div class="corona-update text-center mt-4 mb-5">
         <h1>Corona-Virus Symptoms</h1>
     </div>
     <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
              <img src="img/coughs.jpg" alt="" class="img-fluid" height="120" width="120">
              <figcaption>cough</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
             <img src="img/runny-nose.png" alt="" class="img-fluid" height="120" width="120">
             <figcaption>runny Nose</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5 ">
            <figure class="text-center">
             <img src="img/feve-r.png" alt="" class="img-fluid" height="170" width="120">
             <figcaption>fever</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
             <img src="img/cold.png" alt="" class="img-fluid" height="120" width="120">
             <figcaption>cold</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
             <img src="img/tired.png" alt="" class="img-fluid" height="120" width="120">
             <figcaption>tiredness</figcaption>
            </figure>
          </div>
          <div class="col-lg-4 col-md-4 col-12 mt-5">
            <figure class="text-center">
             <img src="img/braath.png" alt="" class="img-fluid" height="120" width="120">
             <figcaption>difficulty breathing</figcaption>
            </figure>
          </div> 
         </div>
       </div>
    </div> 
<!-- Symptoms-Section-End -->

<!-- Contact-Section-Starts -->

     <div class="container-fluid sub-section pt-5 pb-5 " id="contact">
       <div class="corona-update text-center mt-4 mb-5 text-uppercase">
         <h1>Contact ASAP</h1>
       </div>
       <div class="container">
       <div class="row">
         <div class="col-lg-8 offset-lg-2 col-12">
            <form action="" method="POST">
              <div class="form-group">
                <label>username</label>
                <input type="text" class="form-control" name="username" 
                    placeholder="name" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email"  
                   placeholder="name@example.com" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label>mobile</label>
                <input type="number" maxlength="10" class="form-control" name="mobile"  
                   placeholder="mobile" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label>Select Symptoms</label><br>
                  <div class="custom-control custom-checkbox custom-control-inline 
                       text-capitalize">
                    <input type="checkbox" name="coronsym[]" id="customcheckbox1" 
                            class="custom-control-input" value="cold"> 
                    <label class="custom-control-label" for="customcheckbox1">Cold</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline 
                       text-capitalize">
                    <input type="checkbox" name="coronsym[]" id="customcheckbox2" 
                            class="custom-control-input" value="fever"> 
                    <label class="custom-control-label" for="customcheckbox2">Fever</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline 
                       text-capitalize">
                    <input type="checkbox" name="coronsym[]" id="customcheckbox3" 
                            class="custom-control-input" value="breath"> 
                    <label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>
                  </div>
                  <div class="custom-control custom-checkbox custom-control-inline 
                       text-capitalize">
                    <input type="checkbox" name="coronsym[]" id="customcheckbox4" 
                            class="custom-control-input" value="tired"> 
                    <label class="custom-control-label" for="customcheckbox4">Filling weak</label>
                  </div>
              </div>
                 <div class="form-group">
                   <label>Example textarea</label>
                   <textarea class="form-control" id="exampleFormControlTextarea1"
                    rows="3" name="msg"></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
           </form>
         </div>
       </div>
    </div>
 </div> 
 <!-- Contact-Section-Ends -->

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

<!-- php-code-for-contact-form -->
     <?php 
  
//  include 'dbconnect.php';

       if(isset($_POST['submit'])){

          $username = $_POST['username'];
          $email = $_POST['email'];
          $mobile = $_POST['mobile'];
          $symp = $_POST['coronsym'];
          $message = $_POST['msg'] ;

          $check = "";

          foreach($symp as $chk1){
  
            $check .= $chk1.",";
          }

         $insertQuery = " insert into coronacase(username, email,	mobile,	symp,	
             message) values('$username', '$email', '$mobile', '$check', '$message')";

         $query = mysqli_query($conn, $insertQuery);

      if($query){
         ?>
           <script>
              alert("Data Inserted Succefully");
           </script>
       <?php
      }else
      {
       ?>
          <script>
            alert(" Failed");
          </script>
       <?php
      }
    } 
  ?>
