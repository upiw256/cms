<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>SMAN 1 Margaasih</title>
</head>
<body>
  <div class="grid gap-0 grid-cols-7">
    <div class="flex-row h-screen w-full bg-white drop-shadow-lg">
      <div class="flex justify-center items-center mt-4 bg-slate-100 p-4 shadow-inner">
        <img src="{{asset('./images/logo.png')}}" alt="logo sekolah" class="w-12 h-12">
        <h1 class="font-bold font-sans ">SMAN 1 MARGAASIH</h1>
      </div>
      <div class="flex justify-start items-center h-10 w-full ml-4">
        <h1 class="font-semibold text-gray-400">MENU</h1>
      </div>
      <a href="/login">
        <div class="ml-2 mr-2 rounded p-4 hover:bg-blue-400 hover:cursor-pointer hover:text-white font-semibold">log out</div>
      </a>
    </div>
    <div class="bg-gray-200 h-screen col-span-6">
      {{-- konten --}}
    </div>
  </div>
</body>
</html>