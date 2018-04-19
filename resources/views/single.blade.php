<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Personal Blog a Blogging Category Flat Bootstarp  Responsive Website Template | Single :: w3layouts</title>
	<link href="../../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../../css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!--end slider -->
		<!--script-->
<script type="text/javascript" src="../../js/move-top.js"></script>
<script type="text/javascript" src="../../js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->
</head>
<body>
<!---header---->			
<div class="header">  
	 <div class="container">
		  <div class="logo">
			  <a href="{{ route('recipes.index') }}"><img src="../../images/logo.jpg" title="" /></a>
		  </div>
			 <!---start-top-nav---->
			 <div class="top-menu">
				 <div class="search">
					 <form>
					 <input type="text" placeholder="" required="">
					 <input type="submit" value=""/>
					 </form>
				 </div>
				  <span class="menu"> </span> 
				   <ul>
						<li class="active"><a href="{{ route('recipes.index') }}">HOME</a></li>						
						<li><a href="{{ route('recipes.add') }}">ADD RECIPE</a></li>	
						<li><a class="dropdown-item" href="{{ route('logout') }}"
                            	onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}
                            </a>

                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>	
						</li>
						<div class="clearfix"> </div>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
					<script>
					$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
					});
					</script>
				<!---//End-top-nav---->					
	 </div>
</div>
<!--/header-->
<div class='single'>
	<div class='container'>
		<div class='col-md-8 single-main'>				 
			<div class='single-grid'>
				<p> {{$recipe->text}} </p>
			 </div>
			 @foreach($recipe->reviews as $review)
			 	<ul class='comment-list'>
				
		  		  <li><img src='../../images/avatar.png' class='img-responsive' alt=''>
					<div class='desc'>{{$review->text}}</div>
					<a href="#" onclick="event.preventDefault();
                                document.getElementById('deletereview-form{{$review->id}}').submit();"><span></span>DELETE</a>
								 <form id="deletereview-form{{$review->id}}" action="{{ route('reviews.delete', ['id'=> $review->id]) }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
		  		   <div class='clearfix'></div>
		  		   </li>
				
				</ul>
				@endforeach
			  <div class='content-form'>
					<h3>Leave a comment</h3>
					<form action = "{{route('reviews.store')}}" method = 'post' >
						{{ csrf_field() }}
						<input type = 'hidden' name = 'recipe_id' value = "{{$recipe->id}}" />
						<textarea name = 'text' placeholder='Text'></textarea>
						<div>
						<input type="radio" name = "rating" value = 1> 
						<label for="rating1">1</label>

						<input type="radio" name = "rating" value = 2>
						<label for="rating2">2</label>

						<input type="radio" name = "rating" value = 3>
						<label for="rating3">3</label>

						<input type="radio" name = "rating" value = 4>
						<label for="rating4">4</label>

						<input type="radio" name = "rating" value = 5>
						<label for="rating5">5</label>
						<div class="container">
						</div>
						<input type='submit' value='SEND'/>
				   </form>
				</div>
		  </div>
		  <div class='clearfix'></div>
		  </div>
	  </div>
</div>

<!---->
<div class="footer">
	 <div class="container">
	 <p>Copyrights © 2015 Blog All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	 </div>
</div>

	
