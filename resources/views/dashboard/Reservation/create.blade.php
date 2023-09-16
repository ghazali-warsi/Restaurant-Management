<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      @include('dashboard.style')
    </head>
    
<body class="dashboard dashboard_1">
    <div class="full_container">
       <div class="inner_container">
          <!-- Sidebar  -->
          @include('dashboard.nav')
          <!-- end sidebar -->
          <!-- right content -->
          <div id="content">
             <!-- topbar -->
             @include('dashboard.topbar')
             <!-- end topbar -->
             <!-- dashboard inner -->
                  <!-- dashboard inner -->
                         <!-- dashboard inner -->
               <div class="midde_cont">
                <div class="container-fluid">
                   <div class="row column_title">
                      <div class="col-md-12">
                         <div class="page_title">
                         @include('dashboard.flashmessage')
                         </div>
                      </div>
                   </div>
                  

              <div class="container">
              <div class="row">
              <div class="col-6">
              <h1>Reservation</h1>
                <form action="{{action('App\Http\Controllers\Admin\ReservationController@store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>FirstName:</strong>
                <input type="text" name="firstname" class="form-control" placeholder="Name">
                @error('firstname')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>LastName:</strong>
                <input type="text" name="lastname" class="form-control" placeholder="Name">
                @error('lastname')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Name">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tel_Number:</strong>
                <input type="number" name="tel_number" class="form-control" placeholder="Name">
                @error('tel_number')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reservation_Date:</strong>
                <input type="datetime-local" name="reservation_date" class="form-control" placeholder="Name">
                @error('reservation_date')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Table_Id:</strong>
                <select class="form-control" name="table_id">
      <option>======Select Table======</option>
      @foreach($table as $tables)
      <option value="{{$tables->id}}">{{$tables->name}} ({{$tables->guest_number}}Guests)</option>
      @endforeach
</select>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Guest_Number:</strong>
                <input type="text" name="guest_number" class="form-control" placeholder="Name">
                @error('guest_number')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger">Submit</button>
        </div>
    </div>
     
</form>

</div>
</div>

@include('dashboard.script')