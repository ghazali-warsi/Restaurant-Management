


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
    <style>
        .highlight-countdown {
            background-color: yellow; /* You can adjust the color to your preference */
            padding: 8px;
            font-weight: bold;
        }
    </style>
</head>

<body>
	
@include('Admin.partials.header')
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reservation</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

<div class="container"  style="margin-top: 30px; margin-bottom: 20px;">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
            <div class="card-header" style="font-size: 26px;">Reservation Details</div>                <div class="card-body">
                    @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <p><strong>Reservation ID:</strong> {{ $reservation->id }}</p>
                    <p><strong>Name:</strong> {{ $reservation->firstname }} {{ $reservation->lastname }}</p>
                    <p><strong>Email:</strong> {{ $reservation->email }}</p>
                    <p><strong>Tel_Number:</strong> {{ $reservation->tel_number }}</p>
                    <p><strong>Reservation Date</strong> {{ $reservation->reservation_date }}</p>
                    <p><strong>Table ID:</strong> {{ $reservation->table_id}}</p>
                    <p><strong>Guest Number:</strong> {{ $reservation->guest_number}}</p>

					<!-- <form action="{{route('payment')}}"method="Post">
					
                    @csrf
                    <input type="hidden"name="amount"value="800">
    
                    <button type="submit"class="btn btn-danger">Pay With Paypal</button>
    
                    </form> -->

                 
                </div>
            </div>
        </div>
    </div>
</div>



	@include('Admin.partials.footer')
    @include('Admin.partials.script')
</body>
</html>