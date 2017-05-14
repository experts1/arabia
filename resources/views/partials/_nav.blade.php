<!--banner-->
	<div id="home" class="banner">

		<div class="banner-info">
			<div class="container">
				<div class="col-md-4 header-left">
					<img src="images/img1.png" alt=""/>
				</div>

				<div class="auth">
            @if(Auth::check())

            <h3>Hello {{Auth::user()->name}}</h3> 
            
            
                <h3><a href="{{route('logout')}}">Logout</a></h3>
            
          
             @endif
         </div>
				<div class="col-md-8 header-right">
					<h2>Hello</h2>
						<h1>المنظمه العربيه للابحاث والتطوير</h1>
					<h6>Web Designer and Developer</h6>
					<ul class="address">
						<li>
							<ul class="address-text">
								<li><b>D.O.B</b></li>
								<li>23-06-1980</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>PHONE </b></li>
								<li>+00 111 222 3333</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>ADDRESS </b></li>
								<li>756 global Place, North Sydney, Canada.</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>E-MAIL </b></li>
								<li><a href="mailto:example@mail.com"> mail@example.com</a></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>WEBSITE </b></li>
								<li><a href="http://w3layouts.com">www.myresume.com</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//banner-->
	<!--top-nav-->
	<div class="top-nav wow">
		<div class="container">
			<div class="navbar-header logo">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					Menu
				</button>
			</div>


        </div>


			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="menu">
					<ul class="nav navbar">
						<li>
						</li>
						

						<li><a href="#about" class="scroll">من نحن</a></li>
						<li><a href="#work" class="scroll">لقطات</a></li>
						<li><a href="#education" class="scroll">مجالات التخصص</a></li>
						<li><a href="#skills" class="scroll">روابط تهمك</a></li>
						<li><a href="#projects" class="scroll">انشطتنا</a></li>
						<li><a href="#contact" class="scroll">تواصل معنا</a></li>
					</ul>
					<div class="clearfix"> </div>


				</div>
			</div>

		</div>

	</div>	
	<!--//top-nav-->