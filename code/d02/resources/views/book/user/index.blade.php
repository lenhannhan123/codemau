<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
   <div style="text-align:right"> <a href="{{ url('login') }}"><input type="button" class="btn btn-success" value="Login"></a></div>
  <div class="container text-center">
    <h1>Online Store</h1>      
    <p>Mission, Vission & Values</p>
  </div>
</div>



<div class="container">    


  <div class="row">
    @foreach ($ds as $item )
        <div class="col-sm-2 col-lg-3 ">
        <div class="panel panel-primary">
            <div class="panel-heading" align="center">{{ $item->bookname }}</div>
            <div class="panel-body" align="center"><img src="{{ url('images/'.$item->image) }}" style="text-align: center" class="img-responsive" style="width:100px" alt="Image"></div>
            <div class="panel-footer"align="center">{{ $item->description }}</div>
        </div>
        </div>
        @endforeach
</div>

<br>




</body>
</html>

