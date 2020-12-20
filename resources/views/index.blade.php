@include('includes/header_start')

<link rel="stylesheet" href="assets/css/style.css">

@include('includes/header_end')

<body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <header class="site-navbar py-3 border-bottom fixed" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Diphideo</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="#gallery">Home</a></li>

                <!--<li class="has-children">
                  <a href="#gallery">Gallery</a>
                  <ul class="dropdown">
                    <li><a href="#">Nature</a></li>
                    <li><a href="#">Portrait</a></li>
                    <li><a href="#">People</a></li>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Animals</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Travel</a></li>
                    <li class="has-children">
                      <a href="#">Sub Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>-->

                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}"><button class="btn btn-success">TRY IT NOW</button></a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  <!--Slider-->
  <div id="gallery" class="site-section" data-aos="fade">
    <div class="container-fluid" data-aos="fade" data-aos-delay="500">
      <div class="row mb-5 mt-5">
          <div class="col-12 ">
            <h2 class="site-section-heading text-center">Demo Galleries</h2>
          </div>
        </div>
      <div class="swiper-container images-carousel">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="image-wrap">
                  <div class="image-info">
                    <h2 class="mb-3">Nature</h2>
                    <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                  </div>
                  <img src="images/img_1.jpg" alt="Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="image-wrap">
                  <div class="image-info">
                    <h2 class="mb-3">Portrait</h2>
                    <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                  </div>
                  <img src="images/img_2.jpg" alt="Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="image-wrap">
                  <div class="image-info">
                    <h2 class="mb-3">People</h2>
                    <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                  </div>
                  <img src="images/img_3.jpg" alt="Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="image-wrap">
                  <div class="image-info">
                    <h2 class="mb-3">Architecture</h2>
                    <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                  </div>
                  <img src="images/img_4.jpg" alt="Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="image-wrap">
                  <div class="image-info">
                    <h2 class="mb-3">Animals</h2>
                    <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                  </div>
                  <img src="images/img_5.jpg" alt="Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="image-wrap">
                  <div class="image-info">
                    <h2 class="mb-3">Sports</h2>
                    <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                  </div>
                  <img src="images/img_6.jpg" alt="Image">
                </div>
              </div>
              <div class="swiper-slide">
                <div class="image-wrap">
                  <div class="image-info">
                    <h2 class="mb-3">Travel</h2>
                    <a href="single.html" class="btn btn-outline-white py-2 px-4">More Photos</a>
                  </div>
                  <img src="images/img_7.jpg" alt="Image">
                </div>
              </div>
          </div>

          <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-scrollbar"></div>
      </div>
    </div>
  </div>

<!--Services-->
  <div id="services" class="site-section"  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Our Services</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
              <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                <span class="icon flaticon-camera display-3 text-primary mb-4 d-block"></span>
                <h3 class="text-black h4">Camera</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
                <p><strong class="font-weight-bold text-primary">$29</strong></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
              <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                <span class="icon flaticon-picture display-3 text-primary mb-4 d-block"></span>
                <h3 class="text-black h4">Wedding Photography</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
                <p><strong class="font-weight-bold text-primary">$46</strong></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
              <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                <span class="icon flaticon-sheep display-3 text-primary mb-4 d-block"></span>
                <h3 class="text-black h4">Animal</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
                <p><strong class="font-weight-bold text-primary">$24</strong></p>
              </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
              <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                <span class="icon flaticon-frame display-3 text-primary mb-4 d-block"></span>
                <h3 class="text-black h4">Portrait</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
                <p><strong class="font-weight-bold text-primary">$40</strong></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
              <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                <span class="icon flaticon-eiffel-tower display-3 text-primary mb-4 d-block"></span>
                <h3 class="text-black h4">Travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
                <p><strong class="font-weight-bold text-primary">$35</strong></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
              <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                <span class="icon flaticon-video-play display-3 text-primary mb-4 d-block"></span>
                <h3 class="text-black h4">Video Editing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
                <p><strong class="font-weight-bold text-primary">$15</strong></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

<!--About-->
   <div id="about" class="site-section"  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">About Us</h2>
            </div>
          </div>

          <div class="row mb-5">
            <div class="col-md-7">
              <img src="assets/images/img_2.jpg" alt="Images" class="img-fluid">
            </div>
            <div class="col-md-4 ml-auto">
              <h3>Our Mission</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus vel tenetur explicabo necessitatibus, ad soluta consectetur illo qui voluptatem. Quis soluta maiores eum. Iste modi voluptatum in repudiandae fugiat suscipit dolorum harum, porro voluptate quis? Alias repudiandae dicta doloremque voluptates soluta repellendus, unde laborum quo nam, ullam facere voluptatem similique.</p>
            </div>
          </div>

         
          <div class="row site-section">
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
              <img src="assets/images/person_1.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
              <h2 class="text-black font-weight-light mb-4">Jean Smith</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
              <p>
                <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
              </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
              <img src="assets/images/person_2.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
              <h2 class="text-black font-weight-light mb-4">Claire Smith</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
              <p>
                <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
              </p>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
              <img src="assets/images/person_4.jpg" alt="Image" class="img-fluid w-50 rounded-circle mb-4">
              <h2 class="text-black font-weight-light mb-4">John Smith</h2>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ab quas facilis obcaecati non ea, est odit repellat distinctio incidunt, quia aliquam eveniet quod deleniti impedit sapiente atque tenetur porro?</p>
              <p>
                <a href="#" class="pl-0 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
              </p>
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </div>

  <!--Contact-->
  <div id="contact" class="site-section" data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Contact Us</h2>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8 mb-5">
              <form action="#">
               

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" id="email" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  
                  <div class="col-md-12">
                    <label class="text-black" for="subject">Subject</label> 
                    <input type="subject" id="subject" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Message</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                  </div>
                </div>

    
              </form>
            </div>
            <div class="col-lg-3 ml-auto">
              <div class="mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Address</p>
                <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0"><a href="#">youremail@domain.com</a></p>

              </div>
              
            </div>
          </div>
        </div>
    
      </div>
    </div>
  </div>

@include('includes/footer_start')

@include('includes/footer_end')