@extends('dashboard.layout.content')

@section('container')
<div class="p-3">
    <div class="bg-white rounded shadow-inherit p-3 mb-3">
        <div class="text-2xl font-extrabold font-sans">POST</div>
    </div>
    
    <div class="bg-white rounded shadow-inherit p-3" x-data="{ showTable: true, showForm: false }">
      @if ($errors->any())
          <div id="alert" class="fixed top-4 right-4 z-50 transition-opacity duration-500 opacity-100">
                  @foreach ($errors->all() as $error)
                  <div  class="bg-red-500 text-white p-4 rounded shadow-lg mb-3 ">
                      {{ $error }}
                  </div>
                  @endforeach
          </div>
      @endif
        <div class="font-sans">
            <button class="bg-blue-400 p-3 rounded-lg text-white hover:bg-blue-300" @click="showTable = !showTable; showForm = !showForm"><i class="fa-regular fa-square-plus"></i> Add Post</button>
            <form x-show="showForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{route('post-proses')}}" enctype="multipart/form-data">
                @csrf
                <input type="text" id="name" name="title" class="mb-3 border-2 w-full h-10 p-2 border-gray-300 rounded-md" placeholder="Judul Post">
                
                <div class="flex-1 items-center justify-center p-8" >
                    <label for="image" class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue-400 rounded-lg shadow-lg tracking-wide uppercase border border-blue-400 cursor-pointer hover:bg-blue-400 hover:text-white">
                        <i class="fa-regular fa-image fa-xl"></i>
                        <span class="mt-2 text-base leading-normal">Pilih gambar</span>
                        <input name="image" type="file" class="hidden" id="image" accept="image/*">
                    </label>
                </div>                               
                <div id="imagePreview" class="my-3"></div>
                {{-- <button id="button"  type="button" onclick="deleteImage()" class="bg-blue-400 p-3 rounded-lg text-white hover:bg-blue-300 my-3">Hapus Gambar</button> --}}
                <textarea name="isi" id="editor" cols="30" class="h-56"></textarea>
                <input type="submit" value="Posting" class="bg-blue-400 p-3 rounded-lg text-white hover:bg-blue-300 mt-3 w-full cursor-pointer">
            </form>
            <div class="flex flex-col mt-2">
                    <table class="text-center text-sm font-light" x-show="showTable">
                        <thead
                          class="border-b bg-neutral-50 font-medium dark:border-neutral-500 dark:text-neutral-800">
                          <tr>
                            <th scope="col" class=" px-6 py-4">#</th>
                            <th scope="col" class=" px-6 py-4">Judul</th>
                            <th scope="col" class=" px-6 py-4">isi</th>
                            <th scope="col" class=" px-6 py-4">thumbnail</th>
                            <th scope="col" class=" px-6 py-4">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach($data as $item)
                          <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap  px-6 py-4 font-medium">{{$no++}}</td>
                            <td class="whitespace-nowrap  px-6 py-4">{{$item->title}}</td>
                            <td class="whitespace-nowrap  px-6 py-4">{!! html_entity_decode($item->isi) !!}</td>
                            <td class="whitespace-nowrap  px-6 py-4 h-14 w-14">
                              <img src="{{ asset('storage/upload/'.$item->img) }}" alt="{{$item->img}}" >
                            </td>
                            <td class="whitespace-nowrap  px-6 py-4"><i class="fa-solid fa-pen-to-square"></i> Edit | Hapus</td>
                          </tr>
                          {{ $page->links() }}
                          @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection