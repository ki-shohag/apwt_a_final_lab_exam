<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Home</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="text-center">
            <h1>Welcome, {{$user['user_name']}}</h1><br><br>
            </div>

            <table class="table table-hover table-bordered">
                <tr>
                    <td>Full Name: </td>
                    <td>{{$user['emp_name']}}</td>
                </tr>
                <tr>
                    <td>User Name: </td>
                    <td>{{$user['user_name']}}</td>
                </tr>
                <tr>
                    <td>Company Name: </td>
                    <td>{{$user['company_name']}}</td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td>{{$user['phone']}}</td>
                </tr>
            </table><br><br>
            <div class="text-center">
                <a class="btn btn-success btn-block btn-sm" href="/manage-product">Manage Products</a>
                <a class="btn btn-danger btn-block btn-sm" href="/logout">Logout</a>
            </div>
        </div>
    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>