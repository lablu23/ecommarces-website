@extends('frontend.layouts.index')

@section('mainpart')

<div id="product-product" class="container">

  <div class="row">
            
    <div id="content" class="col-xs-12">
       <div class="productbg">
      <div class="row">
        <h2 class="text-center ">Product Details </h2>
       
        <hr>
        <br>
                                <div class="col-sm-6 col-lg-5 col-md-6 col-xs-12 proimg sticky"> 
                                <ul class="thumbnails">
                                    <li><a class="thumbnail" href="#" title="{{ $product->product_name  }}">
                                        <img src="{{ asset($product->photo) }}" alt="">
                                       </a>
                                  </li>
                          
                             </ul>
                  </div>
                                <div class="col-lg-7 col-md-6 col-xs-12 col-sm-6 pro-content">
          <h1>{{ $product->product_name  }}</h1><hr class="producthr">
                        <div class="rating">
              <li>                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>                 
              </li>
              <li class="proreview">
                <a id="ratecount" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a>
              </li>
              <li>
                <a id="ratep" href="#rt" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
              </li>
            </div>
            <hr>
                                    <ul class="list-unstyled">
                            <li class="text-decor-bold">
                <h2 class="pro-price">${{ $product->price }}</h2>
              </li>
                            <!--               <li>Ex Tax: $100.00</li>
               -->
                            <li class="text-decor-bold">Price in reward points: 200</li>
                                        </ul>
                      
          <ul class="list-unstyled">
                        <li><span class="text-decor">Brand:</span><a href="index.php-124.html?route=product/manufacturer/info&amp;manufacturer_id=5" class="textdeb"></a></li>
                        <li><span class="text-decor">Product Code:</span> Product 1</li>
                        <li><span class="text-decor">Reward Points:</span> 400</li>
                                              <li class="stock_bg"><span class="text-decor">Availability:</span>  
                        <span class=" bg-success ">
                          In Stock
                        </span>
                      </li>
                      <li><span class="text-decor">Stock Count:</span> {{ $product->stock }}</li>
                    
                      </ul>


          <div id="product" class="webi-main"> 
                                                                <!-- Quantity option -->
                  <div class="form-group pro-qty">
                    <div class="row">
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 op-box qty-plus-minus">
                        <button type="button" class="form-control pull-left btn-number btnminus" disabled="disabled" data-type="minus" data-field="quantity">
                          <span class="glyphicon glyphicon-minus"></span>
                        </button>
                        <input id="input-quantity" type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control input-number pull-left">
                        <input type="hidden" name="product_id" value="28">
                        <button type="button" class="form-control pull-left btn-number btnplus" data-type="plus" data-field="quantity">
                          <span class="glyphicon glyphicon-plus"></span>
                        </button>
                      </div>
                      <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 product-btn text-right">
                        <button type="button" id="button-cart" data-loading-text="Loading..." class="btn pcrt add-to-cart btn-primary"><svg width="18px" height="17px"><use xlink:href="#pcart"></use></svg> add to cart</button>
                        <button type="button" class="btn pcrt btn-primary" onclick="wishlist.add('28');"><svg width="18px" height="17px"><use xlink:href="#heart"></use></svg></button>
                        <button type="button" class="btn pcrt  btn-primary" onclick="compare.add('28');"><svg width="18px" height="17px"><use xlink:href="#compare"></use></svg></button>
                      </div>
                    </div>
                  </div>
                  <!-- Quantity option end -->
               </div>
                 <div class="product-tag">
                       <a href=""></a>
                  </div>
                          
                        <hr class="producthr">

              <!-- AddToAny BEGIN -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_twitter"></a>
                            <a class="a2a_button_google_plus"></a>
                            <a class="a2a_button_pinterest"></a>
                            <a class="a2a_button_linkedin"></a>
                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                        </div>
                        <script async="" src="../../menu/page.js"></script>
            <!-- AddToAny END -->

            </div>
           
          </div>
      </div>
    <div class="product-tab">
      <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                                    <li><a href="#tab-review" data-toggle="tab">Reviews (0)</a></li>
                      </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-description">
                <p> {{ $product->long_des }}</p>
<p>
	<strong>Features</strong></p>
<ul>
	<li>
		Processor Qualcomm&reg; MSM 7201A&trade; 528 MHz</li>
	<li>
		Windows Mobile&reg; 6.1 Professional Operating System</li>
	<li>
		Memory: 512 MB ROM, 288 MB RAM</li>
	<li>
		Dimensions: 115 mm x 62.8 mm x 12 mm / 146.4 grams</li>
	<li>
		3.8-inch TFT-LCD flat touch-sensitive screen with 480 x 800 WVGA resolution</li>
	<li>
		HSDPA/WCDMA: Europe/Asia: 900/2100 MHz; Up to 2 Mbps up-link and 7.2 Mbps down-link speeds</li>
	<li>
		Quad-band GSM/GPRS/EDGE: Europe/Asia: 850/900/1800/1900 MHz (Band frequency, HSUPA availability, and data speed are operator dependent.)</li>
	<li>
		Device Control via HTC TouchFLO&trade; 3D &amp; Touch-sensitive front panel buttons</li>
	<li>
		GPS and A-GPS ready</li>
	<li>
		Bluetooth&reg; 2.0 with Enhanced Data Rate and A2DP for wireless stereo headsets</li>
	<li>
		Wi-Fi&reg;: IEEE 802.11 b/g</li>
	<li>
		HTC ExtUSB&trade; (11-pin mini-USB 2.0)</li>
	<li>
		5 megapixel color camera with auto focus</li>
	<li>
		VGA CMOS color camera</li>
	<li>
		Built-in 3.5 mm audio jack, microphone, speaker, and FM radio</li>
	<li>
		Ring tone formats: AAC, AAC+, eAAC+, AMR-NB, AMR-WB, QCP, MP3, WMA, WAV</li>
	<li>
		40 polyphonic and standard MIDI format 0 and 1 (SMF)/SP MIDI</li>
	<li>
		Rechargeable Lithium-ion or Lithium-ion polymer 1350 mAh battery</li>
	<li>
		Expansion Slot: microSD&trade; memory card (SD 2.0 compatible)</li>
	<li>
		AC Adapter Voltage range/frequency: 100 ~ 240V AC, 50/60 Hz DC output: 5V and 1A</li>
	<li>
		Special Features: FM Radio, G-Sensor</li>
</ul>
</div>
                                    <div class="tab-pane" id="tab-review">
              <form class="" id="form-review">
                <div id="review"></div>
                <h2 class="co-heading">Write a review</h2>
                                <div class="form-group required row">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-name">Your Name</label>
                    <input type="text" name="name" value="" id="input-name" class="form-control">
                  </div>
                </div>
                <div class="form-group required row">
                  <div class="col-sm-12">
                    <label class="control-label" for="input-review">Your Review</label>
                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                    <!-- <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div> -->
                  </div>
                </div>
                <div class="form-group required">

                  <div class="radi">
                                          <label class="control-label" for="input-review">Rating</label>
                  <div class="form-rating">

                      <div class="form-rating-container pull-left">
                        <input id="rating-5" type="radio" name="rating" value="5">
                        <label class="fa fa-stack pull-right" for="rating-5">
                          <i class="fa fa-star fa-stack-1x"></i>
                          <i class="fa fa-star-o fa-stack-1x"></i>
                        </label>
                        <input id="rating-4" type="radio" name="rating" value="4">
                        <label class="fa fa-stack pull-right" for="rating-4">
                          <i class="fa fa-star fa-stack-1x"></i>
                          <i class="fa fa-star-o fa-stack-1x"></i>
                        </label>
                        <input id="rating-3" type="radio" name="rating" value="3">
                        <label class="fa fa-stack pull-right" for="rating-3">
                          <i class="fa fa-star fa-stack-1x"></i>
                          <i class="fa fa-star-o fa-stack-1x"></i>
                        </label>
                        <input id="rating-2" type="radio" name="rating" value="2">
                        <label class="fa fa-stack pull-right" for="rating-2">
                          <i class="fa fa-star fa-stack-1x"></i>
                          <i class="fa fa-star-o fa-stack-1x"></i>
                        </label>
                        <input id="rating-1" type="radio" name="rating" value="1">
                        <label class="fa fa-stack pull-right" for="rating-1">
                          <i class="fa fa-star fa-stack-1x"></i>
                          <i class="fa fa-star-o fa-stack-1x"></i>
                        </label>
                      </div>
                    </div></div>
                </div>

                
                <div class="buttons clearfix">
                  <div class="pull-right">
                    <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                  </div>
                </div>
                 </form>
            </div>
            </div>
            </div>
    <!-- relatedproduct -->
 <div class="relpro">
      <h1 class="heading text-center"><span>Related Products</span><strong>Add Related Product to weekly line up</strong></h1>
      <div class="row xspspace rless">
        <div id="related" class="owl-carousel owl-theme">
             @foreach ($reletade_product as $item )
              <div class="col-xs-12 col-sm-12 product-layout col-xs-12 cless">
                  <div class="product-thumb transition">
                      <div class="image"><a href="{{ route('productdetails',$item->id) }}"><img src="{{ asset($item->photo )}}" alt="{{ $item->product_name }}&quot;" title="{{ $item->product_name }}&quot;" class="img-responsive center-block"></a>
                           <!-- Images Start -->
                  
                      </div>


                      <div class="caption text-center">

                           <div class="bran">
                                <span>{{ $item->category->category_name }} , {{ $item->subcategory->subcategory }} </span>
                           </div>
                               <h4 class="protitle"><a href="{{ route('productdetails', $item->id) }}">{{ $item->product_name }}&quot;</a></h4>

 
                            <div class="discount">{{ $item->discount }}</div>
                             <div class="price">
                                   <span data-update='price-42' class="price">${{ $item->price }}</span>
                                    <span class="price-tax">Ex Tax:</span>
                                    <span data-update='price-tax-42' class="price-tax">$100.00</span>
                              </div>
                
        

                             <div class="webi-main custom-radio">
                                   <div class="form-group homeaddq">
                                       <div class="homeqt">
                                            <button type="button" onclick="qty.minus('42')" class="form-control pull-left btn-number btnminus dis-42" disabled="disabled">
                                            <span class="glyphicon glyphicon-minus"></span>
                                            </button>
                                            <input name="quantity" class="addhqty" type="text" value="1" size="2" min="1" max="999" id="input-quantity-42" class="form-control input-number pull-left">
                                            <button type="button" onclick="qty.plus('42')" class="form-control pull-left btn-number btnplus">
                                            <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>
                                          <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                  </div>              
                            </div>
                            <div class="button-group">
                                        <input type="hidden" name="product_id" value="42">
                                    <button type="button" class="cartb add-to-cart webi-cart" data-toggle="tooltip" title="add to cart"><svg><use xlink:href="#pcart"></use></svg></button>
                                        <button type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><svg><use xlink:href="#heart"></use></svg></button>
                                    <button type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><svg><use xlink:href="#compare"></use></svg></button>
                                    <div data-toggle="tooltip" title="Quickview" class="bquickv"></div>
                             </div>

                        </div>


                    </div>
              </div>
              @endforeach       
              <!--  -->
         </div>
      </div>
 </div>
              </div></div>
</div>

<script type="text/javascript"><!--
$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
  $.ajax({
    url: 'index.php?route=product/product/getRecurringDescription',
    type: 'post',
    data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
    dataType: 'json',
    beforeSend: function() {
      $('#recurring-description').html('');
    },
    success: function(json) {
      $('.alert-dismissible, .text-danger').remove();

      if (json['success']) {
        $('#recurring-description').html(json['success']);
      }
    }
  });
});
//--></script>
<script type="text/javascript"><!--
$('#button-cart').on('click', function() {
  $.ajax({
    url: 'index.php?route=checkout/cart/add',
    type: 'post',
    data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
    dataType: 'json',
    beforeSend: function() {
      $('#button-cart').button('loading');
    },
    complete: function() {
      $('#button-cart').button('reset');
    },
    success: function(json) {
      $('.alert-dismissible, .text-danger').remove();
      $('.form-group').removeClass('has-error');

      if (json['error']) {
        if (json['error']['option']) {
          for (i in json['error']['option']) {
            var element = $('#input-option' + i.replace('_', '-'));

            if (element.parent().hasClass('input-group')) {
              element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
            } else {
              element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
            }
          }
        }

        if (json['error']['recurring']) {
          $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
        }

        // Highlight any found errors
        $('.text-danger').parent().addClass('has-error');
      }

      if (json['success']) {
        $('#content').parent().before('<div class="a-one"><div class="alert alert-success alert-dismissible alertsuc"><svg width="20px" height="20px"> <use xlink:href="#successi"></use> </svg> ' + json.success + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div></div>');
          setTimeout(function() {
              $('#cart > button').html('<svg><use xlink:href="#hcart"></use></svg><span id="cart-total">' + json['total'] + '</span>')
          }, 100);
          $('.a-one').delay(5000).fadeOut();
          $('#cart > ul').load('index.php?route=common/cart/info ul li')
          $("button.close").click(function() {
              $(".a-one").remove();
          })
      }
    },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
  });
});
//--></script> 
<script type="text/javascript"><!--
$('.date').datetimepicker({
  language: 'en-gb',
  pickTime: false
});

$('.datetime').datetimepicker({
  language: 'en-gb',
  pickDate: true,
  pickTime: true
});

$('.time').datetimepicker({
  language: 'en-gb',
  pickDate: false
});

$('button[id^=\'button-upload\']').on('click', function() {
  var node = this;

  $('#form-upload').remove();

  $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

  $('#form-upload input[name=\'file\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if ($('#form-upload input[name=\'file\']').val() != '') {
      clearInterval(timer);

      $.ajax({
        url: 'index.php?route=tool/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData($('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          $(node).button('loading');
        },
        complete: function() {
          $(node).button('reset');
        },
        success: function(json) {
          $('.text-danger').remove();

          if (json['error']) {
            $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
          }

          if (json['success']) {
            alert(json['success']);

            $(node).parent().find('input').val(json['code']);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
      });
    }
  }, 500);
});
//--></script>
<!--for product quantity plus minus-->
<script type="text/javascript">
    //plugin bootstrap minus and plus
    $(document).ready(function() {
    $('.btn-number').click(function(e){
    e.preventDefault();
    var fieldName = $(this).attr('data-field');
    var type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
    if (type == 'minus') {
    var minValue = parseInt(input.attr('min'));
    if (!minValue) minValue = 1;
    if (currentVal > minValue) {
    input.val(currentVal - 1).change();
    }
    if (parseInt(input.val()) == minValue) {
    $(this).attr('disabled', true);
    }

    } else if (type == 'plus') {
    var maxValue = parseInt(input.attr('max'));
    if (!maxValue) maxValue = 999;
    if (currentVal < maxValue) {
    input.val(currentVal + 1).change();
    }
    if (parseInt(input.val()) == maxValue) {
    $(this).attr('disabled', true);
    }

    }
    } else {
    input.val(0);
    }
    });
    $('.input-number').focusin(function(){
    $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

    var minValue = parseInt($(this).attr('min'));
    var maxValue = parseInt($(this).attr('max'));
    if (!minValue) minValue = 1;
    if (!maxValue) maxValue = 999;
    var valueCurrent = parseInt($(this).val());
    var name = $(this).attr('name');
    if (valueCurrent >= minValue) {
    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
    alert('Sorry, the minimum value was reached');
    $(this).val($(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
    alert('Sorry, the maximum value was reached');
    $(this).val($(this).data('oldValue'));
    }
    });
    $(".input-number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== - 1 ||
            // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
            }
            });
    });
</script>

<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$('#review').load('index.php?route=product/product/review&product_id=28');

$('#button-review').on('click', function() {
  $.ajax({
    url: 'index.php?route=product/product/write&product_id=28',
    type: 'post',
    dataType: 'json',
    data: $("#form-review").serialize(),
    beforeSend: function() {
      $('#button-review').button('loading');
    },
    complete: function() {
      $('#button-review').button('reset');
    },
    success: function(json) {
      $('.alert-dismissible').remove();

      if (json['error']) {
        $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
      }

      if (json['success']) {
        $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

        $('input[name=\'name\']').val('');
        $('textarea[name=\'text\']').val('');
        $('input[name=\'rating\']:checked').prop('checked', false);
      }
    }
  });
});

$(document).ready(function() {
  $('.thumbnails').magnificPopup({
    type:'image',
    delegate: 'a',
    gallery: {
      enabled: true
    }
  });
});
//--></script>
<!-- related -->
<script type="text/javascript">
    (function($){
    $("#related").owlCarousel({
    itemsCustom : [
    [0, 1],
    [320, 2],
    [600, 3],
    [992, 3],
    [1200, 4],
    [1410, 4]
    ],
      // autoPlay: 1000,
      navigationText: ['<svg><use xlink:href="#arleft"></use></svg>', '<svg><use xlink:href="#arright"></use></svg>'],
      navigation : true,
      pagination:false
    });
    }(jQuery));
</script>
<!-- related over -->
<!-- zoom product start -->
<!-- zoom product start -->
<script>
     if (jQuery(window).width() >= 1200){
        //initiate the plugin and pass the id of the div containing gallery images
            $("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: ''});
        //pass the images to Fancybox
            $("#zoom_03").bind("click", function (e) {
            var ez = $('#zoom_03').data('elevateZoom');
            $.fancybox(ez.getGalleryList());
            return false;
            });
    }
</script>
<!--ZOOM END-->

<!--slider for product-->
<script type="text/javascript"><!--
$('#gallery_01').owlCarousel({
  itemsCustom : [
        [0, 2],
        [320, 3],
        [600, 5],
        [768, 4],
        [992, 4],
        [1200, 4],
        [1410, 4]
        ],
   autoPlay: 1000,
  autoPlay: true,
  navigation: false,
  navigationText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
  pagination: false
});
--></script>
<!--over slider for product-->

@endsection