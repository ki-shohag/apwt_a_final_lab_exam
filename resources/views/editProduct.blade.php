<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <div class="text-center">
            <h1><b><u><i>Edit Product</i></u></b></h1><br><br>
            </div>
        </div>
        <div class="col-5 text-center">
            <h5 class="text-danger"><i><b>{{session('msg')}}</b></i></h5><br>
            <br><a href="/manage-product" class="btn btn-success btn-sm float-left">Go Back</a><br><br>
            <form class="text-center" action="/manage-product/edit/{{$product['id']}}" method="post">
                @csrf
                <input type="text" name="name" value="{{$product['name']}}" class="form-control" placeholder="Product Name"><br>
                <input type="number" name="quantity" value="{{$product['quantity']}}" class="form-control" placeholder="Quantity"><br>
                <input type="number" name="price" value="{{$product['price']}}" class="form-control" placeholder="Price"><br>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>