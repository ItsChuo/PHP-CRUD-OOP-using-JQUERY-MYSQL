<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src = "myjs.js"></script>
    <link rel="stylesheet" href="css\bootstrap.css">
    <script src="jquery.js"></script>
    <script src="js\bootstrap.js"></script>
   
    
    <title>Document</title>
</head>
<body onload="viewmydatas()">


 <div class="container">

 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Data</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Data</h4>
      </div>
      <div class="modal-body">
<form >
            <div class="form-group">
                <label for="">Name:</label>
                <input type="text" class="form-control" id="nm">
            </div>
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="email" class="form-control" id="em">
            </div>
            <div class="form-group">
                <label for="">Address:</label>
                <input type="text" class="form-control" id="ad">
            </div>
           
            <button type="submit" class="btn btn-default" onclick="Addmydata()"data-dismiss="modal"><span class="glyphicon glyphicon-plus"></span>Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     
    </tbody>
  </table>
</div>


</body>
<script src="jquery.js"></script>
</html>