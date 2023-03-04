<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  
    
     <div class="contanier"> <span style="font-size: xx-large;text-align:center; display: flex;
        justify-content: center;">My Todo List  
        </span>
        <a href="/"> <button class="btn btn-primary">
     
            Add
         
    </button>
</a> 
 
</div>
<div class="conatiner">
    .<div class="table-responsive">
        {{-- {{
            $Alldata
        }} --}}
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Name </th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Alldata as $item)
                    
               
                <tr class="">
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->number}}</td>
                    <td> <a href="{{url('/Update')}}/{{$item->id}}">Update</a> </td>
                    <td> <a href="{{url('/Delete')}}/{{$item->id}}">Delete</a> </td>
                    {{-- <td> <a href="{{route('routename')}},['id'=>$item->id]">Delete</a> </td> --}}

                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>