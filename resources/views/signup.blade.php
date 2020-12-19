<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="text-center">
            <h1><b><u><i>Sign Up</i></u></b></h1><br><br>
            </div>
        </div>
        <div class="col-4 text-center">
            
            @foreach($errors->all() as $err)
                <span class="text-danger">*{{$err}}</span><br>
            @endforeach
            <h5 class="text-danger"><i><b>{{session('msg')}}</b></i></h5><br>
            <form class="text-center" action="/signup" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="full_name" value="{{old('full_name')}}" class="form-control" placeholder="Full Name"><br>
                <input type="text" name="user_name" value="{{old('user_name')}}" class="form-control" placeholder="User Name"><br>
                <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email"><br>
                <input type="number" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Phone"><br>
                <input type="text" name="company_name" value="{{old('company_name')}}" class="form-control" placeholder="Compnay Name"><br>
                <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Password"><br>
                <input type="password" name="confirm_password" value="{{old('confirm_password')}}" class="form-control" placeholder="Confirm Password"><br>
                <input type="file" name="profile_pic" value="{{old('profile_pic')}}" class="form-control"><br>
                <button type="submit" class="btn btn-primary btn-block ">Sign Up</button>
            </form>
            <a href="/login">Already Registered? Sign In.</a>
        </div>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>