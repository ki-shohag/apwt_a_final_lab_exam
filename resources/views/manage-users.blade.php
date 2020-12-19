<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Management</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="row justify-content-center">
    <div class="col-12 text-center">
      <div class="text-center">
        <h1><b><u><i>User Management</i></u></b></h1><br><br>
        <h5 class="text-danger"><i><b>{{session('msg')}}</b></i></h5><br>
      </div>
    </div>
    <div class="col-7 text-center">
    <div class="text-center">
    <br><br><input type="text" id="searchBox" name="searchtext" class="form-control" placeholder="Search User..."><br><br>
    </div>
      <div class="text-right mb-3">
        <!-- Button trigger modal -->
        <a href="/home" class="btn btn-sm btn-success float-left">Go to Home</a>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
          Insert New User
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form class="text-center" action="/manage-user/insert" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Insert a new User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="text" name="full_name" value="" class="form-control" placeholder="Full Name"><br>
                  <input type="text" name="user_name" value="" class="form-control" placeholder="User Name"><br>
                  <input type="number" name="phone" value="" class="form-control" placeholder="Phone"><br>
                  <input type="password" name="password" value="" class="form-control" placeholder="Password"><br>
                  <input type="password" name="confirm_password" value="" class="form-control" placeholder="Confirm Password"><br>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success">Add User</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <table id="myTable" class="table table-bordered text-center">
        <tr>
          <th>Full Name</th>
          <th>User Name</th>
          <th>Phone</th>
          <th>Action</th>
        </tr>
        @if (count($users)>0)
        @for($i=0; $i < count($users); $i++) 
        <tr>
          <td>{{$users[$i]['emp_name']}}</td>
          <td>{{$users[$i]['user_name']}}</td>
          <td>{{$users[$i]['phone']}}</td>
          <td>
            <a class="btn btn-warning btn-sm btn-block" href="/manage-user/edit/{{$users[$i]['emp_id']}}">Edit</a><br>
            <a class="btn btn-danger btn-sm btn-block" href="/manage-user/delete/{{$users[$i]['emp_id']}}">Delete</a>
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