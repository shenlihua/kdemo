<?= frontend\components\NavWidget::widget();?>
   <div class="men">
    <div class="container">
    	<div class="col-md-4 sidebar_men">
    	  <h3>Brands</h3>
    	  <ul class="product-categories color"><li class="cat-item cat-item-42"><a href="#">Honda</a> <span class="count">(14)</span></li>
			<li class="cat-item cat-item-60"><a href="#">Toyota</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-63"><a href="#">Mahindra</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-54"><a href="#">Tata</a> <span class="count">(8)</span></li>
			<li class="cat-item cat-item-55"><a href="#">Ford</a> <span class="count">(11)</span></li>
			<li class="cat-item cat-item-64"><a href="#">Chevrolet</a> <span class="count">(3)</span></li>
			<li class="cat-item cat-item-61"><a href="#">Renault</a> <span class="count">(3)</span></li>
			<li class="cat-item cat-item-56"><a href="#">Nissan</a> <span class="count">(6)</span></li>
			<li class="cat-item cat-item-57"><a href="#">Skoda</a> <span class="count">(13)</span></li>
			<li class="cat-item cat-item-58"><a href="#">Audi</a> <span class="count">(7)</span></li>
			<li class="cat-item cat-item-62"><a href="#">Bmw</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-41"><a href="#">Jaguar</a> <span class="count">(17)</span></li>
		 </ul>
		  <h3>Colors</h3>
    	  <ul class="product-categories color"><li class="cat-item cat-item-42"><a href="#">Green</a> <span class="count">(14)</span></li>
			<li class="cat-item cat-item-60"><a href="#">Blue</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-63"><a href="#">Red</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-54"><a href="#">Gray</a> <span class="count">(8)</span></li>
			<li class="cat-item cat-item-55"><a href="#">Green</a> <span class="count">(11)</span></li>
		  </ul>
		  <h3>Type</h3>
    	  <ul class="product-categories color"><li class="cat-item cat-item-42"><a href="#">L</a> <span class="count">(14)</span></li>
			<li class="cat-item cat-item-60"><a href="#">MUV</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-63"><a href="#">SUV</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-54"><a href="#">Coupe</a> <span class="count">(8)</span></li>
			<li class="cat-item cat-item-55"><a href="#">Luxury</a> <span class="count">(11)</span></li>
		  </ul>
		  <h3>Price</h3>
    	  <ul class="product-categories"><li class="cat-item cat-item-42"><a href="#">20000$-30000$</a> <span class="count">(14)</span></li>
			<li class="cat-item cat-item-60"><a href="#">30000$-40000$</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-63"><a href="#">40000$-50000$</a> <span class="count">(2)</span></li>
			<li class="cat-item cat-item-54"><a href="#">50000$-60000$</a> <span class="count">(8)</span></li>
			<li class="cat-item cat-item-55"><a href="#">60000$-70000$</a> <span class="count">(11)</span></li>
		  </ul>
		</div>
    	<div class="col-md-8 model-mar">
    		<div class="dreamcrub">
			   	<ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.html" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="home">&nbsp;
                        Auto Mobiles &nbsp;
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="mens-toolbar">
                 <div class="sort">
               	   <div class="sort-by">
		            <label>Sort By</label>
		            <select>
		                            <option value="">
		                    Position                </option>
		                            <option value="">
		                    Name                </option>
		                            <option value="">
		                    Price                </option>
		            </select>
		            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
                   </div>
    		     </div>
    	        <ul class="women_pagenation dc_paginationA dc_paginationA06">
			     <li><a href="#" class="previous">Page : </a></li>
			     <li class="active"><a href="#">1</a></li>
			     <li><a href="#">2</a></li>
		  	    </ul>
                <div class="clearfix"></div>		
		        </div>
    		<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
					<div class="cbp-vm-options">
						<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
						<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
					</div>
					<div class="pages">   
        	 <div class="limiter visible-desktop">
               <label>Show</label>
                  <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                  </select> per page        
               </div>
       	   </div>
					<div class="clearfix"></div>
					<ul>
					  <li>
							<a class="cbp-vm-image" href="<?= \yii\helpers\Url::to(['site/single'])?>">
							 <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m4.jpg" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                 </div>
					                 <div class="product_container">
									   <h4>Mercedes</h4>
									   <p>Lorem Ipsum</p>
									   <div class="price">$99.00</div>
									 </div>		
								  </div>
			                     </div>
		                      </div>
		                    </a>
						</li>
						<li>
							<a class="cbp-vm-image" href="<?= \yii\helpers\Url::to(['site/single'])?>">
							  <div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m2.jpg" alt="image" class="img-responsive zoom-img"></div>
									 <div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									 <div class="product_container">
									   <h4>Honda</h4>
									   <p>Lorem Ipsum</p>
									   <div class="price">$99.00</div>
									 </div>		
								  </div>
			                     </div>
		                      </div>
							 </a>
						</li>
						<li>
							<a class="cbp-vm-image" href="<?= \yii\helpers\Url::to(['site/single'])?>">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m3.jpg" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <h4>swift</h4>
									   <p>Lorem Ipsum</p>
									   <div class="price">$99.00</div>
									 </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
						</li>
						<li>
							<a class="cbp-vm-image" href="<?= \yii\helpers\Url::to(['site/single'])?>">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m1.jpg" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <h4>honda jazz</h4>
									   <p>Lorem Ipsum</p>
									   <div class="price">$99.00</div>
									 </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
						</li>
						<li>
							<a class="cbp-vm-image" href="<?= \yii\helpers\Url::to(['site/single'])?>">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m5.jpg" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <h4>Swift</h4>
									   <p>Dresses</p>
									   <div class="price">$99.00</div>
									 </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
						</li>
						<li>
							<a class="cbp-vm-image" href="<?= \yii\helpers\Url::to(['site/single'])?>">
								<div class="view view-first">
					   		  <div class="inner_content clearfix">
								<div class="product_image">
									<div class="mask1"><img src="images/m6.jpg" alt="image" class="img-responsive zoom-img"></div>
									<div class="mask">
			                       		<div class="info">Quick View</div>
					                  </div>
									<div class="product_container">
									   <h4>Mercedes red</h4>
									   <p>Dresses</p>
									   <div class="price">$99.00</div>
									 </div>		
								  </div>
			                     </div>
		                      </div>
							</a>
						</li>
					</ul>
				</div>
				<script src="js/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/classie.js" type="text/javascript"></script>
    	</div>
    </div>
   </div>