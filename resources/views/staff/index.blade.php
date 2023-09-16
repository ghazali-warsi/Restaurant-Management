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

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('backend/images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('backend/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/custom.css')}}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
    @include('Admin.partials.header')

	<!-- End header -->
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Staff</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Stuff -->
	<div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Staff</h2>
						<p>One thing i always say is being a great chef today is not enough you have to be great businessman.</p>
					</div>
				</div>
			</div>
			<div class="row">
            @foreach ($staffMembers as $staffMember)

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                        <img src="{{ asset('images/' . $staffMember->image) }}" class="img-fluid" alt="Image">

                               
                            </ul> <ul class="social">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">{{ $staffMember->name }}</h3>
                            <span class="post">{{ $staffMember->designation }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
		</div>
	</div>
	<!-- End Stuff -->
	
	
	
	<!-- Start Footer -->
    @include('Admin.partials.footer')
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="{{asset('backend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('backend/js/popper.min.js')}}"></script>
	<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
	<script src="{{asset('backend/js/jquery.superslides.min.js')}}"></script>
	<script src="{{asset('backend/js/images-loded.min.js')}}"></script>
	<script src="{{asset('backend/js/isotope.min.js')}}"></script>
	<script src="{{asset('backend/js/baguetteBox.min.js')}}"></script>
	<script src="{{asset('backend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('backend/js/contact-form-script.js')}}"></script>
    <script src="{{asset('backend/js/custom.js')}}"></script>
</body>
</html>