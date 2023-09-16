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
	<!-- End header -->
  <div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Product Details</h1>
				</div>
			</div>
		</div>
	</div>
  <div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Details</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>

    <!-- <div class="col-9 text-center" height="50%"width="30%">
	  <div class="tab-content" id="v-pills-tabContent">
	    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
	      <div class="row">
            <div class="col-lg-4 col-md-6 special-grid dinner">
             <div class="gallery-single fix">
	           <img src="{{ asset('images/' . $menus->image) }}" class="img-fluid" alt="Image">
	            <div class="why-text">
	              <h4>Menu Name:{{$menus->name}}</h4>
		           <p>Menu Discription:  {{$menus->description}}</p>
                    <h5>Available Quantity: {{$menus->quantity}}</h5>
		              <h5>Rs:{{$menus->price}}</h5>
			          
	                         </div>
                                    </div>
                                    <form action="{{url('add_cart',$menus->id)}}"method="POST">
                                      @csrf
                                      <div class="row">
                              <div > <input type="number"name="quantity"value="1"min="1"></div>
                                   <div > <input type="submit"class="btn btn-primary" value="Add to Cart"></div>
           
                                      </div>
                                           </form>
                                    </div>
                                      </div>
                                           </div> -->
<div class="container"padding="50%">
                  <div class="row"style="center">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="{{ asset('/images/' . $menus->image) }}">
                            <ul class="social">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="name">Menu Name:{{$menus->name}}</h3>
                            <p>Menu Discription:  {{$menus->description}}</p>
                            <h5>Available Quantity: {{$menus->quantity}}</h5>
                            <span class="post">Rs:{{$menus->price}}</span>
                        </div>
                        <form action="{{url('add_cart',$menus->id)}}"method="POST">
                                      @csrf
                               <div><input type="number"name="quantity"value="1"min="1"></div>
                                   <div><input type="submit"class="btn btn-primary" value="Add to Cart"></div>
           
                                      </div>
                                           </form>
                    </div>
                </div>
                </div>
               































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

















    @include('Admin.partials.footer')
    @include('Admin.partials.script')
</body>
</html>
