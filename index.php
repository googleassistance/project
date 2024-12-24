<!DOCTYPE html>
<html lang="en">
    <?php include 'header.php'; 
    include 'connectivity.php';?>
<head>
<style>
    /* Custom CSS for table header */
    .menu-table thead th {
        background-color: #363636;
        color: #ffffff;
    }
</style>    
</head>
<!-- ***** Main home Area Start ***** -->
<div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Buffy's Cafe</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/home-photo.png">
                            </div>
                          </div>
                          <!-- // Item -->
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main home Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>A little bit of cafe history</h2>
                        </div>
                        <p>At Buffy`s cafe , we view food as an art form. Our culinary artisans, under the guidance of 
                           Executive Chef , embark on a daily quest for perfection. Each dish is a canvas, and every 
                           ingredient is a stroke of inspiration, resulting in a menu that tells a story of creativity and innovation.
                        </p>
                        <p>
                        you’re not just a guest; you’re an honored friend. Our warm and inviting atmosphere is
                        designed to make you feel like you’ve entered an extension of your own home.
                        </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/about-1.png" width="80" height="120">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-2.png" width="80" height="120">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/about-3.png" width="80" height="120">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                            <img src="assets/images/ab-photo.jpg" width="100" height="500">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->


<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class='info'>
                              <h1 class='title'>Chocolate Cake</h1>
                              <p class='description'>Chocolate, Refined oil, balsamic vinegar, white Sugar, Dark Chocolate, Milk chocolate</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class='info'>
                              <h1 class='title'>Klassy Pancake</h1>
                              <p class='description'>Milk, eggs,melted butter, flour, baking powder, Nutella, balsamic vinegar, and white sugar</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class='info'>
                              <h1 class='title'>French  Bread</h1>
                              <p class='description'>Flour, water, yeast, sugar, salt, olive oil, bread dip,baking powder,balsamic vinegar</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class='info'>
                              <h1 class='title'>CheeseCake</h1>
                              <p class='description'>Melted Butter,white sugar,eggs,frozen Blueberries and Blueberry jelly</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                      <div class="item">
                        <div class='card card5'>
                            <div class='info'>
                              <h1 class='title'>Cup Cake</h1>
                              <p class='description'>Flour,white sugar,baking powder,balsamic vinegar,egg,vegetable oil and milk</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
    
    
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h2>Our Menu</h2>
                </div>
            </div>
        </div>
        
        <div class="row">
			<div class="col-lg-12 mx auto">
				<div class="menu-table-wrap">
					<table class="menu-table table table-bordered text-center"> 
                    <?php
					    $select_menu=mysqli_query($con,"select * from item");
						$grand_total=0;
						if(mysqli_num_rows($select_menu)>0){
				    ?>
					<thead class="menu-table-head">						
						<tr class="table-head-row">   
                            <!-- <th class="product-id">id</th>                                      -->
							<th class="product-name">Item Name</th>
                            <th class="product-name">Price</th>
						</tr>
					</thead>
					<tbody>
						<?php
							while($fetch_menu=mysqli_fetch_assoc($select_menu)){
						?>
						<tr class="table-body-row" >
                            <!-- <td class="product-id"><?php echo $fetch_menu['id']?></td> -->

							<td class="menu-name"><?php echo $fetch_menu['name']?></td>									
                                    
							<td class="menu-name"><?php echo $fetch_menu['price']?></td>
						</tr>
								
						<?php
						    }
					    }
					    else{
							echo "<tr><td colspan='2'>No Item Available</td></tr>";
						}
						?>
							
					</tbody>
					</table>
				</div>
		    </div>
        </div>
    </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Chefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" >
                    <div class="chef-item">
                        <div class="thumb">
                            <img src="assets/images/chef1.png" alt="Chef #1" height="240">
                        </div>
                        <div class="down-content">
                            <h4>Vikas Khanna</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <img src="assets/images/chef2.png" alt="Chef #2" height="240">
                        </div>
                        <div class="down-content">
                            <h4>Sanjeev Kapoor</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <img src="assets/images/chef3.png" alt="Chef #3" height="240">
                        </div>
                        <div class="down-content">
                            <h4>Hari Nayak</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->


    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>    
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="contact.php" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Table Reservation</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                
                                <input name="name" type="text" id="name" placeholder="Your Name" required>
                              
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required>
                              
                            </div>
                            <div class="col-lg-6 col-sm-12">
                            
                                <input name="phone" type="text" id="phone" placeholder="Phone Number" required>
                              
                            </div>
                            <div class="col-md-6 col-sm-12">
                              
                                <select value="number-guests" name="guests" id="number-guests">
                                    <option value="number-guests" >Number Of Guests</option>
                                    <option name="1" id="1">1</option>
                                    <option name="2" id="2">2</option>
                                    <option name="3" id="3">3</option>
                                    <option name="4" id="4">4</option>
                                    <option name="5" id="5">5</option>
                                    <option name="6" id="6">6</option>
                                    <option name="7" id="7">7</option>
                                    <option name="8" id="8">8</option>
                                    <option name="9" id="9">9</option>
                                    <option name="10" id="10">10</option>
                                    <option name="11" id="11">11</option>
                                    <option name="12" id="12">12</option>
                                </select>
                            
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-sm-12">
                              
                                <select value="time" name="time" id="time">
                                    <option value="time">Time</option>
                                    <option name="Breakfast" id="Breakfast">Breakfast</option>
                                    <option name="Lunch" id="Lunch">Lunch</option>
                                    <option name="Dinner" id="Dinner">Dinner</option>
                                </select>
                              
                            </div>
                            
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              
                            </div> 

                                <button type="submit" name="s" id="form-submit" class="main-button-icon">Make A Reservation</button>
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->

    <?php include 'footer.php'; ?>
    
  </body>
</html>