<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Detail</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="Images/Sachindra-logu.png" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" 
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.min.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" 
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" 
          rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>
  <style>
   

/* Pop animation */
@keyframes pop {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.3); /* Slightly larger */
    }
    100% {
        transform: scale(1);
    }
}

  </style>
    <body>
        <header>
            <!-- NAV_BAR_SECTION START -->
            <nav>
                <input type="checkbox" id="nav-toggle" />
                <div class="logo">
                    <a href="">
                        <img src="Images/Sachindra-logu.png" alt="AFMS-Logo" title="AFMS-Logo" />
                    </a>
                </div>
                <ul class="links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#about">Our Products</a></li>
                    <li><a href="#work">Custom Rubber Solutions</a></li>
                    <li><a href="#">Login / Signup</a></li>
                    <li>
                        <a href="#"><img class="icon" src="Images/user-logu.png" alt="User Icon" title="User Icon" /></a>
                    </li>
                    <li>
                        <a href="#"><img class="icon" src="Images/Cart-logu.png" alt="Cart Icon" title="Cart Icon" /></a>
                    </li>
                    <li>
                        <a href="#"><img class="icon" src="Images/Search-logu.png" alt="Search Icon" title="Search Icon" /></a>
                    </li>
                </ul>
                <label for="nav-toggle" class="icon-burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </label>
            </nav>
            <!-- NAV_BAR_SECTION END -->
        </header>    
          <!-- Product Detail Section -->
                    <section class="prod-det">
                        <div class="container">
                            <div class="breadcrumb-div">
                                <h5>Product Listing <i class="fa-solid fa-chevron-right"></i> <span style="color: #000;">Product Page</span></h5>

                            </div>
                            <div class="prod-div-main">
 
                                <!-- Left: Product Images -->
                                <div class="prod-img">
                                   
                                    <div class="prod-big-img">
                                        <img src="Images/Plate-image.png" class="img-fluid rounded-top" alt="Weight Plate">
                                    </div>
                                    <div class="prod-small-img">
                                        <img src="Images/5-kg-plate.png" alt="Product Image 1">
                                        <img src="Images/10-Kg-plate.png" alt="Product Image 2">
                                        <img src="Images/20-kg-plate.png" alt="Product Image 3">
                                    </div>
                                </div>

                                <!-- Right: Product Details -->
                                <div class="cont-det">
                                   <div class="WEIGTH-h3 ">
                                    <h2>Weight Plate</h2>
                                    <div class="heart-icon">
                                        <i id="heart-icon" class="fa fa-heart" aria-hidden="true" onclick="toggleHeart()"></i>
                                    </div>
                                   </div>
                                    <div class="reviews-counter">
                                        <i class="fa fa-star" style="color: #ECB605;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: #ECB605;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: #ECB605;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: #ECB605;" aria-hidden="true"></i>
                                        <i class="fa fa-star" style="color: #ECB605;" aria-hidden="true"></i>
                                        <p>(32 reviews)</p>
                                    </div>

                                    <p>Sachindra 20Kg Spare Rubber Weight Plates (10kg x 2) combo for Home Gym Exercise and Fitness and strength training Equipment </p>

                                    <ul>
                                        <li     ><b>Item Weight :</b> 20 Kilograms</li>
                                        <li><b>Material:</b> Rubber</li>
                                        <li><b>Brand:</b> SX FITNESS</li>
                                        <li><b>Colour:</b> Black- 20Kg Weight(10Kgx2)</li>
                                        <li><b>Manufacturer:</b> Sports Xpert, Sports Xpert, Jalandhar</li>
                                    </ul>

                                    <!-- Weight Options -->
                                        <div class="weight-options">
                                            <h4 class="weight-option">5kg x 2</h4>
                                            <h4 class="weight-option">10kg x 2</h4>
                                            <h4 class="weight-option">15kg x 2</h4>
                                            <h4 class="weight-option">20kg x 2</h4>
                                            <h4 class="weight-option">25kg x 2</h4>
                                        </div>
                                    
                                   <!-- Quantity Selector with Add to Cart Button -->
                                    <div class="add-cart ">
                                        <div class="quantity-container">
                                            <button class="quantity-btn" onclick="decreaseQuantity()">-</button>
                                            <input type="number" class="quantity-input" id="quantity" value="1" min="1">
                                            <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                                        </div>
                                        <a href="#" class="btn add-to-cart">Add to Cart</a>
                                    </div>

                                    <!-- Buy Now Button -->
                                    <div class="btn-group">
                                        <a href="#" class="btn buy-now">Buy Now</a>
                                    </div>
                                 <!-- Delivery  -->
                                  <div class="devliry-div row">
                                    <div class="Dev-card col-lg-3">
                                           <img src="Images/delivery-truck.gif" alt="">
                                           <br>
                                           Free Shipping
                                    </div>
                                    <div class="Dev-card col-lg-3">
                                           <img src="Images/shield.gif" alt="">
                                           <p>1yr Warranty</p>
                                    </div>
                                    <div class="Dev-card col-lg-3">
                                        <img src="Images/Frame.png" alt="">
                                      <p>7 Days Return</p>
                                    </div>

                                  </div>

                                    </div>
                            </div>
                        </div>
                    </section>
                    <section class="description" style="background-image: url(Images/product-dec-background.png);">
                        <div class="container">
                            <div class="main-desc">
                                <h2>Description | <span>Reviews</span></h2>
                                <p>These plates are covered with a layer of durable rubber that makes them quieter and less likely to damage floors compared to traditional iron or steel plates. Rubber plates often have a smoother, softer feel and come in various colors to easily identify different weights. They also provide a non-slip grip for easier handling and are often resistant to scuffs, making them ideal for home gyms and commercial fitness centers. Some designs include built-in handles, making them versatile for a range of exercises, not just barbell use.</p>
                                <h4>Key Highlights</h4>
                                <ul>
                                   <li>Made with Fresh Virgin Rubber.</li>
                                   <li>Thin Profile weight plate compare to others.</li>
                                   <li>Raised Flange to Protect weight number.</li>
                                   <li>Metal Ring for Easy Loading/Unloading.</li>
                                   <li>Featured in The Economic Times</li>
                                   <li>PAN India Free Home Delivery in 4 days</li>
                                </ul>


                            </div>

                        </div>

                    </section>
                    <section class="our-collection">
                        <div class="container">
                          <h2>Our Collection Of Products</h2>
                          <div class="owl-carousel product-main-div-pro">
                            <div class="product-card">
                              <a href="">
                                <div class="discount-badge"></div>
                                <img src="Images/Our-collection-of-product-1.png" alt="Diaphragm" class="product-image" />
                                <div class="product-details">
                                  <h5 class="product-name">Seal</h5>
                                  <div class="product-prices">
                                    <a href="">Enquire now</a>
                                  </div>
                                </div>
                              </a>
                            </div>
                            <div class="product-card">
                              <a href="">
                                <div class="discount-badge"></div>
                                <img src="Images/Our-collection-of-product-2.png" alt="Diaphragm" class="product-image" />
                                <div class="product-details">
                                  <h5 class="product-name">BEADING</h5>
                                  <div class="product-prices">
                                    <a href="">Enquire now</a>
                                  </div>
                                </div>
                              </a>
                            </div>
                            <div class="product-card">
                                <a href="">
                                  <div class="discount-badge"></div>
                                  <img src="Images/Our-collection-of-product-3.png" alt="Diaphragm" class="product-image" />
                                  <div class="product-details">
                                    <h5 class="product-name">O RINGS</h5>
                                    <div class="product-prices">
                                      <a href="">Enquire now</a>
                                    </div>
                                  </div>
                                </a>
                              </div>
                              <div class="product-card">
                                <a href="">
                                  <div class="discount-badge"></div>
                                  <img src="Images/Our-collection-of-product-1.png" alt="Diaphragm" class="product-image" />
                                  <div class="product-details">
                                    <h5 class="product-name">O RINGS</h5>
                                    <div class="product-prices">
                                      <a href="">Enquire now</a>
                                    </div>
                                  </div>
                                </a>
                              </div>
                              <div class="product-card">
                                <a href="">
                                  <div class="discount-badge"></div>
                                  <img src="Images/Our-collection-of-product-2.png" alt="Diaphragm" class="product-image" />
                                  <div class="product-details">
                                    <h5 class="product-name">O RINGS</h5>
                                    <div class="product-prices">
                                      <a href="">Enquire now</a>
                                    </div>
                                  </div>
                                </a>
                              </div>
                              <div class="product-card">
                                <a href="">
                                  <div class="discount-badge"></div>
                                  <img src="Images/Our-collection-of-product-3.png" alt="Diaphragm" class="product-image" />
                                  <div class="product-details">
                                    <h5 class="product-name">O RINGS</h5>
                                    <div class="product-prices">
                                      <a href="">Enquire now</a>
                                    </div>
                                  </div>
                                </a>
                              </div>
                              <div class="product-card">
                                <a href="">
                                  <div class="discount-badge"></div>
                                  <img src="Images/Our-collection-of-product-1.png" alt="Diaphragm" class="product-image" />
                                  <div class="product-details">
                                    <h5 class="product-name">O RINGS</h5>
                                    <div class="product-prices">
                                      <a href="">Enquire now</a>
                                    </div>
                                  </div>
                                </a>
                              </div>
                            <!-- Add more product cards as needed -->
                          </div>
                        </div>
                      </section>
                      
              
              <!-- Subscribe section start -->
        <section class="subscribe">
            <div class="container">
                <div class="main-subs" style="background-image: url(Images/Sub-button.png);">
                    <div class="Subs-sub">
                        <h2>Newsletter</h2>
                        <p>Sign Up for Newsletter We’ll be with you on every walk of life on how to identify new opportunities.</p>
                    </div>
                    <div class="Subs-sub">
                        <div class="subscribe-container">
                            <input type="email" class="subscribe-input" placeholder="Your email address" />
                            <button class="subscribe-button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscribe section end -->
        <!-- footer section -->
        <footer class="footer-section footer-detali">
            <div class="container footer-container ">
                <div class="footer-content">
                    <div class="footer-row">
                        <div class="footer-column footer-1">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="Images/Sachindra-logu.png" class="img-footer" alt="Sachindra" title="Sachindra" />
                                    </a>
                                </div>
                                <div class="footer-text">
                                    <p>
                                        RubberPlus is a leading manufacturer of high-quality rubber products, committed to delivering exceptional solutions across multiple industries. With a focus on innovation, durability, and customer satisfaction, we provide custom rubber components that meet the highest standards of performance and reliability.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column footer-2">
                            <div class="footer-widget">
                                <h3 class="footer-heading">Quick Links</h3>
                                <ul class="quick-links">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Achievements & Certifications</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="footer-column footer-3">
                            <div class="footer-widget">
                                <h3 class="footer-heading">Contact Us</h3>
                                <div class="footer-location">
                                    <img src="Images/footer-icon-1.png" alt="" />
                                    <p>
                                        +91-9447 76 0215 | +91-8606 05 2220 <br />
                                        +91-8606 05 2221 
                                    </p>
                                </div>
                                <div class="footer-phone">
                                    <img src="Images/footer-icon-2.png" alt="" />
                                    <p>
                                        contact@rubberplus.in / <br />
                                        adarshpj@rubberplus.in
                                    </p>
                                </div>
                                <div class="footer-email">
                                    <img src="Images/footer-icon-3.png" alt="" />
                                    <p>Sachindra Rubber Plus LLP Vallivattom, Thrissur Kerala - 680 123</p>
                                </div>
                                <div class="social-icons">
                                    <a href="https://instagram.com" target="_blank">
                                        <img src="Images/instagram-icon.png" alt="Instagram" title="Instagram" />
                                    </a>
                                    <a href="https://twitter.com" target="_blank">
                                        <img src="Images/X-icon.png" alt="X" title="X" />
                                    </a>

                                    <a href="https://facebook.com" target="_blank">
                                        <img src="Images/Facebook-icon.png" alt="Facebook" title="Facebook" />
                                    </a>
                                    <a href="https://linkedin.com" target="_blank">
                                        <img src="Images/Linkedin-icon.png" alt="Linkedin" title="Linkedin" />
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="footer-column footer-4">
                            <div class="footer-widget">
                                <div class="form-container">
                                    <h2>Request a Quote Today!</h2>
                                    <form action="#" method="POST" id="contactForm">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" required placeholder="Name" />
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" id="phone" name="phone" required placeholder="Phone number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" required placeholder="Email" />
                                        </div>
                                        <div class="form-group">
                                            <select id="product" name="product" required>
                                                <option value="">Products & Solutions</option>
                                                <option value="product1">Product 1</option>
                                                <option value="product2">Product 2</option>
                                                <option value="solution1">Solution 1</option>
                                                <option value="solution2">Solution 2</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <textarea id="message" name="message" rows="1" required placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="submit-button">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright-section">
            <p>Copyright @ 2024. Sachindra Rubber Plus LLP</p>
        </div>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/owl.carousel.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
  const weightOptions = document.querySelectorAll('.weight-option');
  
  weightOptions.forEach(option => {
      option.addEventListener('click', () => {
          // Remove 'selected' class from all options
          weightOptions.forEach(opt => opt.classList.remove('selected'));
          // Add 'selected' class to the clicked option
          option.classList.add('selected');
      });
  });
});
function toggleHeart() {
    const heartIcon = document.getElementById("heart-icon");
    
    // Toggle the "liked" class to change the color
    heartIcon.classList.toggle("liked");
    
    // Add the "animate" class to trigger the animation
    heartIcon.classList.add("animate");

    // Remove the "animate" class after the animation completes
    setTimeout(() => {
        heartIcon.classList.remove("animate");
    }, 300); // Duration should match animation duration in CSS
}


        </script>
    </body>
</html>
