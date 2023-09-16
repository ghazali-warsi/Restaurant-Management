	
 
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 
     <!-- Site Metas -->
    <title>Live Dinner Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
					<h1>Order Details</h1>
				</div>
			</div>
		</div>
	</div>
  <div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				</div>
			</div>





<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <!-- <th>Id</th> -->
                        <th>Nmae</th>
                        <th>image</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Action</th>
                        
                    
</tr>

    @foreach($order as $order)
    <td>{{$order->menus_name}}</td>
    <td> <img src="{{ asset('/images/' . $order->image) }}" height="100px" width="100px"></td>
    <td>{{$order->quantity}}</td>
    <td>{{$order->price}}</td>
    <td>{{$order->payment_status}}</td>
    <td>{{$order->delivery_status}}</td>

  
    <td>
    @if($order->delivery_status=='processing')
        
    <a href="{{url('cancel_order',$order->id)}}" onclick="return confirm('Are you sure you want to cancel this order?')" class="btn btn-link text-dark">
    <i class="fas fa-trash-alt"></i> Cancel Order
</a>
    @else
    <p> Not Allowed </p>

    @endif
  
    </td>

      
</tr>
 
    @endforeach
    </tbody>
 </table>

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