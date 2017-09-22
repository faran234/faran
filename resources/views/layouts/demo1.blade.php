@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>

<div class="container">		
  <div class="row">
  	<div class="col-md-10 col-md-offset-1">
  	   <img src="/uploads/avators/{{ $user->avatar}}"  style="width: 150px; height: 150px;float: left; border-radius: 50%;margin-right: 25px; ">
  		          <h2>{{ $user->name}}'s Profile</h2>
                 <form enctype="multipart/form-data" action="/demo" method="post">
                   <label>Update Profile Image</label>
                     <input type="file" name="avatar"><br>
                   <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>

                       <input type="submit" class="pull-right btn btn-primary btn-md">

                 </form>
      <hr>
  	</div>

  </div>

</div>

<div class="container">
 <h2> {{ $user->name}}'s Record  Table</h2>
   <p>The Users Information Table</p>            
    <table class="table table-bordered">
     <thead>
           <tr>
              <th>Usesr ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Avatar</th>
              <th>Password</th>
              <th>Created Date</th>
              <th>Update Date</th>
              <th>Actions</th>
          </tr>
     </thead>
       <tbody>
              <tr>
                 <td>{{ $user->id }} </td>
                 <td>{{ $user->name  }}</td>
                 <td>{{ $user->email}}</td>
                 <td>{{  $user->avatar }}</td>
                 <td>{{ $user->password }}</td>
                 <td>{{ $user->created_at }}</td>
                 <td>{{ $user->updated_at }}</td>
                 <td> 
                  <button type="button"   class="btn"><a href="{{ url('/edit') }}">Edit</a></button>
                 </td>
              </tr>
       </tbody>
  </table>
</div>
     
</body>
</html>
@endsection