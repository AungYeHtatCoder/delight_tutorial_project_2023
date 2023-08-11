@extends('layouts.admin_app')
@section('styles')
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/js/gallery/photo-swipe/photoswipe.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/js/gallery/photo-swipe/default-skin/default-skin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_app/app-assets/css/pages/gallery.css') }}">
@endsection
@section('content')
<div class="content-header row">
 <div class="content-header-light col-12">
  <div class="row">
   <div class="content-header-left col-md-9 col-12 mb-2">
    <h3 class="content-header-title">Responsive Motion Video</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
       </li>
       <li class="breadcrumb-item"><a href="#">DataTables</a>
       </li>
       <li class="breadcrumb-item active">Motion Video
       </li>
      </ol>
     </div>
    </div>
   </div>
   <div class="content-header-right col-md-3 col-12">
    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
     <button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1"
      type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
     <div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a
       class="dropdown-item" href="material-component-cards.html"> Cards</a><a class="dropdown-item"
       href="component-progress.html"> Progress</a>
      <div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="content-overlay"></div>
<!-- Description -->
<section id="description" class="card">
 <div class="card-header">
  <h4 class="card-title">Description</h4>
  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
  <div class="heading-elements">
   <ul class="list-inline mb-0">
    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
    <li><a data-action="close"><i class="ft-x"></i></a></li>
   </ul>
  </div>
 </div>
 <div class="card-content">
  <div class="card-body">
   <div class="card-text">
    <p>Image gallery grid with photo-swipe integration. Display images in 4-2-1 columns and photo-swipe provides gallery
     features.</p>
    <p>Please read the photo-swipe gallery <a href="http://photoswipe.com/documentation/getting-started.html"
      target="_blank">documentation</a> for usage information.</p>
   </div>
  </div>
 </div>
</section>
<!--/ Description -->

<!-- Image grid -->
<section id="image-gallery" class="card">
 <div class="card-header">
  <h4 class="card-title">Image gallery</h4>
  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
  <div class="heading-elements">
   <ul class="list-inline mb-0">
    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
    <li><a data-action="close"><i class="ft-x"></i></a></li>
   </ul>
  </div>
 </div>
 <div class="card-content collapse show">
  <div class="card-body">
   <div class="card-text">
    <p>Image gallery grid with photo-swipe integration. Display images gallery in 4-2-1 columns and photo-swipe provides
     gallery features.</p>
   </div>
  </div>
  <div class="card-body  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
   <div class="row">
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="{{ asset('admin_app/app-assets/images/gallery/1.jpg') }}" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/1.jpg" itemprop="thumbnail"
       alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="{{ asset('admin_app/app-assets/images/gallery/2.jpg') }}" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="{{ asset('admin_app/app-assets/images/gallery/2.jpg') }}"
       itemprop="thumbnail" alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="{{ asset('admin_app/app-assets/images/gallery/3.jpg') }}" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="{{ asset('admin_app/app-assets/images/gallery/3.jpg') }}"
       itemprop="thumbnail" alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="{{ asset('admin_app/app-assets/images/gallery/4.jpg') }}" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="{{ asset('admin_app/app-assets/images/gallery/4.jpg') }}"
       itemprop="thumbnail" alt="Image description" />
     </a>
    </figure>
   </div>
   <div class="row">
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="{{ asset('asset/app-assets/images/gallery/5.jpg') }}" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="{{ asset('asset/app-assets/images/gallery/5.jpg') }}"
       itemprop="thumbnail" alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="{{ asset('asset/app-assets/images/gallery/6.jpg') }}" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="{{ asset('admin_app/app-assets/images/gallery/6.jpg')}}"
       itemprop="thumbnail" alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="{{ asset('admin_app/app-assets/images/gallery/7.jpg')}}" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="{{ asset('admin_app/app-assets/images/gallery/7.jpg')}}"
       itemprop="thumbnail" alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="../../../app-assets/images/gallery/8.jpg" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/8.jpg" itemprop="thumbnail"
       alt="Image description" />
     </a>
    </figure>
   </div>
   <div class="row">
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="../../../app-assets/images/gallery/9.jpg" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/9.jpg" itemprop="thumbnail"
       alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="../../../app-assets/images/gallery/10.jpg" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/10.jpg" itemprop="thumbnail"
       alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="../../../app-assets/images/gallery/11.jpg" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/11.jpg" itemprop="thumbnail"
       alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="../../../app-assets/images/gallery/12.jpg" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/12.jpg" itemprop="thumbnail"
       alt="Image description" />
     </a>
    </figure>
   </div>
   <div class="row">
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="../../../app-assets/images/gallery/13.jpg" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/13.jpg" itemprop="thumbnail"
       alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="../../../app-assets/images/gallery/14.jpg" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/14.jpg" itemprop="thumbnail"
       alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="../../../app-assets/images/gallery/15.jpg" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/15.jpg" itemprop="thumbnail"
       alt="Image description" />
     </a>
    </figure>
    <figure class="col-lg-3 col-md-6 col-12" itemprop="associatedMedia" itemscope
     itemtype="http://schema.org/ImageObject">
     <a href="../../../app-assets/images/gallery/16.jpg" itemprop="contentUrl" data-size="480x360">
      <img class="img-thumbnail img-fluid" src="../../../app-assets/images/gallery/16.jpg" itemprop="thumbnail"
       alt="Image description" />
     </a>
    </figure>
   </div>
  </div>
  <!--/ Image grid -->

  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

   <!-- Background of PhotoSwipe. 
             It's a separate element as animating opacity is faster than rgba(). -->
   <div class="pswp__bg"></div>

   <!-- Slides wrapper with overflow:hidden. -->
   <div class="pswp__scroll-wrap">

    <!-- Container that holds slides. 
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->
    <div class="pswp__container">
     <div class="pswp__item"></div>
     <div class="pswp__item"></div>
     <div class="pswp__item"></div>
    </div>

    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
    <div class="pswp__ui pswp__ui--hidden">

     <div class="pswp__top-bar">

      <!--  Controls are self-explanatory. Order can be changed. -->

      <div class="pswp__counter"></div>

      <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

      <button class="pswp__button pswp__button--share" title="Share"></button>

      <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

      <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

      <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
      <!-- element will get class pswp__preloader-active when preloader is running -->
      <div class="pswp__preloader">
       <div class="pswp__preloader__icn">
        <div class="pswp__preloader__cut">
         <div class="pswp__preloader__donut"></div>
        </div>
       </div>
      </div>
     </div>

     <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
      <div class="pswp__share-tooltip"></div>
     </div>

     <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
     </button>

     <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
     </button>

     <div class="pswp__caption">
      <div class="pswp__caption__center"></div>
     </div>

    </div>

   </div>
  </div>
 </div>
 <!--/ PhotoSwipe -->
</section>
<!--/ Image grid -->

<!-- Video grid -->
<section id="video-gallery" class="card">
 <div class="card-header">
  <h4 class="card-title">Video gallery</h4>
  <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
  <div class="heading-elements">
   <ul class="list-inline mb-0">
    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
    <li><a data-action="close"><i class="ft-x"></i></a></li>
   </ul>
  </div>
 </div>
 <div class="card-content collapse show">
  <div class="card-body">
   <div class="card-text">
    <p>This section contain responsive embedded video gallery with grid 4-2-1 columns This demo contain vimeo and
     youtube embedded videos.</p>
   </div>
  </div>
  <div class="card-body">
   <h5 class="card-header">Vimeo</h5>
   <div class="row">
    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail" src="https://player.vimeo.com/video/300765332?title=0&byline=0" width="640"
       height="360"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail" src="https://player.vimeo.com/video/173140629?color=ff9933&title=0&byline=0"
       width="640" height="360"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail" src="https://player.vimeo.com/video/174099316?color=ff9933&title=0&byline=0"
       width="640" height="360"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail" src="https://player.vimeo.com/video/173139879?color=ff9933&title=0&byline=0"
       width="640" height="360"></iframe>
     </div>
    </div>
   </div>

   <div class="row">

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail" src="https://player.vimeo.com/video/118589137?title=0&byline=0" width="640"
       height="360"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail" src="https://player.vimeo.com/video/173541384?color=ff9933&title=0&byline=0"
       width="640" height="360"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail" src="https://player.vimeo.com/video/161753790?color=ff9933&title=0&byline=0"
       width="640" height="360"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail" src="https://player.vimeo.com/video/174960004?color=ff9933&title=0&byline=0"
       width="640" height="360"></iframe>
     </div>
    </div>
   </div>

  </div>

  <div class="card-body">
   <h5 class="card-header">You Tube</h5>
   <div class="row">
    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail"
       src="https://www.youtube.com/embed/SsE5U7ta9Lw?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail"
       src="https://www.youtube.com/embed/zqDxfHvZ3DU?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail"
       src="https://www.youtube.com/embed/hunYLg8I1Os?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail"
       src="https://www.youtube.com/embed/yXootGU_8Ns?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
     </div>
    </div>
   </div>

   <div class="row">
    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail"
       src="https://www.youtube.com/embed/_-zawfC3s9M?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail"
       src="https://www.youtube.com/embed/RcrLLooXgSY?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail"
       src="https://www.youtube.com/embed/_V4if9Weopk?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
     </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
     <div class="embed-responsive embed-responsive-item embed-responsive-16by9">
      <iframe class="img-thumbnail"
       src="https://www.youtube.com/embed/icMTTP7-q9A?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
<!-- Video grid -->
@endsection

@section('scripts')
<script src="{{ asset('admin_app/app-assets/vendors/js/gallery/masonry/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/gallery/photo-swipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js') }}"></script>

<script src="{{ asset('admin_app/app-assets/js/scripts/gallery/photo-swipe/photoswipe-script.js') }}"></script>
@endsection