<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @vite('resources/css/app.css') --}}
    {{-- {{@dd(@vite)}} --}}
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
    <title>SMAN 1 Margaasih</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-200 ">
        <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-lg">
          <h2 class="text-2xl font-bold mb-4">Login</h2>
          <form class="space-y-4" action="{{route('login-proses')}}" method="post">
            @csrf
            <div>
              <label for="username" class="block mb-1">Username</label>
              <input type="text" id="username" name="username" class="w-full px-4 py-2 border border-gray-300 rounded-md">
              @error('username')
              <div class="mt-4">
                <p class="text-red-600 text-sm">{{$message}}</p>
              </div>
              @enderror
            </div>
            <div>
              <label for="password" class="block mb-1">Password</label>
              <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md">
              @error('password')
              <div class="mt-4">
                <p class="text-red-600 text-sm">{{$message}}</p>
              </div>
              @enderror
            </div>
            <input type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" value="Login">   
          </form>
        </div>
      </div>
      {{-- @include('sweetalert::alert') --}}
      @if($message = Session::get('gagal'))
          <script>
            var message = @json($message);
          </script>
      @endif
</body>
</html>