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
             <h1 style="margin-left: 50px">Add Category</h1>

			 <form method="post" action="{{action('App\Http\Controllers\Admin\CategoryController@update',$category->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" value="{{$category->name}}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Description</label>
				<div class="col-sm-10">
					<input type="text" name="description" class="form-control" value="{{$category->description}}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Image</label>
				<div class="col-sm-10">
					<input type="file" name="image" />
					<br />
					<img src="{{ asset('images/' . $category->image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_image" value="{{ $category->image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $category->id }}" />
				<input type="submit" class="btn btn-danger" value="Edit category" />
			</div>	
		</form>

</div>
</div>

@include('dashboard.script')