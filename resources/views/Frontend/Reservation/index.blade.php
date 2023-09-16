


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
	
@include('Admin.partials.header')
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reservation Detail</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
<div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Tel_Number</th>
                                        <th>Table</th>
                                        <th>Guests</th>
                                        <th>DateTime</th>
                                        <!-- Add other columns as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $reservation)
                                    <tr>
                                        <td>{{ $reservation->id }}</td>
                                        <td>{{ $reservation->firstname }}</td>
                                        <td>{{ $reservation->lastname }}</td>
                                        <td>{{ $reservation->email }}</td>
                                        <td>{{ $reservation->tel_number }}</td>
                                        <td> @if ($reservation->table)
                                             {{ $reservation->table->name }}
                                         @else
                                             Table Not Found
                                         @endif</td>
                                         <td> @if ($reservation->table)
                                             {{ $reservation->table->guest_number }}
                                         @else
                                             Table Not Found
                                         @endif</td>
                                        <td>{{ $reservation->reservation_date }}</td>
                                        <td>    <a href="{{ route('reservations.show', $reservation->id) }}" class="btn btn-danger">View Details</a>
</td>
                                        <!-- Add other columns as needed -->
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                          <!-- Button to show reservation details -->

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