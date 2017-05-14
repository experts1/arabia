
@extends('main')

	@section('title','|Home')

	@section('content')

    


<body>
	
	<!--about-->
<hr>


	<div class="jumbotron">
		@foreach ($faces as $face)
  <h3 class="title"> {{ $face->title }}</h3>
  <p>{{ $face->body }}</p>
  @if (Auth::check())
		     <p><a class="btn btn-primary btn-block" href="{{route('face.show',$face->id)}}" role="button">Edit</a></p>
		     	
		     @endif	
</div>
	     @endforeach

		     
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>



          <div class="row box1">

            <div class="col col-md-5">
               <img src="images/about.jpg" alt="">
            </div>
           
         <div class="col  col-md-offset-10 ">
         
      	<h1>استراتيجيات متطوره</h1>
        </div>	
    </div>

           




	<!--//about-->
	<!--work-experience-->
	
	<!--//work-experience-->
	<!--education-->
		<!--//about-->
	<!--work-experience-->
	<div id="work" class="work">
		<div class="container">
			<h3 class="title">Work Experience</h3>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<h4>2014 - 2016 </h4>
				</div>
				<div class="col-md-6 work-right"> 
					<h5><span class="glyphicon glyphicon-briefcase"> </span> Company Name</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-right work-right2"> 
					<h4>2013 - 2014 </h4>
				</div>
				<div class="col-md-6 work-left work-left2"> 
					<h5> Company Name <span class="glyphicon glyphicon-briefcase"> </span></h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<h4>2012 - 2013 </h4>
				</div>
				<div class="col-md-6 work-right"> 
					<h5><span class="glyphicon glyphicon-briefcase"> </span> Company Name</h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-right work-right2"> 
					<h4>2010 - 2012 </h4>
				</div>
				<div class="col-md-6 work-left work-left2"> 
					<h5> Company Name <span class="glyphicon glyphicon-briefcase"></span> </h5>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//education-->
	<!--skills-->
	
	<!--//education-->
	<!--portfolio-->

	<!--
	<div id="projects" class="portfolio">
		<div class="container">
			<h3 class="title wow zoomInLeft animated" data-wow-delay=".5s">My Projects</h3>
			<div class="sap_tabs">			
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list wow fadeInUp animated" data-wow-delay=".7s">
						<li class="resp-tab-item"><span>All</span></li>
						<li class="resp-tab-item"><span>Html</span></li>
						<li class="resp-tab-item"><span> Photoshop</span></li>
						<li class="resp-tab-item"><span>Wordpress</span></li>					
					</ul>	
					<div class="clearfix"> </div>	
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g1.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid effect-sarah">
										<a href="images/g2.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g2.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g3.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
										</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g4.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g4.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g5.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g6.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g7.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g7.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g8.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g8.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g9.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g9.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g5.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g5.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g6.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g6.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g7.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g7.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g3.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g3.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g1.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g1.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g9.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g9.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="tab-1 resp-tab-content">
							<div class="tab_img">
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g2.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g2.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g4.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g4.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="col-md-4 portfolio-grids">
									<div class="grid">
										<a href="images/g8.jpg" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
											<img src="images/g8.jpg" alt="" class="img-responsive" />
											<div class="figcaption">
												<h3>My<span> Project</span></h3>
												<p>Sarah likes to watch clouds. She's quite depressed.</p>
											</div>
										</a>	
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--ResponsiveTabs-->
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});		
			</script>
			<!--//ResponsiveTabs-->
			<!-- swipe box js -->
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
			<!-- //swipe box js -->
		</div>
	</div>
	</div>
	
	
</body>
</html>
@endsection