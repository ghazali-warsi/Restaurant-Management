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
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      @include('dashboard.style')
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
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
           <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                           @include('dashboard.flashmessage')
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{ $totalReservations }}</p>
                                    <p class="head_couter">Number of Reservation</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-comments-o red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{$totalOrder}}</p>
                                    <p class="head_couter">Number os Orders</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-table blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{ $totaltable}}</p>
                                    <p class="head_couter">Number of Tables</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-cloud-download green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">{{$totalmenu}}</p>
                                    <p class="head_couter">Number of Dishes</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                    
     <!-- table -->
   

     <a href="{{action('App\Http\Controllers\StaffController@create')}}"class="btn btn-danger" > <span>Add Staff Menber</span></a>

     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Imaage</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($staffMembers as $staffMember)
    <tr>
    <td>{{$staffMember->name}}</td>
    <td>{{$staffMember->designation}}</td>
    <td><img src="{{ asset('images/' . $staffMember->image) }}" width="75" /></td>
    <td>
    <form action="{{ route('staff.destroy', $staffMember->id) }}" method="POST" onsubmit="return confirm('Are you sure')">
        @csrf
        @method('DELETE')
        <a href="{{ action('App\Http\Controllers\StaffController@edit', $staffMember->id) }}" class="btn btn-warning" style="background: transparent; border: none;">
            <i class="fas fa-edit"></i> <!-- Edit icon -->
        </a>
        <button type="submit" class="btn btn-danger" style="background: red; border: none;">
            <i class="fas fa-trash-alt"></i> <!-- Delete icon -->
        </button>
    </form>
</td>   
      
    </tr>
    @endforeach
  </tbody>
</table>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                           Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      @include('dashboard.script')
   </body>
</html>