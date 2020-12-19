<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="text-center">
            <h1><b><u><i>Login</i></u></b></h1><br><br>
            </div>
        </div>
        <div class="col-4 text-center">
            <h5 class="text-danger"><i><b>{{session('msg')}}</b></i></h5><br>
            <form class="text-center" action="/login" method="post">
                @csrf
                <input type="text" name="user_name" class="form-control" placeholder="User Name"><br>
                <input type="password" name="password" class="form-control" placeholder="Password"><br>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <a href="/signup">Not Registered? Sign Up.</a>
        </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>