<section id="food-menu">
   
    <h2 class='food-menu-heading'>
      Hospital 
    </h2>
    <div class="food-menu-container container">
<?php $result2 = $conn->query("SELECT * FROM hdata "); ?>
<?php  if($result2){ while($info = mysqli_fetch_array($result2)) { ?>
        <div class="food-menu-item"> 
            

                   <div class="food-img">
                            <img src="./img/BMFYWH.jpg" alt="">
                  </div>
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