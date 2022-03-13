<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

    <div class="container">

    <table class="table table-border">
        
    <tr>
      <th></th>
      <td></td>
      <td></td>
      <td></td>
      <td><a class="btn btn-success" href="{{route('employeelist')}}">My profile</a></td>
      <br>

</tr>
    
    
    <tr>
            <th>customer </th>
            <td><a class="btn btn-primary" href="{{route('customerlist')}}">customer list</a></td>
            <td><a class="btn btn-primary" href="{{route('addcustomer')}}">Add customer</a></td>
            <td><a class="btn btn-primary" href="{{route('customerpermissionlist')}}">customer Permission</a></td>

        </tr>

        <tr>
            <th>Service Provider </th>
            <td><a class="btn btn-primary" href="{{route('Servicprovider')}}">service provider list</a></td>
            <td><a class="btn btn-primary" href="{{route('addServicprovider')}}">Add service provider</a></td>
            <td><a class="btn btn-primary" href="{{route('invalidServicprovider')}}">invalid service provider</a></td>

        </tr>
    </table>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>