<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> @yield("title")-CRUD Laravel</title>
</head>
<body class="bg-gray-100 text-gray-800 ">

    <nav class="flex justify-between bg-black text-white items-center h-20 px-20">

        <div class=" text-4xl">
            Chiwi Academy
        </div>
    @if(auth()->check())
    <div class="flex gap-x-4 ">
         <p class="text-white text-2xl">Bienvenido {{auth()->user()->name}}</p>
         <a href="{{route("login.destroy")}}" class="text-red-700 border-2 border-red-700 bg-red-300 text-black rounded-lg px-2">
            Log Out
        </a>
    </div>
    @else
    <div class="flex gap-10">
        <a href="{{route("login.index")}}" class="border-2 border-white rounded-lg px-2">
       Login
       </a>

       <a href="{{route("register.index")}}" class="border-2 border-white rounded-lg px-2">
           Register
       </a>
   </div>
    @endif
 
    </nav>


@yield('content')





</body>
</html>
