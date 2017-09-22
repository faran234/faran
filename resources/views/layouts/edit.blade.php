<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
 
<div class="container">
  <h2>Edit or Change the Profile </h2>
  <div class="panel panel-default">
    <div class="panel-body">  <h3>Company  File</h3></div>
  </div>
</div>

  <div class="container">
 <h2> Form</h2>
    <form class="form-horizontal" action="/edit/store" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Company Name </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="" placeholder="Enter text" name="name">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Address</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="" placeholder="Enter address" name="address">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Description</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="" placeholder="Enter detail" name="detail">
        </div>
      </div>
       <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Employs</label>
        <div class="col-sm-10">          
          <input type="text" class="form-control" id="" placeholder="Enter No. of Employs" name="employ">
        </div>
      </div>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <P>Are you sure that you will change the data!</P>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
</div>
 
</body>
</html>
