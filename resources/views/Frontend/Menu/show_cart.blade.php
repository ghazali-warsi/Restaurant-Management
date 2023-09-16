


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
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Cart</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
<div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
@if(session()->has('message'))
    <div class="alert alert-success">
      <button type="button"class="close"data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}

    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="form-reservations-box">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center"></h2>
                    </div>

                    <!-- Display list of reservations -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <table class="table ">
                                <thead>
                                    <tr>
                                          <!-- <th>Id</th> -->
                        <th>Product Name</th>
                        <th>Product Quantity</th>
                        <th>Product Price</th>
                        <th>Product Image</th>
                        <th>Action</th>
          
                                        <!-- Add other columns as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $totalprice=0; ?>
                    @foreach($cart as $cart)
                    <tr>
                   
                        <td>{{$cart->menus_name}}</td>
                        <td>{{$cart->quantity}}</td>
                        <td>Rs{{$cart->price}}</td>
                        <td><img class=""height=" 100px"width ="100px" src="/images/{{$cart->image}}"></td>
                        <td>
    <a onclick="return confirm('Are you sure you want to remove this product?')" href="{{url('remove_cart',$cart->id)}}" class="btn btn-link text-danger">
        <i class="fas fa-trash-alt" style="color: red;"></i>Cancel Order
    </a>
</td>                        </tr>
                        <?php $totalprice=$totalprice + $cart->price ?>
                        @endforeach
                                </tbody>
                            </table>
                            <div>
                <h3 style="padding-top: 25px;">Total Price : ${{$totalprice}}</h3>
            </div>
          <div style="padding-bottom: 25px;">
    <h2>Proceed to Order</h2>
    <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>
    <a href="{{url('/menu')}}" class="btn btn-danger">Continue</a>
</div>
                        </div>
                    </div>

                  
                </div>
                <!-- end col -->
            </div>
            <!-- end reservations-box -->
        </div>

        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end reservations-main -->


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



	@include('Admin.partials.footer')
    @include('Admin.partials.script')
</body>
</html>