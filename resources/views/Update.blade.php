<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!doctype html>
    <html lang="en">
      <head>
        <title> Todo List</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {{-- D:\xampp\htdocs\TodoList\resources\assets\icon.png/ --}}
        <link rel="icon" type="image/png" href="{{ asset('icon.png') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('assest/icon.png') }}"> --}}
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      </head>
      <body>
          
        <div class="contanier" style="align-content: center;text-align:center;">
           <form action="" method="post">
          
            @csrf
           
            {{-- @foreach ($UpdateData as $Pdata) --}}
                    
               
            
            @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
            <input type="text" name="name" placeholder="Enter your name" value="{{$UpdateData->name}}">
            <br>
            @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <br>
           <input type="text" name="email" placeholder="Enter your email" value="{{$UpdateData->email}}">
           @error('number')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <br>
           <input type="number" name="number" placeholder="Enter your number" value="{{$UpdateData->number}}">
        <br>
           <button type="submit" name="submit " class="btn btn-primary">update</button>
           {{-- @endforeach --}}
           </form>
           
        </div>
        
        
      </body>
    </html>
  </body>
</html>