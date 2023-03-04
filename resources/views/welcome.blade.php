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
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('failure'))
        <div class="alert alert-success">{{Session::get('failure')}}</div>
        @endif
        @csrf
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input type="text" name="name" placeholder="Enter your name" value="{{old('name')}}">
      <br>
        @error('email')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
       <input type="text" name="email" placeholder="Enter your email" value="{{old('email')}}">
     <br>
       @error('number')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
         <br>
       <input type="number" name="number" placeholder="Enter your number" value="{{old('number')}}">
         <br>
       <button type="submit" name="submit " class="btn btn-primary">Submit</button>
       </form>
       
    </div>
    
    
  </body>
</html>