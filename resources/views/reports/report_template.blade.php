<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Report - {{ $date }}</title>
</head>
<body>
    <h1>Restaurant Report - {{ $date }}</h1>
    
    <h2>Reservation Trends</h2>
    <ul>
        @foreach ($reservationTrends as $trend)
            <li>{{ $trend->date }}: {{ $trend->count }} reservations</li>
        @endforeach
    </ul>



    <h2>Reservation Statistics</h2>
    <p>No-Show Reservations: {{ $noShowCount }}</p>
    <p>Canceled Reservations: {{ $canceledCount }}</p>
    <p>Active Reservations: {{ $activeReservationsCount }}</p>
    <p>No-Show Percentage: {{ round($noShowPercentage, 2) }}%</p>
    <p>Average Guest Number: {{ round($averageGuests, 2) }}</p>
</body>
</html>