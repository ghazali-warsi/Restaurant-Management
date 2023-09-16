<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation Details PDF</title>
    <!-- Include any necessary styles or CSS links here -->
</head>
<body>
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Reservation</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Reservation Details</div>
                    <div class="card-body">
                        <p><strong>Reservation ID:</strong> {{ $reservation->id }}</p>
                        <p><strong>Name:</strong> {{ $reservation->firstname }} {{ $reservation->lastname }}</p>
                        <p><strong>Email:</strong> {{ $reservation->email }}</p>
                        <p><strong>Tel_Number:</strong> {{ $reservation->tel_number }}</p>
                        <p><strong>Reservation Date:</strong> {{ $reservation->reservation_date }}</p>
                        <p><strong>Table ID:</strong> {{ $reservation->table_id}}</p>
                        <p><strong>Guest Number:</strong> {{ $reservation->guest_number}}</p>
                        <!-- Other reservation details... -->
                        <p><strong>Status:</strong> {{ ucfirst($reservation->status) }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>