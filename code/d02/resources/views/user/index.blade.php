<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Detail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" >

        <div>
            <span style="font-weight: bold;font-size: 20pt;">USER</span>
           <span style=" margin-left: 80%;"> <a href="{{url('logout')}}" style="font-size: 17pt;">LogOut</a></span>
        </div>
        <hr>
        <div>
        <h2> User Information </h2>
        </div>
    <form class="form-horizontal">


        <div class="form-group">
            <label class="control-label col-lg-3">Id</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" readonly value="{{$ds->id}}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-lg-3">User Name</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="name" name="name" readonly value="{{$ds->username}}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-lg-3">Password</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="name" name="name"readonly value="{{$ds->password}}">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-lg-3">email</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="name" name="name"readonly value="{{$ds->email}}">
            </div>
        </div>


    
        <a href=""><input type="button" class="btn btn-success" value="Back"></a>
            



    </form>
        
        

    </div>



</body>

</html>
