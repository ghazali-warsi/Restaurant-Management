<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</head>
<body>
<div class="card"style="padding:10%;">
  <div class="card-header">
  Reservation Trends
  </div>
  <div class="card-body">
    <h5 class="card-title">Reservation Trends</h5>
    <p class="card-text"></p>
    <h1>Reservation Trends</h1>
    <ul>
        @foreach ($reservationTrends as $trend)
            <li>{{ $trend->reservation_date }}: {{ $trend->count }} reservations</li>
        @endforeach
    </ul>

    <h1>Reservation Statistics</h1>
    <p>No-Show Reservations: {{ $noShowCount }}</p>
    <p>Active Reservations: {{ $activeReservationsCount }}</p>
    <p>No-Show Percentage: {{ round($noShowPercentage, 2) }}%</p>
    <p>Average Guest Number: {{ round($averageGuests, 2) }}</p>
    <a href="{{ route('generate.reports') }}" class="btn btn-danger">Generate Report</a>
</div></body>
</html>




