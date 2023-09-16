<!DOCTYPE html>
<html>
<head>
    <title>Reservation Reminder</title>
</head>
<body>
    <p>Hello {{ $reservation->firstname }} {{ $reservation->lastname }}</p>
    <p>Email: {{ $reservation->email }}</p>
    <p>Tel_Number: {{ $reservation->tel_number }}</p>
    <p>Reservation Date: {{ $reservation->reservation_date }}</p>
    <p>Table ID: {{ $reservation->table_id }}</p>
    <p>Guest Number: {{ $reservation->guest_number }}</p>
    <!-- Other reservation details... -->
</body>
</html>