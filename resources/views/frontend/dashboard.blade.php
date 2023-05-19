@extends('frontend.layouts.index')

@section('mainpart')



@include('frontend.includes.deal')

<div class="container">
<div class="row imgbnr">
     <div class="col-sm-6 col-xs-12">
     <div class="beffect">
                         <a href="#">
             <img src="{{ asset('frontend/image/cache/catalog/img-banner/imgbanner-1-660x300.jpg')}}" alt="Img Banner1" class="img-responsive center-block">
             </a>
                     </div>
 </div>
     <div class="col-sm-6 col-xs-12">
     <div class="beffect">
                         <a href="#">
             <img src="{{ asset('frontend/image/cache/catalog/img-banner/imgbanner-2-660x300.jpg')}}" alt="Img Banner2" class="img-responsive center-block">
             </a>
                     </div>
 </div>
 </div>
</div>
<div class="pro-img">
<div class="tab-content container protabcont">
 <div class="tab-head">
   <h1 class="heading  text-center"><strong>add top product to weekly line top</strong><span>top product</span><span class="head-svg"><svg><use xlink:href="#hsvg"></use></svg></span></h1>

 </div>
  @php
   $category =  App\Models\Admin\Category::where('status','active')->latest()->get();
 @endphp

   


       @php
       $products =  App\Models\Admin\Product::where('status','active')->latest()->get();
     @endphp   
     
     @foreach ($products as $item )
    <div class="product-layout col-xs-3 cless">
       <div class="product-thumb transition">
         <div class="image"><a href="{{ route('productdetails',$item->id) }}"><img src="{{ asset($item->photo) }}" alt="Samsung Galaxy Tab 10.1" title="Samsung Galaxy Tab 10.1" class="img-responsive center-block"></a>
             <!-- Images Start -->
                                                
                             
          
         </div>
   
         <div class="caption text-center">
   
          <div class="bran">
                   <span>{{ $item->category->category_name }} , {{ $item->subcategory->subcategory_name }}</span>
          </div>
                   <h4 class="protitle"><a href="{{ route('productdetails',$item->id) }}">{{ $item->product_name }}</a></h4>
   
   
                                         <div class="discount">$ {{ $item->discount }} </div>
                       <div class="price">
                           <span data-update='price-43' class="price">${{ $item->price }}</span>
                                       <span class="price-tax">Ex Tax:</span>
               <span data-update='price-tax-43' class="price-tax">$500.00</span>
                         </div>
                   
                       <div class="webi-main custom-radio">
          <div class="form-group homeaddq">
             <div class="homeqt">
               <button type="button" onclick="qty.minus('43')" class="form-control pull-left btn-number btnminus dis-43" disabled="disabled">
                 <span class="glyphicon glyphicon-minus"></span>
               </button>
               <input name="quantity" class="addhqty" type="text" value="1" size="2" min="1" max="999" id="input-quantity-43" class="form-control input-number pull-left">
               <button type="button" onclick="qty.plus('43')" class="form-control pull-left btn-number btnplus">
                 <span class="glyphicon glyphicon-plus"></span>
               </button>
             </div>
             <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
           </div>
           
          
         </div>
            <div class="button-group">
                     <input type="hidden" name="product_id" value="43">
         <button type="button" class="cartb add-to-cart webi-cart" data-toggle="tooltip" title="add to cart"><svg><use xlink:href="#pcart"></use></svg></button>
             <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><svg><use xlink:href="#heart"></use></svg></button>
         <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('43');"><svg><use xlink:href="#compare"></use></svg></button>
         <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
     </div>
   
         </div>
   
       </div>
 </div>
   
 @endforeach  

    
   

</div>
</div>
<script type="text/javascript">
(function($){
 $("#latest").owlCarousel({
 itemsCustom : [
 [0, 1],
 [320, 2],
 [600, 3],
 [992, 3],
 [1200, 4],
 [1410, 4]
 ],
   // autoPlay: 1000,
    navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
   navigation : true,
   pagination:false
 });
  }(jQuery));
</script>




 
      <div class="bannerser" style="background-image: url('{{ asset('frontend/image/cache/catalog/banner-service/banner-service-1920x900.jpg') }}');">
                 

 <div class="container">
     <div class="imgbnrtext">
         <h5>Natural Product</h5>
<h1>save 40% Off</h1>

         <a href="#" class="btn btn-primary">Read more</a>
     </div>
 </div>
 </div> 

<div>
<div class="container">
     <div class="row deliveryinfo text-xs-center">
     <div class="col-sm-4 col-xs-12 sbr">
     <ul class="list-unstyled">
     <li><span><svg><use xlink:href="#gift"></use></svg></span></li>
     <li class="text-xs-left">
     <h4>24/7 free support</h4>
     <p>Passage of Lorem Ipsum, you need to be amet embarrassing.</p>
     </li>
     </ul>
     </div>
     <div class="col-sm-4 col-xs-12 sbr">
     <ul class="list-unstyled">
     <li><span><svg><use xlink:href="#pay"></use></svg></span></li>
     <li class="text-xs-left">
     <h4>Free worldwide shipping</h4>
     <p>Passage of Lorem Ipsum, you need to be amet embarrassing.</p>
     </li>
     </ul>
     </div>
     <div class="col-sm-4 col-xs-12 sbr">
     <ul class="list-unstyled">
     <li><span><svg><use xlink:href="#support"></use></svg></span></li>
     <li class="text-xs-left">
     <h4>money back guarantee</h4>
     <p>Passage of Lorem Ipsum, you need to be amet embarrassing.</p>
     </li>
     </ul>
     </div>
     </div>
</div>
</div>

<script type="text/javascript">
(function($){
$("#testi").owlCarousel({
 itemsCustom : [
 [0, 1],
 [992, 2]
 ],
   autoPlay: false,
   navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
   navigation : false,
   pagination:true
 });
 }(jQuery));

</script>
<div class="off-img">
 <div class="offbg container">
 <div class="offrow row rless">
 <div class="offerbanner">
                             <div class="col-sm-6 col-xs-12 beffect offbanner cless">
                                     <a href="#">
                         <img src="{{ asset('frontend/image/cache/catalog/Offerbanner/1-660x300.jpg')}}" alt="banner" class="img-responsive">
                     </a>
                                 </div>
                             <div class="col-sm-6 col-xs-12 beffect offbanner cless">
                                     <a href="#">
                         <img src="{{ asset('frontend/image/cache/catalog/Offerbanner/2-660x300.jpg')}}" alt="banner" class="img-responsive">
                     </a>
                                 </div>
             </div>
 </div>
 </div>
</div>
<div class="catt-bg">
 <div class="container">
     <div class="category-tab tabpro next-prevb">
         <h1 class="heading text-center"><strong>add Category Product</strong><span>categotie product</span><span class="head-svg"><svg><use xlink:href="#hsvg"></use></svg></span></h1>
         <button type="button" class="toggle collapsed catb" data-toggle="collapse" data-target="#cat_tab"></button>
         <!--category-tab-->
             <div class="cattab_bg">
               @php

                 $categories = App\Models\Admin\Category::where('status','active')->latest()->get();

               @endphp
                 <div class="row">
                     <div class="cat-tab">
                         <div class="col-xs-12 home-cat  footer-collapse" id="cat_tab">
                             <ul class="nav nav-tabs">
                         <div id="catli" class="owl-theme owl-carousel">
                                                                               @foreach ($categories as $item )
                                                                               <li class="webTab"><a href="#tab-{{ $item->id }}" data-toggle="tab"> {{ $item->category_name }}</a></li>
                                                                                
                                                                               @endforeach
                                                                                
                                 </div>
                             </ul>
                         </div>


                         <div class="tab-content col-xs-12">
                                 
                              <div class="tab-pane fade active in" id="tab-1">
                                 <div class="rless">
                                         <div id="cattab"> 
                                           @php
                                             $products =  App\Models\Admin\Product::where('status','active')->latest()->get();
                                           @endphp   
                                           
                                           @foreach ($products as $item )
                                             
                                    
                                             <div  class="product-layout  col-xs-12 cless ">
                                                 <div class="product-thumb transition">
                                                 <div class="image col-xs-5"><a href="index.php-24.html?route=product/product&amp;product_id=42"><img height="400px;" src="{{ asset($item->photo) }}" alt="Apple Cinema 30&quot;" title="{{ $item->product_name }}&quot;" class="img-responsive center-block"></a>
                                                     <!-- Webiarch Images Start -->
                                                                             
                                                     <!-- End -->
                                                                         
                                                     <div class="form-group homeaddq">
                                                     <div class="homeqt">
                                                         <button type="button" onclick="qty.minus('42')" class="form-control pull-left btn-number btnminus dis-42" disabled="disabled">
                                                         <span class="glyphicon glyphicon-minus"></span>
                                                         </button>
                                                         <input class="addhqty" type="text" value="1" size="2" min="1" max="999" id="input-quantity-42" class="form-control input-number pull-left">
                                                         <button type="button" onclick="qty.plus('42')" class="form-control pull-left btn-number btnplus">
                                                         <span class="glyphicon glyphicon-plus"></span>
                                                         </button>
                                                     </div>
                                                     <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                                     </div>
                                                 </div>
                                                 <div class="caption col-xs-7 text-left">
                                                     <div class="bran">
                                                             <span>{{ $item->category_name }}, {{ $item->subcategory->subcategory_name }}</span>
                                                     </div>
                                                             <h4 class="protitle"><a href="index.php-24.html?route=product/product&amp;product_id=42">{{ $item->product_name }}&quot;</a></h4>

                                                             
                                                                 <p class="price">${{ $item->price }}</p>
                                                             
                                                     <div class="button-group">
                                                     <button class="cartb add-to-cart" type="button" data-toggle="tooltip" title="add to cart" onclick="qty.cart('42')">
                                                         <svg><use xlink:href="#pcart"></use></svg>
                                                     </button>
                                                     <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><svg><use xlink:href="#heart"></use></svg></button>
                                                     <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><svg><use xlink:href="#compare"></use></svg></button>
                                                     <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                                 </div>
                                                 
                                                 </div>
                                                 </div>
                                             </div>
                                           @endforeach
                                         

                                     </div>
                                 </div>
                             </div>
                                   @foreach ($categories as $item )
                                           @php
                                             $products =  App\Models\Admin\Product::where('status','active')->where('category_id',$item->id)->latest()->get();
                                           @endphp   

                                  <div class="tab-pane fade" id="tab-{{ $item->id }}">
                                         <div class="rless">
                                         <div id="cattab">


                                           @foreach ($products as $item )
                                           <div class="product-layout col-xs-12 cless">
                                             <div class="product-thumb transition">
                                             <div class="image col-xs-5"><a href="index.php-24.html?route=product/product&amp;product_id=42"><img src="{{ asset($item->photo) }}" alt="{{ $item->product_name }}&quot; " title="{{ $item->product_name }}&quot; " class="img-responsive center-block"></a>
                                                 <!-- Webiarch Images Start -->
                                                                         
                                                 <!-- End -->
                                                                     
                                                 <div class="form-group homeaddq">
                                                 <div class="homeqt">
                                                     <button type="button" onclick="qty.minus('42')" class="form-control pull-left btn-number btnminus dis-42" disabled="disabled">
                                                     <span class="glyphicon glyphicon-minus"></span>
                                                     </button>
                                                     <input class="addhqty" type="text" value="1" size="2" min="1" max="999" id="input-quantity-42" class="form-control input-number pull-left">
                                                     <button type="button" onclick="qty.plus('42')" class="form-control pull-left btn-number btnplus">
                                                     <span class="glyphicon glyphicon-plus"></span>
                                                     </button>
                                                 </div>
                                                 <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                                 </div>
                                             </div>
                                             <div class="caption col-xs-7 text-left">
                                                 <div class="bran">
                                                         <span>{{ $item->category_name }}, {{ $item->subcategory->subcategory_name }}</span>
                                                 </div>
                                                 <h4 class="protitle"><a href="index.php-24.html?route=product/product&amp;product_id=42">{{ $item->product_name }}&quot;</a></h4>

                                                         
                                                             <p class="price">${{ $item->price }}</p>
                                                         
                                                 <div class="button-group">
                                                 <button class="cartb add-to-cart" type="button" data-toggle="tooltip" title="add to cart" onclick="qty.cart('42')">
                                                     <svg><use xlink:href="#pcart"></use></svg>
                                                 </button>
                                                 <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><svg><use xlink:href="#heart"></use></svg></button>
                                                 <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><svg><use xlink:href="#compare"></use></svg></button>
                                                 <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                                             </div>
                                             
                                             </div>
                                             </div>
                                         </div>  
                                           @endforeach
                                                 

                                             </div>
                                         </div>
                                 </div>
                                   
                                 @endforeach
                           

                         </div>
                 </div>
             </div>
             </div>
   </div>
</div>
</div>
<!--/category-tab-->

<script type="text/javascript">
 $(document).ready(function() {
    $('.tab-content .tab-pane #cattab').slick({
dots: false,
arrows: true,
slidesToShow: 3,
slidesToScroll: 1,
autoplay: false,
autoplaySpeed: 2000,
rows: 2,
responsive: [
 {
   breakpoint: 1590,
   settings: {
     slidesToShow: 3
   }
 },
 {
   breakpoint: 1200,
   settings: {
     slidesToShow: 2
   }
 },
 {
   breakpoint: 991,
   settings: {
     slidesToShow: 2
   }
 },
 {
   breakpoint: 768,
   settings: {
     slidesToShow: 2
   }
 },
 {
   breakpoint: 600,
   settings: {
     slidesToShow: 1
   }
 },
 {
   breakpoint: 320,
   settings: {
     slidesToShow: 1
   }
 }
]
});
 });

 $(document).ready(function() {
 $("#catli").owlCarousel({
 itemsCustom : [
 [0, 1],
 [320, 2],
 [400, 3],
 [600, 3],
 [768, 4],
 [992, 5],
 [1200, 6],
 [1410, 7],
 [1590, 6]
 ],
   // autoPlay: 1000,
   navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
   navigation : false,
   pagination:false
 });
});

  $(document).ready(function() {
$('.webTab').click(function(){
  $('.webTab').addClass('active');
  $('.webTab').removeClass('active');
});
});
</script>


<div class="webi">
<div class="blog_webi container">
     <h1 class="heading  text-center"><strong>Add latest news to weekly line up</strong><span>Latest Blog</span><span class="head-svg"><svg><use xlink:href="#hsvg"></use></svg></span></h1>
     <div class="box-content">
         <div class="box-product row rless">
             <div id="blog" class="owl-carousel owl-theme">
                <div class="product-block col-xs-12 cless">
                    <div class="blogshadow">
                                                 <div class="blog-left">
                             <div class="webi-blog-image">
                                 <img src="{{ asset('frontend/image/cache/catalog/blog/1-1170x648.jpg') }}" alt="Latest Blog" title="Latest Blog" class="img-responsive">
                                 <div class="blog-post-image-hover"> </div>
                                 <div class="webi_post_hover">
                                     <div class="blog-ic">
                                     <a class="icon zoom" title="Click to view Full Image " href="{{ asset('frontend/image/cache/catalog/blog/1-1170x648.jpg') }}" data-lightbox="example-set"><i class="fa fa-search"></i></a>
                                     <a class="icon readmore_link" title="all blog" href="index.php-37.html?route=information/blogger/blogs"><i class="fa fa-link"></i></a>
                                 </div>
                                 </div>
                             </div>
                             
                         </div>
                                             <div class="blog-right text-center">
                         <h4><a href="index.php-38.html?route=information/blogger&amp;blogger_id=5">Quisque sit amet mi vel quam fringilla porttitor sed vitae ante</a></h4>
                         <div class="date-time blogdt">02 Oct, 2020</div>

                         <!-- <p>Pellentesque faucibus eget sem eget ultrices. Nunc a sem vitae magna pulvinar maximus posuere sed tellus. In vehicula mi nisi. Maecenas faucibus sodal...</p>
                         <a class="read_more" href="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger&amp;blogger_id=5">read more</a>
                          <h5>0 Comments</h5>
                             <div class="view-blog">
                                 <div class="read-more">
                                     <a href="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger&amp;blogger_id=5">
                                         <i class="fa fa-link"></i>read more
                                     </a>
                                 </div>
                             </div> -->

                     </div>
                 </div>
               </div>
               <div class="product-block col-xs-12 cless">
                    <div class="blogshadow">
                                                 <div class="blog-left">
                             <div class="webi-blog-image">
                                 <img src="{{ asset('frontend/image/cache/catalog/blog/2-1170x648.jpg') }}" alt="Latest Blog" title="Latest Blog" class="img-responsive">
                                 <div class="blog-post-image-hover"> </div>
                                 <div class="webi_post_hover">
                                     <div class="blog-ic">
                                     <a class="icon zoom" title="Click to view Full Image " href="{{ asset('frontend/image/cache/catalog/blog/2-1170x648.jpg') }}" data-lightbox="example-set"><i class="fa fa-search"></i></a>
                                     <a class="icon readmore_link" title="all blog" href="index.php-37.html?route=information/blogger/blogs"><i class="fa fa-link"></i></a>
                                 </div>
                                 </div>
                             </div>
                             
                         </div>
                                             <div class="blog-right text-center">
                         <h4><a href="index.php-39.html?route=information/blogger&amp;blogger_id=4">Cras pretium tempor nisl quis rhoncus Suspendisse vehicula</a></h4>
                         <div class="date-time blogdt">02 Oct, 2020</div>

                         <!-- <p>Pellentesque eget sem non diam dapibus sagittis vel sed turpis. Donec vulputate nisl non varius suscipit. Nulla elit libero, condimentum nec mauris si...</p>
                         <a class="read_more" href="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger&amp;blogger_id=4">read more</a>
                          <h5>1 Comments</h5>
                             <div class="view-blog">
                                 <div class="read-more">
                                     <a href="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger&amp;blogger_id=4">
                                         <i class="fa fa-link"></i>read more
                                     </a>
                                 </div>
                             </div> -->

                     </div>
                 </div>
             </div>
             <div class="product-block col-xs-12 cless">
                    <div class="blogshadow">
                                                 <div class="blog-left">
                             <div class="webi-blog-image">
                                 <img src="{{ asset('frontend/image/cache/catalog/blog/3-1170x648.jpg') }}" alt="Latest Blog" title="Latest Blog" class="img-responsive">
                                 <div class="blog-post-image-hover"> </div>
                                 <div class="webi_post_hover">
                                     <div class="blog-ic">
                                     <a class="icon zoom" title="Click to view Full Image " href="{{ asset('frontend/image/cache/catalog/blog/3-1170x648.jpg') }}" data-lightbox="example-set"><i class="fa fa-search"></i></a>
                                     <a class="icon readmore_link" title="all blog" href="index.php-37.html?route=information/blogger/blogs"><i class="fa fa-link"></i></a>
                                 </div>
                                 </div>
                             </div>
                             
                         </div>
                                             <div class="blog-right text-center">
                         <h4><a href="index.php-40.html?route=information/blogger&amp;blogger_id=3">Nam aliquet urna ac nunc varius eleifend Aliquam erat volutpat</a></h4>
                         <div class="date-time blogdt">02 Oct, 2020</div>

                         <!-- <p>Curabitur vitae consequat risus. Nam aliquet urna ac nunc varius eleifend. Aliquam erat volutpat. Integer dignissim sollicitudin purus, ac volutpat ma...</p>
                         <a class="read_more" href="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger&amp;blogger_id=3">read more</a>
                          <h5>0 Comments</h5>
                             <div class="view-blog">
                                 <div class="read-more">
                                     <a href="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger&amp;blogger_id=3">
                                         <i class="fa fa-link"></i>read more
                                     </a>
                                 </div>
                             </div> -->

                     </div>
                 </div>
             </div>
              <div class="product-block col-xs-12 cless">
                    <div class="blogshadow">
                                                 <div class="blog-left">
                             <div class="webi-blog-image">
                                 <img src="{{ asset('frontend/image/cache/catalog/blog/4-1170x648.jpg') }}" alt="Latest Blog" title="Latest Blog" class="img-responsive">
                                 <div class="blog-post-image-hover"> </div>
                                 <div class="webi_post_hover">
                                     <div class="blog-ic">
                                     <a class="icon zoom" title="Click to view Full Image " href="{{ asset('frontend/image/cache/catalog/blog/4-1170x648.jpg') }}" data-lightbox="example-set"><i class="fa fa-search"></i></a>
                                     <a class="icon readmore_link" title="all blog" href="index.php-37.html?route=information/blogger/blogs"><i class="fa fa-link"></i></a>
                                 </div>
                                 </div>
                             </div>
                             
                         </div>
                                             <div class="blog-right text-center">
                         <h4><a href="index.php-41.html?route=information/blogger&amp;blogger_id=2">Nam laoreet tellus laoreet nunc congue commodo</a></h4>
                         <div class="date-time blogdt">02 Oct, 2020</div>

                         <!-- <p>eu auctor nibh venenatis vitae. Quisque facilisis quam non tellus tempor, et viverra velit ultrices.Suspendisse vehicula, est a gravida lobortis, lect...</p>
                         <a class="read_more" href="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger&amp;blogger_id=2">read more</a>
                          <h5>0 Comments</h5>
                             <div class="view-blog">
                                 <div class="read-more">
                                     <a href="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger&amp;blogger_id=2">
                                         <i class="fa fa-link"></i>read more
                                     </a>
                                 </div>
                             </div> -->

                     </div>
                 </div>
             </div>
              <div class="product-block col-xs-12 cless">
                    <div class="blogshadow">
                                                 <div class="blog-left">
                             <div class="webi-blog-image">
                                 <img src="{{ asset('frontend/image/cache/catalog/blog/5-1170x648.jpg') }}" alt="Latest Blog" title="Latest Blog" class="img-responsive">
                                 <div class="blog-post-image-hover"> </div>
                                 <div class="webi_post_hover">
                                     <div class="blog-ic">
                                     <a class="icon zoom" title="Click to view Full Image " href="{{ asset('frontend/image/cache/catalog/blog/5-1170x648.jpg') }}" data-lightbox="example-set"><i class="fa fa-search"></i></a>
                                     <a class="icon readmore_link" title="all blog" href="index.php-37.html?route=information/blogger/blogs"><i class="fa fa-link"></i></a>
                                 </div>
                                 </div>
                             </div>
                             
                         </div>
                                             <div class="blog-right text-center">
                         <h4><a href="index.php-42.html?route=information/blogger&amp;blogger_id=1">Praesent vel purus iaculis consequat ligula ac eleifend ex</a></h4>
                         <div class="date-time blogdt">02 Oct, 2020</div>

                         <!-- <p>Sed ut sollicitudin arcu, vitae sollicitudin lectus. Praesent scelerisque orci in mauris feugiat, nec maximus augue faucibus. Sed lectus urna, maximus...</p>
                         <a class="read_more" href="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger&amp;blogger_id=1">read more</a>
                          <h5>0 Comments</h5>
                             <div class="view-blog">
                                 <div class="read-more">
                                     <a href="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger&amp;blogger_id=1">
                                         <i class="fa fa-link"></i>read more
                                     </a>
                                 </div>
                             </div> -->

                     </div>
                 </div>
             </div>
          </div>
       </div>
   </div>
     <!--  <div class="buttons-see-all text-center">
         <button type="button" onclick="location='https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=information/blogger/blogs';" class="btn btn-primary">See all Blogs</button>
     </div> -->
 </div>
</div>
<script type="text/javascript">
 (function($){
 $("#blog").owlCarousel({
 itemsCustom : [
 [0, 1],
 [600, 2],
 [768, 2],
 [992, 2],
 [1200, 3],
 [1410, 3]
 ],
   // autoPlay: 1000,
   navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
   navigation: true,
   pagination:false
 });
}(jQuery));
</script>

<div class="container">
<div class="row rless logo-slider">
<div id="carousel0" class="owl-carousel owl-theme">
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-7-225x150.png" alt="Starbucks" class="img-responsive center-block"></a></div>
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-6-225x150.png" alt="Disney" class="img-responsive center-block"></a></div>
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-5-225x150.png" alt="Dell" class="img-responsive center-block"></a></div>
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-4-225x150.png" alt="Harley Davidson" class="img-responsive center-block"></a></div>
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-3-225x150.png" alt="Canon" class="img-responsive center-block"></a></div>
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-2-225x150.png" alt="Burger King" class="img-responsive center-block"></a></div>
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-12-225x150.png" alt="Coca Cola" class="img-responsive center-block"></a></div>
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-11-225x150.png" alt="Sony" class="img-responsive center-block"></a></div>
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-10-225x150.png" alt="RedBull" class="img-responsive center-block"></a></div>
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-1-225x150.png" alt="NFL" class="img-responsive center-block"></a></div>
       <div class="text-center col-xs-12 cless"><a href="#"><img src="image/cache/catalog/brands/menufacture-8-225x150.png" alt="Nintendo" class="img-responsive center-block"></a></div>
     </div>
</div>
</div>
<script type="text/javascript">
 (function($){
 $("#carousel0").owlCarousel({
 itemsCustom : [
 [0, 2],
 [320, 2],
 [450, 3],
 [600, 4],
 [700, 5],
 [768, 5],
 [992, 5],
 [1200, 6],
 [1410, 8]
 ],
   autoPlay: 6000,
   loop: true,
   navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
   navigation : false,
   pagination:false
 });
}(jQuery));
</script>
<div class="webi-newsletter  webi-newsletterp hide" id="newsletter_640e0b4fd7f10" data-mode="popup">
     <form id="formNewLestter" method="post" action="https://opencart.dostguru.com/OF01/flavoro_01/index.php?route=extension/module/webinewsletter/subscribe" class="formNewLestter  white-popup newsletter-bg news-popup">
         <div class="inner">
                         <div class="description-top">
                                                                                                                                                                                                                                                                 <h1>sign up our newsletter</h1>
<p>Subscribe our newsletters now and stay up-to-date with new collections</p>
                                                     
                                                     
                                                     
                                                     
             </div>
             <div class="form-group">
                 <input type="text" class="form-control input-md inputNew" onblur="javascript:if(this.value=='')this.value='Your email address';" onfocus="javascript:if(this.value=='Your email address')this.value='';" value="Your email address" size="18" name="email">
             </div>
             <div class="valid"></div>
             <div class="button-submit">
                 <button type="submit" name="submitNewsletter" class="btn btn-primary">Subscribe</button>
             </div>	
             <input type="hidden" value="1" name="action">
             
             <div class="description-bottom">
                                                                                                                                                                                                     
                                                     
                                                     
                                                     
             </div>
         </div>
         <div class="form-group">
             <div class="checkbox">
             <label><input type="checkbox" checked="false"> Close & Don't show this again!!! </label>
           </div>
         </div>	
     </form>
</div>

<script type="text/javascript"><!--
$("#newsletter_640e0b4fd7f10").webiNewsletter().work(  'Email is not valid!' );
--></script>
</div>
 </div>
</div>
@endsection
