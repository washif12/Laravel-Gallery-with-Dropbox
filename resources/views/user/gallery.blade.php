@include('includes/header_start')

<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/style-user.css">

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
    



    <!--<header class="site-navbar py-3 border-bottom fixed" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Diphideo</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="#gallery">Home</a></li>

                <li class="has-children">
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
                </li>

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
      
    </header>-->

  <div class="site-section"  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">{{$gallery->gallery}}</h2>
            </div>
          </div>
        </div>
    
      </div>
      <div class="row" id="lightgallery">
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{URL::to('/')}}/images/big-images/nature_big_1.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
          <a href="#"><img src="{{URL::to('/')}}/{{$gallery->path}}/nature_small_1.jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{URL::to('/')}}/{{URL::to('/')}}/images/big-images/nature_big_2.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis quaerat molestiae, praesentium. Ipsam, reiciendis. Aut molestiae animi earum laudantium.</p>">
          <a href="#"><img src="{{URL::to('/')}}/{{$gallery->path}}/nature_small_2.jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{URL::to('/')}}/images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis, dolorum illo temporibus culpa eaque dolore rerum quod voluptate doloribus.</p>">
          <a href="#"><img src="{{URL::to('/')}}/{{$gallery->path}}/nature_small_3.jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{URL::to('/')}}/{{URL::to('/')}}/images/big-images/nature_big_4.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perferendis quae iusto omnis praesentium labore tempore eligendi quo corporis sapiente.</p>">
          <a href="#"><img src="{{URL::to('/')}}/{{$gallery->path}}/nature_small_4.jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{URL::to('/')}}/images/big-images/nature_big_5.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, voluptatum voluptate tempore aliquam, dolorem distinctio. In quas maiores tenetur sequi.</p>">
          <a href="#"><img src="{{URL::to('/')}}/{{$gallery->path}}/nature_small_5.jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{URL::to('/')}}/images/big-images/nature_big_6.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum cum culpa blanditiis illum, voluptatum iusto quisquam mollitia debitis quaerat maiores?</p>">
          <a href="#"><img src="{{URL::to('/')}}/{{$gallery->path}}/nature_small_6.jpg" alt="IMage" class="img-fluid"></a>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{URL::to('/')}}/images/big-images/nature_big_7.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores similique impedit possimus, laboriosam enim at placeat nihil voluptatibus voluptate hic!</p>">
          <a href="#"><img src="{{URL::to('/')}}/{{$gallery->path}}/nature_small_7.jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{URL::to('/')}}/images/big-images/nature_big_8.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam vitae sed cum mollitia itaque soluta laboriosam eaque sit ratione, aliquid.</p>">
          <a href="#"><img src="{{URL::to('/')}}/{{$gallery->path}}/nature_small_8.jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{URL::to('/')}}/images/big-images/nature_big_9.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis debitis beatae facilis quos, enim quis nobis magnam architecto earum!</p>">
          <a href="#"><img src="{{URL::to('/')}}/{{$gallery->path}}/nature_small_9.jpg" alt="{{URL::to('/')}}/IMage" class="img-fluid"></a>
        </div>

      </div>
    </div>
  </div>

@include('includes/footer_start')

@include('includes/footer_end')