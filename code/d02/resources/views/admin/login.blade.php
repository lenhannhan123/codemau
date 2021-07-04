<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 align='center'>Login</h2>
        <hr>

        <form action="checklogin" class="form-group" method="POST">
        {{ csrf_field() }}
            User Name : <br>
            <input taype="text" name="user" class="form-control" id="user" required  placeholder="Press User Name">
            <br><br>

            Password : <br>
            <input type="password" class="form-control" name="password" id="password" required placeholder="Press password" >
            <br><br>

            @if ($mess!="")
                <div>
                    <h4 style="color: red">{{$mess}}</h4>
                </div>
            @endif

           

            <input type="submit"  value="Submit" class="btn btn-danger" name="btOK">
            <input type="reset" value="Reset" class="btn btn-info">
        </form>

    </div>
</body>

</html>