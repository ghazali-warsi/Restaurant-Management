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
                                    <p class="head_couter">Number of Orders</p>
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
     <br>
     <h1>Orders Detail</h1>
    @csrf
<table class="table table-striped ">
                <thead>
                    <tr>
                    <!-- <th>Id</th> -->
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <!-- <th>User_ID</th> -->
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>image</th>
                        <th>Product Tittle</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Delivered</th>
                        <th>Print</th>
                        
                    
</tr>

    @foreach($order as $order)
    <td>{{$order->name}}</td>
    <td>{{$order->email}}</td>
    <td>{{$order->phone}}</td>
    <td>{{$order->address}}</td>
    <!-- <td>{{$order->user_id}}</td> -->
    <td>{{$order->quantity}}</td>
    <td>{{$order->price}}</td>
    <td><img src="{{ asset('images/' . $order->image) }}" width="75" /></td>
    <td>{{$order->menus_name}}</td>
    <td>{{$order->payment_status}}</td>
    <td>{{$order->delivery_status}}</td>
    <td>
        @if($order->delivery_status=='processing')

        <a href="{{url('delivered',$order->id)}}"onclick="return confirm('Are you sure this product is delivered !!!')"class="btn btn-success">Delivered</a>
        @else
        <p>Delivered</p>




        @endif
    </td>
    <td><a href="{{url('print_pdf',$order->id)}}"class="btn btn-danger">PDF</a></td>
</tr>
 
    @endforeach
    </tbody>
 </table>                  </div>
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