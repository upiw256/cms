<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/index.js'])
    <title>SMAN 1 Margaasih</title>
</head>
<body>
    <nav class="p-5 w-full bg-blue-400 text-white justify-start items-center shadow md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center">
            <span class="text-2xl">
                <img src="{{asset('/images/logo.png')}}" alt="logo" class="h-10 inline">
                SMAN 1 MARGAASIH
            </span>
            <div class="md:hidden block">
                <span id="menu" class="text-3xl cursor-pointer material-icons mx-2" >
                    menu
                </span>
            </div>
        </div>
        <ul class="md:flex md:items-center z-[10] md:z-auto md:static absolute bg-blue-400 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-80 top-[-400px] transition-all ease-in-out duration-500">
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl hover:text-gray-400 duration-500 p-3 rounded">Home</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl hover:text-gray-400 duration-500 p-3 rounded">Berita</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-xl hover:text-gray-400 duration-500 p-3 rounded">Kontak</a>
            </li>
        </ul>
    </nav>
    {{--  --}}
    <section class="">
        <div class="relative">
            <ul class="slider carousel">
                <li class="h-[50vh] relative carousel-item">
                    <img class="h-full object-cover w-full" src="https://picsum.photos/720/720?random=1" alt="image">
                    <div class="absolute top-0 left-0 h-full w-full flex">
                        <h2 class="text-4xl font-bold text-white my-auto w-full text-center px-20">Keterangan image</h2>
                    </div>
                </li>
                <li class="h-[50vh] relative hidden carousel-item">
                    <img class="h-full object-cover w-full" src="https://picsum.photos/720/720?random=2" alt="image">
                    <div class="absolute top-0 left-0 h-full w-full flex">
                        <h2 class="text-4xl font-bold text-white my-auto w-full text-center px-20">Keterangan image</h2>
                    </div>
                </li>
                <li class="h-[50vh] relative hidden carousel-item">
                    <img class="h-full object-cover w-full" src="https://picsum.photos/720/720?random=3" alt="image">
                    <div class="absolute top-0 left-0 h-full w-full flex">
                        <h2 class="text-4xl font-bold text-white my-auto w-full text-center px-20">Keterangan image</h2>
                    </div>
                </li>
            </ul>
            <div class="absolute px-5 flex w-full h-full top-0 left-0">
                <div class="my-auto w-full flex justify-between">
                    <div class="bg-white p-5 rounded-full bg-opacity-80 cursor-pointer" id="prev">
                        <span class="material-icons">
                            arrow_back_ios
                        </span>
                    </div>
                    <div class="bg-white p-5 rounded-full bg-opacity-80 cursor-pointer" id="next">
                        <span class="material-icons">
                            arrow_forward_ios
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>