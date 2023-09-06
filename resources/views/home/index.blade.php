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
        <ul class="md:flex md:items-center z-[1] md:z-auto md:static absolute bg-blue-400 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-90 top-[-400px] transition-all ease-in-out duration-500">
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
    {{-- IMAGE --}}
        <section class="bg-slate-300 h-full-20">
                <div class="relative md:w-4/5 w-full mx-auto">
                    <ul class="slider carousel ">
                        <li class="h-[30vh] relative carousel-item ">
                            <img class="h-full object-cover w-full" src="https://picsum.photos/720/720?random=1" alt="image">
                            <div class="absolute top-0 left-0 h-full w-full flex">
                                <h2 class="text-4xl font-bold text-white my-auto w-full text-center px-20">Keterangan image</h2>
                            </div>
                        </li>
                        <li class="h-[30vh] relative hidden carousel-item">
                            <img class="h-full object-cover w-full rounded-xl" src="https://picsum.photos/720/720?random=2" alt="image">
                            <div class="absolute top-0 left-0 h-full w-full flex">
                                <h2 class="text-4xl font-bold text-white my-auto w-full text-center px-20">Keterangan image</h2>
                            </div>
                        </li>
                        <li class="h-[30vh] relative hidden carousel-item">
                            <img class="h-full object-cover w-full rounded-xl" src="https://picsum.photos/720/720?random=3" alt="image">
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
            {{-- content --}}
            
            <h1 class="text-2xl font-bold w-full text-center text-white mb-3 text-whiteh-20">
                <div class="border-dashed border-2 border-white mt-4 mx-4"></div>
                New Update
                <div class="border-dashed border-2 border-white mt-4 mx-4"></div>
            </h1>
            
            <div class="grid grid-cols-1 grid-rows-1 gap-4 md:grid-cols-2 mx-3 text-gray-800">
                
                <div class="bg-white rounded-xl p-3 relative">
                    <img class="h-20 object-cover w-28 rounded-xl absolute top-1 right-1" src="https://picsum.photos/720/720?random=3" alt="image">
                    <h1 class="text-xl font-extrabold">Judul</h1>
                    <p class="text-sm">Author: <b>Luthfi</b></p>
                    <p class="text-xs font-thin italic mb-3">Tangga: {{ now()->toDateTimeString () }}</p>
                    <div class="border-dashed border-2 border-gray-400 my-2"></div>
                    <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat autem optio expedita obcaecati vel adipisci esse officia necessitatibus ratione quo nam magnam fuga a quisquam excepturi, porro molestiae delectus quibusdam?</p>
                    <a href="#" class="absolute right-3 bottom-1 text-right bg-blue-900 text-white p-2 rounded-lg hover:bg-blue-400 mt-3">Read more...</a>
                </div>
                <div class="bg-white rounded-xl p-3 relative">
                    <img class="h-20 object-cover w-28 rounded-xl absolute top-1 right-1" src="https://picsum.photos/720/720?random=3" alt="image">
                    <h1 class="text-xl font-extrabold">Judul</h1>
                    <p class="text-sm">Author: <b>Luthfi</b></p>
                    <p class="text-xs font-thin italic mb-3">Tangga: {{ now()->toDateTimeString () }}</p>
                    <div class="border-dashed border-2 border-gray-400 my-2"></div>
                    <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat autem optio expedita obcaecati vel adipisci esse officia necessitatibus ratione quo nam magnam fuga a quisquam excepturi, porro molestiae delectus quibusdam?</p>
                    <a href="#" class="absolute right-3 bottom-1 text-right bg-blue-900 text-white p-2 rounded-lg hover:bg-blue-400 mt-3">Read more...</a>
                </div>
            </div>
        </section>
</body>
</html>