<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 align='center'>Update Book</h2>
        <hr>

        <form action="{{url("admin/book/update")}}" class="form-group" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
             Book ID : <br>
            <input taype="text" name="bookid" class="form-control" id="bookid" value="{{$ds->id}}" required readonly  >
            <br><br>
            Book Name : <br>
            <input taype="text" name="bookname" class="form-control" id="bookname"  value="{{$ds->bookname}}"required   >
            <br><br>

            Author : <br>
            <input type="text" class="form-control" name="Author" id="Author" value="{{$ds->author}}" required  >
            <br><br>

            Description : <br>
            <input type="text" class="form-control" name="Description" value="{{$ds->description}}" id="Description" p  >
            <br><br>

            Image : <br>
                <img style="width: 200px" name="image111" src="{{ url('images/'.$ds->image) }}" >
            <br><br>
       
            Upload image : <br>
            
            
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="customFile" name="filename" multiple accept='image/*' >
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <script>
                // Add the following code if you want the name of the file appear on select
                $(".custom-file-input").on("change", function() {
                  var fileName = $(this).val().split("\\").pop();
                  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
            </script>

            <input type="submit"  value="Submit" class="btn btn-danger" name="btOK">
            <input type="reset" value="Reset" class="btn btn-info">
        </form>

       
      <h4 style="color: red">{{$mess}}</h4>
        
      

    </div>
</body>

</html>