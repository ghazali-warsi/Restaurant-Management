<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Live Dinner Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @include('Admin.partials.style')
</head>

<body>
	
@include('Admin.partials.header')
@include('Admin.partials.slider')
  <!-- Start About -->
   <div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Live Dinner Restaurant</span></h1>
						<h4>Little Story</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
						<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="{{url('/reservation/step-one')}}">Reservation</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="backend/images/about-img.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-center">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
		<!-- Start Menu -->
		<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Variety range of cuisines being provided under one roof.</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" href="" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>

                    @foreach($categories as $category)
                    <a class="nav-link" href="{{action('App\Http\Controllers\Frontend\categoryController@show',$category->id)}}" role="tab" aria-controls="v-pills-home" aria-selected="true">{{$category->name}}</a>
                        @endforeach
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
							@foreach($menus as $menu)
<div class="col-lg-4 col-md-6 special-grid dinner">
    <div class="gallery-single fix">
        <img src="{{ asset('images/' . $menu->image) }}" class="img-fluid" alt="Image">
        <div class="why-text">
            <h4>{{$menu->name}}</h4>
            <p>{{$menu->description}}</p>
            <h5>{{$menu->price}}</h5>
            <form action="{{url('add_cart', $menu->id)}}" method="POST" style="display: inline;">
                @csrf
                <div style="display: flex; align-items: center; padding-top: 0px;">
                    <h6 style="margin-right: 10px; color: white;">Quantity:</h6>
                    <input type="number" name="quantity" value="1" min="1" style="width: 50px; margin-right: 10px;">
                    <button type="submit" class="btn" style="background: none; border: none; cursor: pointer;">
                        <i class="fas fa-shopping-cart" style="font-size: 24px; color: black; transition: color 0.3s;"></i>
                    </button>
                </div>
            </form>
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

	<!-- End Menu -->
		<!-- Start Customer Reviews -->
<div class="customer-reviews-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Customer Reviews</h2>
                    <p>A perfect place to rejoice variety of cuisines withyour love ones.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mr-auto ml-auto text-center">
                <div id="reviews" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-4">
                        @foreach($testimonial as $key => $testimonialItem)
                            <div class="carousel-item text-center {{ $key === 0 ? 'active' : '' }}">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="{{asset('backend/images/quotations-button.png')}}" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">{{ $testimonialItem->user->name }}</strong></h5>
                                <p class="m-0 pt-3">{{ $testimonialItem->customer_content }}</p>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>	<!-- End Customer Reviews -->

	@include('Admin.partials.footer')
    @include('Admin.partials.script')
</body>
</html>