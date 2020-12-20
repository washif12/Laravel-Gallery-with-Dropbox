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

  <div class="site-section"  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        
        <div class="col-md-12">
          <div class="row mb-5">
            <div class="col-3" style="text-align: left;">
              <a class="text" href="{{route('dropbox')}}"><h5 class="site-section-heading"><span class="fa fa-arrow-left"></span></h5></a>
            </div>
            <div class="col-6">
              <h2 class="site-section-heading text-center">{{$gallery->gallery}}</h2>
            </div>
            <div class="col-3" style="text-align: right;">
              @if($gallery->links_created == '0')
              <a class="text" href="{{route('createlink', $gallery->gallery)}}"><button class="btn btn-success">Create Link</button></a>
              @elseif($gallery->links_created == '1')
              <a class="text"><button class="btn btn-danger" disabled="disabled">Links Created</button></a>
              @endif
            </div>
          </div>
        </div>
        @if(Session::has('status'))
        <div class="col-md-12"  style="text-align: center;">
          <div class="mb-5">
            <h2 class="text text-success h2 mb-0">{{Session::get('status')}}</h2>
          </div>
        </div>
        @endif
        <div class="col-md-12"  style="text-align: center;">
          <div class="mb-5">
            <a class="text" href="{{route('toUpload', $gallery->gallery)}}"><button class="btn btn-lg btn-success">Upload</button></a>
          </div>
        </div>
    
      </div>
      <div class="row" id="lightgallery">
        @if(!empty($links))
        @foreach ($links as $item)
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="<?php echo $item['link']; ?>" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
          <a href="#"><img src="<?php echo $item['link']; ?>" alt="IMage" class="img-fluid"></a>
        </div>
        @endforeach
        @else
        <div class="col-12"  style="text-align: center;">
          <h2 class="text text-white h2 mb-0">Sorry! No Images in this gallery.</h2>
        </div>
        @endif
        <!--<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="{{URL::to('/')}}/{{URL::to('/')}}/images/big-images/nature_big_2.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis quaerat molestiae, praesentium. Ipsam, reiciendis. Aut molestiae animi earum laudantium.</p>">
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
        </div>-->

      </div>
    </div>
  </div>

@include('includes/footer_start')

@include('includes/footer_end')