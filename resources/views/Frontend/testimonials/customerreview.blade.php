<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    @include('Admin.partials.style')
</head>

<body class="h-100">
    
@include('Admin.partials.header')
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reviews</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	<!-- Start Customer Reviews -->
<div class="customer-reviews-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Customer Reviews</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
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

	<!-- Start QT -->
	<div class="qt-box qt-background" style="margin-bottom: 40px;">
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
	<!-- End QT


<!-- End Customer Reviews -->

@include('Admin.partials.footer')



    <!--************
        Scripts
    *************-->
    <!-- Required vendors -->
  @include('Admin.partials.script')

</body>

</html>