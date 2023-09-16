<!DOCTYPE html>
<html>
<head>
    <title>Reservation Confirmation</title>
</head>
<body>
    <p>Hello,</p>
    <p>Thank you for confirming your reservation. Here are your reservation details:</p>
    <ul>
    <li>Firstnamee: {{ $reservation->firstname }} {{ $reservation->lastname }}</li>
    <li>Email {{ $reservation->email }}</li>
    <li>Tel_Number: {{ $reservation->tel_number }}</li>
    <li>Reservation Date: {{ $reservation->reservation_date }}</li>
    <li>Table ID: {{ $reservation->table_id }}</li>
    <li>Guest Number: {{ $reservation->guest_number }}</li>
        <!-- Other reservation details... -->
    </ul>
</body>
</html>
