	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="backend/images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/staff.index')}}">Staff</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{url('/reservation/step-one')}}" id="dropdown-a" data-toggle="dropdown">Reservation</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{url('/reservation/step-one')}}">Make Reservation</a>
								<a class="dropdown-item" href="{{url('/reser')}}">Reservation Details</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{url('/menu')}}" id="dropdown-a" data-toggle="dropdown">Order</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="{{url('/menu')}}">Order</a>
								<a class="dropdown-item" href="{{url('/show_order')}}">Order Details</a>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{url('testimonial/home')}}" id="dropdown-a" data-toggle="dropdown">Reviews</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
							<a class="dropdown-item" href="{{url('customer/add-testimonials')}}">Add Review</a>
                            <a class="dropdown-item" href="{{url('testimonial/home')}}"> Reviews</a>
							</div>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{url('/create/contact')}}">Contact</a></li>

                        @if (Route::has('login'))
                <li>
                    @auth
                        <li class="nav-item"><a class="nav-link" href="#">{{@Auth::user()->name}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('logout')}}" >Logout</a></li>

                    @else
                    <li class="nav-item"><a class="nav-link" href="{{ route('login')}}" >Log in</a></li>
 
                        @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register')}}">Register</a>
                        @endif
                    @endauth
            
                @endif
               </li>					
            </ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
