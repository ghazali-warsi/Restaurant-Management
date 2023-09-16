	
 
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

    @include('Admin.partials.style')
</head>

<body>
	<!-- Start header -->
	@include('Admin.partials.header')
		<!-- Start All Pages -->
		<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Menu</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	<!-- End header -->
	
	
		<!-- Start Menu -->
        <div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			
			<div class="row inner-menu-box">
				<div class="col-3">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" href="{{url('/')}}" role="tab" aria-controls="v-pills-home" aria-selected="true">Back To Menu</a>
					</div>
				</div>
				
				<div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="row">
								
                            @foreach($category->menus as $menu)
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
									<img src="{{ asset('images/' . $menu->image) }}" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>{{$menu->name}}</h4>
											<p>   {{$menu->description}}</p>
											<h5>{{$menu->price}}</h5>
										</div>
									</div>
								</div>
                                @endforeach
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-01.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Drinks 1</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $7.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-02.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Drinks 2</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $9.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid drinks">
									<div class="gallery-single fix">
										<img src="images/img-03.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Drinks 3</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $10.79</h5>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-04.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Lunch 1</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $15.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-05.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Lunch 2</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $18.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid lunch">
									<div class="gallery-single fix">
										<img src="images/img-06.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Lunch 3</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $20.79</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="row">
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-07.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Dinner 1</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $25.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-08.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Dinner 2</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $22.79</h5>
										</div>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-6 special-grid dinner">
									<div class="gallery-single fix">
										<img src="images/img-09.jpg" class="img-fluid" alt="Image">
										<div class="why-text">
											<h4>Special Dinner 3</h4>
											<p>Sed id magna vitae eros sagittis euismod.</p>
											<h5> $24.79</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- End Menu -->
	
	@include('Admin.partials.footer')

    @include('Admin.partials.script')
</body>
</html>