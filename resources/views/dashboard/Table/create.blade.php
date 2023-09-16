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
              <h1>Add Table</h1>
                <form action="{{action('App\Http\Controllers\Admin\TableController@store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" class="form-control" placeholder="Name">
                @error('price')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <select class="form-control" name="status">
                    @foreach (App\Enums\TableStatus::cases() as $Status)
               <option value="{{ $Status->value}}">{{ $Status->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location:</strong>
                <select class="form-control" name="location">
                    @foreach (App\Enums\TableLocation::cases() as $Location)
               <option value="{{ $Location->value}}">{{ $Location->name}}</option>
                    @endforeach
                </select>
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