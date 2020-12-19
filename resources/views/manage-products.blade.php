<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Management</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="row justify-content-center">
    <div class="col-12 text-center">
      <div class="text-center">
        <h1><b><u><i>Product Management</i></u></b></h1><br><br>
        <h5 class="text-danger"><i><b>{{session('msg')}}</b></i></h5><br>
      </div>
    </div>
    <div class="col-7 text-center">
    <div class="text-center">
    <br><br><input type="text" id="searchBox" name="searchtext" class="form-control" placeholder="Search User..."><br><br>
    </div>
      <div class="text-right mb-3">
        <!-- Button trigger modal -->
        <a href="/employeeHome" class="btn btn-sm btn-success float-left">Go to Home</a>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
          Insert New Product
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form class="text-center" action="/manage-product/insert" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Insert a new Product</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="text" name="name" value="" class="form-control" placeholder="Product Name"><br>
                  <input type="number" name="quantity" value="" class="form-control" placeholder="Quantity"><br>
                  <input type="number" name="price" value="" class="form-control" placeholder="Price"><br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success">Add Product</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <table id="myTable" class="table table-bordered text-center">
        <tr>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
        @if (count($product)>0)
        @for($i=0; $i < count($product); $i++) 
        <tr>
          <td>{{$product[$i]['name']}}</td>
          <td>{{$product[$i]['quantity']}}</td>
          <td>{{$product[$i]['price']}}</td>
          <td>
            <a class="btn btn-warning btn-sm btn-block" href="/manage-product/edit/{{$product[$i]['id']}}">Edit</a><br>
            <a class="btn btn-danger btn-sm btn-block" href="/manage-product/delete/{{$product[$i]['id']}}">Delete</a>
          </td>
          </tr>
          @endfor
          @endif
      </table>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="{{asset('js/userSearch.js')}}"></script>
</body>

</html>