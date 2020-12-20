@include('includes/header_start')

<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/style-user.css">
<link rel="stylesheet" href="{{URL::to('/')}}/assets/dropzone/dist/min/dropzone.min.css">

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
              <h2 class="site-section-heading text-center">Upload in {{$gallery->gallery}}</h2>
            </div>
            <div class="col-3" style="text-align: right;">
            </div>
          </div>
        </div>
        <div class="col-md-10"  style="text-align: center;">
          <div class="mb-5">
            @if(Session::has('message'))
          	<h2 class="text text-white h2 mb-0">{{Session::get('message')}}</h2>
            @endif
            <br>
          	<form method="get" action="{{route('uploadImage', $gallery->gallery)}}" class='dropzone'>
              @method('get')
              {{ csrf_field() }}
              <div class="dz-message needsclick">    
                  Drop files here or click to upload
              </div>
            </form><br>
            <a class="text" href="{{route('uploadImage', $gallery->gallery)}}" id="uploadfiles"><button class="btn btn-lg btn-success">Upload</button></a>
          </div>
        </div>
    
      </div>
    </div>
  </div>

@include('includes/footer_start')
<script src="{{URL::to('/')}}/assets/dropzone/dist/min/dropzone.min.js"></script>
@include('includes/footer_end')