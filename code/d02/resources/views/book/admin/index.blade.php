<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div>
            <span style="font-weight: bold;font-size: 20pt;">List of Book </span>
           <span style=" margin-left: 80%;"> <a href="{{url('logout')}}" style="font-size: 17pt;">LogOut</a></span>
        </div>
        
        <hr>

        <a href="{{url('/admin/book/create')}}">Create New Book</a>
        <h2>Display User</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th style="text-align: center;" colspan="2" >Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ds as $item)
                <tr>
                    <td id="name"> {{ $item->id }} </td>
                    <td> {{ $item->bookname }}</td>
                    <td> {{ $item->author }}</td> 
                    <td> {{ $item->description }}</td>
                    <td> 
                        <img src="{{ url('images/'.$item->image) }}" style="width: 100px">
                       
                    </td>
                    <td align="center"><a href="{{url("admin/book/update/{$item->id}")}}"><input type="button" class="btn btn-primary" value="Edit Book"> </a></td>  
    
                    <td align="center">
                        <a href="{{url("admin/book/delete/{$item->id}")}}">
                            <input type="button"  class="btn btn-danger" value="delete Book"> 
                        </a> 
                    </td>  

                </tr>
                
                @endforeach
                
            </tbody>
            

        </table>

       
        
        

    </div>



</body>

</html>
