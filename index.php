<?php  

include 'connect.php'; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>corona dashboard</title>
</head>
<body>
    <!---------------------------------------NAVIGATION BAR-------------------------------------------------------------------------->
   <nav class="navbar">
       <div class="navbar-container container">
             <input type="checkbox">
             <div class="hamburger-lines">
                 <span class="line line1"></span>
                 <span class="line line2"></span>
                 <span class="line line3"></span>
             </div>
             <ul class="menu-items">
                 <li><a href="#showcase">HOME</a></li>
                 <li><a href="#about">ABOUT COVID</a></li>
                 <li><a href="#food">CORONA CASE UPDATE</a></li>
                 <li><a href="#food-menu">HOSPITAL</a></li>
                 <li><a href="#testimonial">TESTIMONIAL</a></li>
                 <li><a href="#contact">CONTACT</a></li>
                 <li><a href="http://localhost/pandemic/login.html">ADMIN</a></li>
             </ul>
             <h1 class="logo">HD</h1>

       </div>

   </nav>
<!-----------------------------------------------FRONT PAGE------------------------------------------------------------------------>
   <section class="showcase-area" id="showcase">
       <div class="showcase-container">
        <h1 class="main-tittle"> CORONA DASHBOARD</h1>
        <P>Ultimately, the greatest lesson that COVID-19 can teach humanity is that we are all in this together."</P>
        <a href="#food-menu" class="btn btn-primary">GO</a>

       </div>
         

   </section>
<!-------------------------------------------------about covid-------------------------------------------------------->
     <section id="about">  
         <div class="about-wrapper container">
             <div class="about-text">
                 <p class="small">ABOUT COVID</p>
                 <h2>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</h2>
                 <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

                    Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.
                    
                    The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face.  .</p>
                    
                     
             </div>
             <div class="about-img">
                 <img src="./img/national-cancer-institute-701-FJcjLAQ-unsplash.jpg" alt="about us">
             </div>
            </div>
             
          
        </section>

<!-----------------------------------------------CORONA CASE UPADTE---------------------------------------------------------------->
   <section id="food">
       <h2>CORONA  CASES UPDATE</h2>
       <div class="food-container">
           <div class="food-type fruit"> 
               <div class="img-container">
                   <img src=" ./img/30541728.jpg" alt="">
                   <div class="img-content">
                       <h3>INDIA UPDATE</h3>
                       <a href="  https://www.ndtv.com/coronavirus/fullcoverage" class="btn btn-primary" target="_blank">MORE</a>
                   </div>
               </div>
           </div>


           <div class="food-type vegetable">
              <div class="img-container">
                  <img src="./img/30228148.jpg" alt="">
                <div class="img-content">
                    <h3>WORLD UPDATE</h3>
                    <a href=" https://en.wikipedia.org/wiki/Template:COVID-19_pandemic_data" class="btn btn-primary" target="_blank">MORE</a>
                </div>
              </div>
            </div>


           <div class="food-type grain">
            <div class="img-container">
                <img src="./img/30246905.jpg" alt="">
                <div class="img-content">
                    <h3>Vaccine Registration</h3>
                    <a href="https://selfregistration.cowin.gov.in/" class="btn btn-primary" target="_blank">MORE</a>
                </div>
            </div>       
        </div>
       </div>
   </section>

<!----------------------------------------------HOSPITAL------------------------------------------->
<section id="food-menu">
   
    <h2 class='food-menu-heading'>
      Hospital 
    </h2>
    <div class="food-menu-container container" align="center">
<?php $result2 = $conn->query("SELECT * FROM  hdata "); ?>
<?php  if($result2){ while($info = mysqli_fetch_array($result2)) { ?>
        <div class="food-menu-item"> 
            

                   <!-- <div class="food-img">
                            <img src="./img/BMFYWH.jpg" alt="">
                  </div> -->
                 <div class="food-description">
                           <h2 class="food-tittle"> <?php echo$info['hname'];?></h2>
                           <p><?php echo$info['addr'];?></p>
                        <p class="food-price">Beds avail: <?php echo$info['tvb'];?></p>
                        <p class="food-price">phoe: <?php echo$info['contact'];?></p>
                  </div>
       </div>
     <?php  }   } ?>
  </div>
 
</section>
<!-- <section id="food-menu">
       





        <h2 class='food-menu-heading'>
          Hospital 
        </h2>
        <div class="food-menu-container container">
            <div class="food-menu-item"> 
                
    
                       <div class="food-img">
                                <img src="./img/BMFYWH.jpg" alt="">
                      </div>
                     <div class="food-description">
                               <h2 class="food-tittle"> BOMBAY HOSPITAL 1 ></h2>
                               <p>lorem lfj orjeifj iji eiheihfr ihefri ieh ihrih irh</p>
                            <p class="food-price">Beds avail: 54 </p>
                      </div>
           </div>
           
      </div>

    </section> -->
<!----------------------------------------------------TESTIMONIALS----------------------------------------------------->
  <section id="testimonial">
      <h2 class="testimonial-tittle"> Visiters Feedback </h2>
      <div class="testimonial-container container">
          <div class="testimonial-box">
              <div class="star-rating">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
              <p class='testimonial-text'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, labore.</p>
               <div class="customer-detail">
                   <div class="customer-photo"><img src="./img/hd3.jpeg" alt=""></div>
                   <p class='customer-name'>Amar</p>
               </div>

          </div>

          <div class="testimonial-box">
            <div class="star-rating">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
            <p class='testimonial-text'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, labore.</p>
             <div class="customer-detail">
                 <div class="customer-photo"><img src="./img/hd2.jpeg" alt=""></div>
                 <p class='customer-name'>Akbar</p>
             </div>

        </div>


        <div class="testimonial-box">
            <div class="star-rating">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </div>
            <p class='testimonial-text'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, labore.</p>
             <div class="customer-detail">
                 <div class="customer-photo"><img src="./img/hd1.jpeg" alt=""></div>
                 <p class='customer-name'>Anthony</p>
             </div>

        </div>

      </div>

  </section>

    <!---------------------------------------CONTACT US------------------------------------------------------------>

     <section id="contact">
         <div class="contact-container container">
             <div class="contact-image">
                 <img src="./img/donate-654328_1920.png" alt="">
             </div>
             <div class="form-container">
                 <h2>Contact Us</h2>
                 <input type="char" name="name" id="name" placeholder="name" >
                 <input type="e-mail" name="e-mail" id="e-mail" placeholder="e-mail" required>
                 <input type="Address" name="" id="" placeholder="Address" required>
                 <input type="contact No." name="" id="" placeholder="Contact No." required>
                 <textarea  name="" id=""  cols="30" rows="10" placeholder="Type your message here" required></textarea>
                <a href="#" class='btn btn-primary'>Submit</a>
                
                
                
                </div>
         </div>
     </section>


<!---------------------------------------------------------FOOTER------------------------------------------------------->

<footer id="footer">

    <h2>Corona Dashboard &copy; all rights reserved.</h2>


<!------------------------------------SMOOTH SCROLLING----------------------------------------------JAVA- SCRIPT-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

</script>


<!------------------------------CURSOR BOTTON------------------------------------------->


</body>
</html>