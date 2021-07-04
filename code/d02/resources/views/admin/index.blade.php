<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div>
            <span style="font-weight: bold;font-size: 20pt;">ADMIN</span>
           <span style=" margin-left: 80%;"> <a href="{{url('logout')}}" style="font-size: 17pt;">LogOut</a></span>
        </div>
        
        <hr>

        <a href="{{url('/admin/create')}}">Create New</a>
        <a href="{{url('/admin/book')}}" style="margin-left: 80%">Book index</a>
        <h2>Display User</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th  >Active</th>
                    <th style="text-align: center;" >Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ds as $item)
                <tr>
                    <td id="name"> {{ $item->id }} </td>
                    <td> {{ $item->username }}</td>
                    <td> {{ $item->email }}</td> 
                    <td> {{ $item->role  ?"Admin":"User"  }}</td>
                    <td> 
                       {{ $item->active ?"Active":"in-Active" }}
                    </td>
                    <td align="center"  ><input type="button" id="reset{{$item->id}}" class="btn btn-primary" value="Reset Password"> </td>  
                   
                   <script>
                        
            
                        jQuery(function($){
                             $("#reset{{$item->id}}").click(function(e){
                            e.preventDefault();
            
                            urlq="admin/reset/{{$item->id}}";

                            $.ajax({
                                type: "get",
                                url: urlq,
                                
                                
                                dataType: "text",
                                success: function (response) {
                                    alert(response);

                                }
                            });
                    
                        });
                    
                    })
                    
                    </script>
                
                </tr>
                
                
                @endforeach
            </tbody>
            

        </table>

       
        
        

    </div>



</body>

</html>
