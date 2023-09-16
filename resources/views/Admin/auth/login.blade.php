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


<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h1 class="text-center mb-4">Login Here</h1>
                                  
                                    <form action="{{route('login.post')}}" method="post">
                                    @csrf
                                        <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" class="form-control" value="" name="email" placeholder="Email">
                                            @if($errors->has('email'))
                                            <label><strong style ="color: red">{{$errors->first('email')}}</strong></label>
                                            @endif
                                           
                                        </div>
                                        <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input type="password" class="form-control" value="" name="password" placeholder="Password">
                                        @if($errors->has('password'))
                                        <label><strong style ="color: red">{{$errors->first('password')}}</strong></label>
                                        @endif
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="/forget">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-danger btn-block" >Login</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="{{route('register')}}">Sign up</a></p>
                                    </div>
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