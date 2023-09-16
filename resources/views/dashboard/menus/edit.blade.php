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
              <h1>Add Menu</h1>
                <form action="{{action('App\Http\Controllers\Admin\MenuController@update',$menu->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')   
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{$menu->name}}">
                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <input type="text" name="description" class="form-control" placeholder="Name" value="{{$menu->description}}">
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{$menu->price}}">
                @error('price')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <strong>Image:</strong>
            				<div class="form-group">
					<input type="file" name="image" />
					<br />
					<img src="{{ asset('images/' . $menu->image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_image" value="{{ $menu->image }}" />
				</div>
			</div>


                <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categories:</strong>
                <select class="form-control" name="category">
      @foreach($cat as $category)
      <option value="{{$category->id}}" @selected($menu->categories->contains($category))>{{$category->name}}</option>
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