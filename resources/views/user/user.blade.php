@include('includes/header_start')

<link rel="stylesheet" href="assets/css/style-user.css">

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
    



    <header class="site-navbar py-3" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.html" class="text h2 mb-0">Hello {{ Auth::user()->name }}</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="user.html">Home</a></li>
                <li class="has-children">
                  <a href="single.html">Gallery</a>
                  @if(Auth::user()->has_gallery =='1')
                  <ul class="dropdown">
                    @foreach ($gallery as $item)
                    <li><a href="#">{{$item->gallery}}</a></li>
                    @endforeach
                  </ul>
                  @elseif(Auth::user()->has_gallery =='0')
                  <ul class="dropdown">
                    <li>No Galleries</li>
                  </ul>
                  @endif
                </li>
                <li><a href="#">Contact</a></li>
                <li><a data-toggle="modal" data-target=".bs-example-modal-center"><button class="btn btn-success">Create Gallery</button></a></li>
                <li><a href=""><button class="btn btn-success">Update Gallery</button></a></li>
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><button class="btn btn-success">Logout</button></a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </li>
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



  <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
      @if(Auth::user()->has_gallery =='1')
        <div class="swiper-wrapper">
          <a data-toggle="modal" data-target=".bs-example-modal-center" style="cursor: pointer;">
            <div class="swiper-slide">
              <div class="image-wrap" style="border: 2px solid white;">
                <div class="image-info">
                  <h2 class="mb-3"><i class="fa fa-plus-square" aria-hidden="true"></i></h2>
                  <a data-toggle="modal" data-target=".bs-example-modal-center" class="btn btn-outline-white py-2 px-4">Create Gallery</a>
                </div>
                <img src="images/add.png" alt="Image">
              </div>
            </div>
          </a>
          @foreach ($gallery as $item)
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">{{$item->gallery}}</h2>
                  <a href="{{ route('gallery.show', $item->gallery)}}" class="btn btn-outline-white py-2 px-4">See Gallery</a>
                </div>
                <img src="images/img_4.jpg" alt="Image">
              </div>
            </div>
            @endforeach
            <!--<div class="swiper-slide">
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
            </div>-->
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
        @elseif(Auth::user()->has_gallery =='0')
        <div class="swiper-wrapper">
          <a data-toggle="modal" data-target=".bs-example-modal-center" style="cursor: pointer;">
            <div class="swiper-slide">
              <div class="image-wrap" style="border: 2px solid white;">
                <div class="image-info">
                  <h2 class="mb-3"><i class="fa fa-plus-square" aria-hidden="true"></i></h2>
                  <a data-toggle="modal" data-target=".bs-example-modal-center" class="btn btn-outline-white py-2 px-4">Create Gallery</a>
                </div>
                <img src="images/add.png" alt="Image">
              </div>
            </div>
          </a>
        </div>
        @endif
    </div>
  </div>

<div class="footer py-4">
    <div class="container-fluid text-center">
      <p>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> Cor2Tect. All rights reserved.
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
    </div>
  </div>

    

    
    
  </div>

  <!-- Modal -->
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Create New Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="m-b-30">
                    <form method="POST" action="{{ route('upload.store') }}">
                        @csrf
                       <div class="form-group">
                          <label>Gallery Name</label>
                          <input id="gallery" type="text" class="form-control" name="gallery" required autofocus>
                          <input id="email" type="hidden" class="form-control" name="email" value="{{Auth::user()->email}}">
                       </div>
                       <div class="form-group">
                          <button class="btn btn-dark" type="submit">Create</button>
                       </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/js/swiper.min.js"></script>
  <script src="assets/js/aos.js"></script>

  <script src="assets/js/picturefill.min.js"></script>
  <script src="assets/js/lightgallery-all.min.js"></script>
  <script src="assets/js/jquery.mousewheel.min.js"></script>

@include('includes/footer_end')