
<?php

$this->registerJsFile('@web/js/imagezoom.js',['depends'=>['frontend\assets\AppAsset']]);
$this->registerJsFile('@web/js/jquery.flexslider.js',['depends'=>['frontend\assets\AppAsset']]);
$this->registerJsFile('@web/js/easyResponsiveTabs.js',['depends'=>['frontend\assets\AppAsset']]);

$this->registerCssFile('@web/css/flexslider.css',['depends'=>['frontend\assets\AppAsset']]);
?>
<?php $this->beginBlock('test') ?>
// Can also be used with $(document).ready()
$(window).load(function() {
    $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails"
    });
});

$(document).ready(function () {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
    });
});
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>

<?= frontend\components\NavWidget::widget();?>

   <div class="men">
   	<div class="container">
      <div class="col-md-9 single_top">
      	<div class="single_left">
      	  <div class="labout span_1_of_a1">
			<div class="flexslider">
			  <ul class="slides">
			    <li data-thumb="images/s1.jpg">
			        <div class="thumb-image"> <img src="images/s1.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/s2.jpg">
			         <div class="thumb-image"> <img src="images/s2.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			    <li data-thumb="images/s3.jpg">
			       <div class="thumb-image"> <img src="images/s3.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li> 
				 <li data-thumb="images/s4.jpg">
			       <div class="thumb-image"> <img src="images/s4.jpg" data-imagezoom="true" class="img-responsive"> </div>
			    </li>
			  </ul>
	     	</div>
		     <div class="clearfix"></div>	
	    </div>
		<div class="cont1 span_2_of_a1">
				<h1>Lamborghini</h1>
				<p class="availability">Availability: <span class="color">In stock</span></p>
			    <div class="price_single">			
				  <span class="actual">$70.00-$80.00</span>
				</div>
				<h2 class="quick">Quick Overview:</h2>
				<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
			    <div class="wish-list">
				 	<ul>
				 		<li class="wish"><a href="#">Add to Wishlist</a></li>
				 	    <li class="compare"><a href="#">Add to Compare</a></li>
				 	</ul>
				 </div>
				<div class="tags">
					<h5>Category : Cars </h5>
					<h4>Tag : Lorem ipsum,Sed perspiciatis.</h4>
			     </div>
				<div class="quantity_box">					
				    <ul class="single_social">
						<li><a href="#"><i class="fb1"> </i> </a></li>
						<li><a href="#"><i class="tw1"> </i> </a></li>
						<li><a href="#"><i class="g1"> </i> </a></li>
						<li><a href="#"><i class="linked"> </i> </a></li>
		   		    </ul>
		   		    <div class="clearfix"></div>
	   		    </div>
			    <a href="#" title="Online Reservation" class="btn btn-primary btn-normal btn-inline " target="_self">Book</a>
			</div>
		    <div class="clearfix"> </div>
		</div>
        <div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Description</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <ul class="tab_list">
									  	<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
									  	<li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
									  <ul class="tab_list">
									    <li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									<ul class="tab_list">
									  	<li><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</a></li>
									  	<li><a href="#">augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigatione</a></li>
									  	<li><a href="#">claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores leg</a></li>
									  	<li><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</a></li>
									  </ul>      
							     </div>	
							 </div>
					      </div>
					 </div>	
		</div>
		<div class="col-md-3">
	      <h3 class="m_1">Related Products</h3>
	      <ul class="product">
	      	<li class="product_img"><img src="images/m5.jpg" class="img-responsive" alt=""/></li>
	      	<li class="product_desc">
	      		<h4><a href="#">quod mazim</a></h4>
	      		<p class="single_price">$66.30</p>
	      		<a href="#" class="link-cart">Add to Wishlist</a>
	      	    <a href="#" class="link-cart">Add to Cart</a>
	        </li>
	      	<div class="clearfix"> </div>
	      </ul>
	      <ul class="product">
	      	<li class="product_img"><img src="images/m6.jpg" class="img-responsive" alt=""/></li>
	      	<li class="product_desc">
	      		<h4><a href="#">quod mazim</a></h4>
	      		<p class="single_price">$66.30</p>
	      		<a href="#" class="link-cart">Add to Wishlist</a>
	      	    <a href="#" class="link-cart">Add to Cart</a>
	        </li>
	      	<div class="clearfix"> </div>
	      </ul>
	      <ul class="product">
	      	<li class="product_img"><img src="images/m2.jpg" class="img-responsive" alt=""/></li>
	      	<li class="product_desc">
	      		<h4><a href="#">quod mazim</a></h4>
	      		<p class="single_price">$66.30</p>
	      		<a href="#" class="link-cart">Add to Wishlist</a>
	      	    <a href="#" class="link-cart">Add to Cart</a>
	        </li>
	      	<div class="clearfix"> </div>
	      </ul>
	      <ul class="product">
	      	<li class="product_img"><img src="images/m3.jpg" class="img-responsive" alt=""/></li>
	      	<li class="product_desc">
	      		<h4><a href="#">quod mazim</a></h4>
	      		<p class="single_price">$66.30</p>
	      		<a href="#" class="link-cart">Add to Wishlist</a>
	      	    <a href="#" class="link-cart">Add to Cart</a>
	        </li>
	      	<div class="clearfix"> </div>
	      </ul>
        </div>
     <div class="clearfix"> </div>
	</div>
    </div>
