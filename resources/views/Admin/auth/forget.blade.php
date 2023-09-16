<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    @include('Admin.partials.style')
</head>

@if($errors->any())
    @foreach ($errors->all() as $error)
    <p style ="color: red" >{{$error}}</p>
    @endforeach
@endif


<body class="h-100">
<div class="authincation h-100">
<div class="container-fluid h-100">
<div class="row justify-content-center h-100 align-items-center">
<div class="col-md-6  ">
<div class="authincation-content">
<div class="row no-gutters">
<div class="col-xl-12">
<div class="auth-form">



@if(Session::has('error'))
<p class="text-danger">{{Session::get('error')}}</a>
@endif

@if(Session::has('success'))
<p class="text-green">{{Session::get('success')}}</a>
@endif
<h1 class="text-center mb-4">Reset Password</h1>
<form action="{{route('forgetpassword')}}" method="post">

@csrf
<div class="form-group">

@if($errors->has('email'))
<label><strong>{{$errors->first('email')}}</strong></label>
@endif
<label><strong>Email</strong></label>

<input type="email" class="form-control" value="" name="email" placeholder="Enter Your Email">

</div>

    
<div class="text-center">
 <button type="submit"  class="btn btn-danger btn-block" style="background-color: white; color: red;border: 1px solid red;">forget password</button>
</div>
<br>
<div class="form-group">
    <a href="/" class="btn btn-danger btn-block" style="background-color: white; color: red;border: 1px solid red;">Login</a>
</div>
</form>
                                    

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
  @include('Admin.partials.script')

</body>

</html>