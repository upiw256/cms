<div class="flex-row h-screen w-3/12 bg-white drop-shadow-lg">
    <div class="flex justify-center items-center mt-4 bg-slate-100 p-4 shadow-inner">
      <img src="{{asset('./images/logo.png')}}" alt="logo sekolah" class="w-12 h-12 mr-3">
      <h1 class="font-bold font-sans ">SMAN 1 MARGAASIH</h1>
    </div>
    <div class="flex justify-start items-center h-10 w-full ml-4">
      <h1 class="font-semibold text-gray-400">MENU</h1>
    </div>
    <a href="{{route('admin.dashboard')}}">
      <div class="ml-2 mr-2 rounded p-4 hover:bg-blue-400 hover:cursor-pointer flex items-center hover:text-white font-semibold {{($active === 'dashboard') ? 'bg-blue-400 text-white' : ''}}"><i class="fa-solid fa-house"></i>
        <div class="flex justify-between w-full ml-3">
          Home <i class="fa-solid fa-chevron-right"></i>
        </div>
      </div>
    </a>
    <a href="{{route('admin.post')}}">
      <div class="ml-2 mr-2 mt-1 rounded p-4 hover:bg-blue-400 hover:cursor-pointer flex items-center hover:text-white font-semibold {{($active === 'post') ? 'bg-blue-400 text-white' : ''}}"><i class="fa-regular fa-pen-to-square"></i>
        <div class="flex justify-between w-full ml-3">
          Post <i class="fa-solid fa-chevron-right"></i>
        </div>
      </div>
    </a>
    <a href="{{route('logout')}}">
      <div class="ml-2 mr-2 mt-1 rounded p-4 hover:bg-blue-400 hover:cursor-pointer hover:text-white font-semibold"><i class="fa-regular fa-share-from-square"></i> log out</div>
    </a>
  </div>