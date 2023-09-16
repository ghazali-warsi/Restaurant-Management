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
	<!-- Pickadate CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/classic.css')}}">    
	<link rel="stylesheet" href="{{asset('backend/css/classic.date.css')}}">    
	<link rel="stylesheet" href="{{asset('backend/css/classic.time.css')}}">    
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
					<h1>Reservation</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Reservation</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
                    <form action="{{Route('reservation.store.step.one')}}" method="POST" enctype="multipart/form-data">
                     @csrf							
                            <div class="row">
								<div class="col-md-6">
									<div class="col-md-12">
                                    <div class="form-group">
                                    <strong>FirstName:</strong>
                                    <input type="text" name="firstname" value="{{$reservation->firstname ?? ''}}" class="form-control" placeholder="Name">
                                    @error('firstname')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>                                
								</div>
									<div class="col-md-12">
                                    <div class="form-group">
                                         <strong>LastName:</strong>
                                         <input type="text" name="lastname" value="{{$reservation->lastname ?? ''}}" class="form-control" placeholder="Name">
                                         @error('lastname')
                                         <span class="text-danger">{{$message}}</span>
                                         @enderror
                                     </div>                               
									</div>
									<div class="col-md-12">
                                     <div class="form-group">
                                      <strong>Email:</strong>
                                      <input type="text" name="email" value="{{$reservation->email ?? ''}}" class="form-control" placeholder="Name">
                                      @error('email')
                                      <span class="text-danger">{{$message}}</span>
                                      @enderror
                                  </div>									
                                </div>
								</div>
								  <div class="col-md-6">
									<div class="col-md-12">
                                    <div class="form-group">
                                  <strong>Tel_Number:</strong>
                                  <input type="number" name="tel_number" value="{{$reservation->tel_number ?? ''}}" class="form-control" placeholder="Name">
                                  @error('tel_number')
                                  <span class="text-danger">{{$message}}</span>
                                  @enderror
                              </div>									</div>
									<div class="col-md-12">
                                    <div class="form-group">
                               <strong>Reservation Date and Time:</strong>
                               <input type="datetime-local" name="reservation_date"
       min="{{ now()->format('Y-m-d\TH:i') }}" 
       max="{{ now()->addDays(2)->format('Y-m-d\TH:i') }}" 
       value="{{ $reservation ? \Carbon\Carbon::parse($reservation->reservation_date)->format('Y-m-d\TH:i') : '' }}"
       class="form-control" id="reservationDateTime">
                               @error('reservation_date')
                               <span class="text-danger">{{ $message }}</span>
                               @enderror
                               <span class="text-danger" id="timeValidationError" style="display:none;">
                                     Reservations are only available between 5 PM and 12 AM.
                                 </span>
                             </div>
                         </div>		
                         <div class="col-md-12">
    <div class="form-group">
        <strong>Guest_Number:</strong>

        @error('guest_number')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <!-- Dropdown menu for guest numbers -->
        <select name="guest_number" class="form-control mt-2">
            <option value="">Select a Guest Number</option>
            @foreach($guestNumbers as $guestNumber)
                <option value="{{ $guestNumber }}">{{ $guestNumber }}</option>
            @endforeach
        </select>
    </div>
</div>
						
                        	</div>
								
    </div>
                                <!-- <div class="col-md-12">
									<div class="submit-button text-center">
										<button class="btn btn-danger" id="submit" type="submit">Next</button>
									</div>
								</div> -->
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Next</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
                                </div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Reservation -->
	
	
	
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
	<script src="{{asset('backend/js/picker.js')}}"></script>
	<script src="{{asset('backend/js/picker.date.js')}}"></script>
	<script src="{{asset('backend/js/picker.time.js')}}"></script>
	<script src="{{asset('backend/js/legacy.js')}}"></script>
	<script src="{{asset('backend/js/form-validator.min.js')}}"></script>
    <script src="{{asset('backend/js/contact-form-script.js')}}"></script>
    <script src="{{asset('backend/js/custom.js')}}"></script>

    <!-- for datetime -->
    <script>
    const today = new Date();
    const currentYear = today.getFullYear();
    const currentMonth = String(today.getMonth() + 1).padStart(2, '0'); // Add leading zero if needed
    const currentDay = String(today.getDate()).padStart(2, '0'); // Add leading zero if needed

    const minDate = `${currentYear}-${currentMonth}-${currentDay}T00:00`;
     // Calculate two days from today
     const twoDaysFromToday = new Date(today);
    twoDaysFromToday.setDate(today.getDate() + 2);
    const maxYear = twoDaysFromToday.getFullYear();
    const maxMonth = String(twoDaysFromToday.getMonth() + 1).padStart(2, '0'); // Add leading zero if needed
    const maxDay = String(twoDaysFromToday.getDate()).padStart(2, '0'); // Add leading zero if needed
    const maxDate = `${maxYear}-${maxMonth}-${maxDay}T23:59`;

    document.getElementById('reservationDateTime').min = minDate;
    document.getElementById('reservationDateTime').max = maxDate;
    document.getElementById('reservationDateTime').addEventListener('change', function() {
        const chosenTime = new Date(this.value).getHours();
        const withinTimeRange = chosenTime >= 17 || chosenTime === 0;

        const timeValidationError = document.getElementById('timeValidationError');
        if (!withinTimeRange) {
            timeValidationError.style.display = 'block';
        } else {
            timeValidationError.style.display = 'none';
        }
    });
</script>
</body>
</html>