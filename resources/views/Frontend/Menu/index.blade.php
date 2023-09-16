	
 
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
    <!-- Font Awesome CSS (Latest Version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
	

	@include('Admin.partials.footer')
    @include('Admin.partials.script')
</body>
</html>