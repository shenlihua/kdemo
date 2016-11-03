<?php
namespace frontend\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class NavWidget extends Widget
{
    public function run()
    {
        $controller_name=Yii::$app->controller->getUniqueId();
        $action_name=Yii::$app->controller->action->id;
        $str=$controller_name.'-'.$action_name;
        $no_change_style='site-index';
        $class=strpos($no_change_style,$str)===false?'men_banner':'banner';
        echo '<div class="'.$class.'">
   	  <div class="container">
   	  	<div class="navbar-header">
   		<div class="logo">
			<a href="index.html"><img src="images/auto.png" alt=""/></a>
		</div>
	   <div class="navg">	   	  
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	       </div>
	      </div>
<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	         <ul class="nav navbar-nav">
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Models<b class="caret"></b></a>
		            <ul class="dropdown-menu">		            
                    <li><div class="col1 nav-float">
							<div class="h_nav">
								<h4>New</h4>
								<ul>
									<li><a href="'.Url::to(['site/models']).'">Honda</a></li>
									<li><a href="'.Url::to(['site/models']).'">Toyota</a></li>
									<li><a href="'.Url::to(['site/models']).'">Mahindra</a></li>
									<li><a href="'.Url::to(['site/models']).'">Tata</a></li>
									<li><a href="'.Url::to(['site/models']).'">Ford</a></li>
									<li><a href="'.Url::to(['site/models']).'">Chevrolet</a></li>
									<li><a href="'.Url::to(['site/models']).'">Renault</a></li>
									<li><a href="'.Url::to(['site/models']).'">Nissan</a></li>
									<li><a href="'.Url::to(['site/models']).'">Skoda</a></li>
								</ul>
							</div>							
						</div></li>
						<li><div class="col1 nav-float">
							<div class="h_nav">
								<h4>Upcoming</h4>
								<ul>
									<li><a href="'.Url::to(['site/models']).'">Audi</a></li>
									<li><a href="'.Url::to(['site/models']).'">Bmw</a></li>
									<li><a href="'.Url::to(['site/models']).'">Jaguar</a></li>
									<li><a href="'.Url::to(['site/models']).'">Mercedes-benz</a></li>
									<li><a href="'.Url::to(['site/models']).'">Volkswagen</a></li>
									<li><a href="'.Url::to(['site/models']).'">Datsun</a></li>
									<li><a href="'.Url::to(['site/models']).'">Lamborghini</a></li>
									<li><a href="'.Url::to(['site/models']).'">Ferrari</a></li>
									<li><a href="'.Url::to(['site/models']).'">Rolls-Royce</a></li>
								</ul>
							</div>							
						</div></li>
						<li><div class="col2 nav-imgs">
							<div class="h_nav nav-img">
								<h4>Trends</h4>
								<ul>
									<li class>
										<div class="p_left">
										  <img src="images/p1.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Cars</a></h4>
											<span class="item-cat"><small><a href="#">Ferrari</a></small></span>
											<span class="price">100000 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										  <img src="images/p2.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Cars</a></h4>
											<span class="item-cat"><small><a href="#">Ferrari</a></small></span>
											<span class="price">100000 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										  <img src="images/p3.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Cars</a></h4>
											<span class="item-cat"><small><a href="#">Ferrari</a></small></span>
											<span class="price">100000 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
								</ul>	
							</div>												
						</div></li>
					  <div class="clearfix"> </div>                  
		            </ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Used<b class="caret"></b></a>
		            <ul class="dropdown-menu nav-equal">		            
                    <li><div class="col1 nav-float">
							<div class="h_nav">
								<h4>New</h4>
								<ul>
									<li><a href="'.Url::to(['site/models']).'">Honda</a></li>
									<li><a href="'.Url::to(['site/models']).'">Toyota</a></li>
									<li><a href="'.Url::to(['site/models']).'">Mahindra</a></li>
									<li><a href="'.Url::to(['site/models']).'">Tata</a></li>
									<li><a href="'.Url::to(['site/models']).'">Ford</a></li>
									<li><a href="'.Url::to(['site/models']).'">Chevrolet</a></li>
									<li><a href="'.Url::to(['site/models']).'">Renault</a></li>
									<li><a href="'.Url::to(['site/models']).'">Nissan</a></li>
									<li><a href="'.Url::to(['site/models']).'">Skoda</a></li>
								</ul>
							</div>							
						</div></li>
						<li><div class="col1 nav-float">
							<div class="h_nav">
								<h4>Upcoming</h4>
								<ul>
									<li><a href="'.Url::to(['site/models']).'">Audi</a></li>
									<li><a href="'.Url::to(['site/models']).'">Bmw</a></li>
									<li><a href="'.Url::to(['site/models']).'">Jaguar</a></li>
									<li><a href="'.Url::to(['site/models']).'">Mercedes-benz</a></li>
									<li><a href="'.Url::to(['site/models']).'">Volkswagen</a></li>
									<li><a href="'.Url::to(['site/models']).'">Datsun</a></li>
									<li><a href="'.Url::to(['site/models']).'">Lamborghini</a></li>
									<li><a href="'.Url::to(['site/models']).'">Ferrari</a></li>
									<li><a href="'.Url::to(['site/models']).'">Rolls-Royce</a></li>
								</ul>
							</div>							
						</div></li>
						<li><div class="col2 nav-imgs">
							<div class="h_nav nav-img">
								<h4>Trends</h4>
								<ul>
									<li class>
										<div class="p_left">
										  <img src="images/p1.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Cars</a></h4>
											<span class="item-cat"><small><a href="#">Ferrari</a></small></span>
											<span class="price">100000 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										  <img src="images/p2.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Cars</a></h4>
											<span class="item-cat"><small><a href="#">Ferrari</a></small></span>
											<span class="price">100000 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										  <img src="images/p3.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Cars</a></h4>
											<span class="item-cat"><small><a href="#">Ferrari</a></small></span>
											<span class="price">100000 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
								</ul>	
							</div>												
						</div></li>
					  <div class="clearfix"> </div>                  
		            </ul>
		        </li>
		        <li class="dropdown">
		            <a class="last-nav" href="'.Url::to(['site/brands']).'">Brands</a>
		        </li>
		        <li class="dropdown">
		            <a href="'.Url::to(['site/sales']).'" class="last-nav">Sales</a>	            
		        </li>	       
		        <li><a class="last-nav" href="'.Url::to(['site/error']).'">News</a></li>
	         </ul>
	        </div>
	      

		    </div>
	        <div class="clearfix"> </div>
	    </div>';
    }
}