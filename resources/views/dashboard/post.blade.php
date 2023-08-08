@extends('dashboard.layout.content')

@section('container')
<div class="p-3">
    <div class="bg-white rounded shadow-inherit p-3 mb-3">
        <div class="text-2xl font-extrabold font-sans">POST</div>
    </div>
    
    <div class="bg-white rounded shadow-inherit p-3" x-data="{ showTable: true, showForm: false }">
        <div class="font-sans">
            <button class="bg-blue-400 p-3 rounded-lg text-white hover:bg-blue-300" @click="showTable = !showTable; showForm = !showForm"><i class="fa-regular fa-square-plus"></i> Add Post</button>
            <form x-show="showForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </form>
            <div class="flex flex-col mt-2">
                    <table class="text-center text-sm font-light" x-show="showTable">
                        <thead
                          class="border-b bg-neutral-50 font-medium dark:border-neutral-500 dark:text-neutral-800">
                          <tr>
                            <th scope="col" class=" px-6 py-4">#</th>
                            <th scope="col" class=" px-6 py-4">Judul</th>
                            <th scope="col" class=" px-6 py-4">isi</th>
                            <th scope="col" class=" px-6 py-4">cover</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap  px-6 py-4 font-medium">1</td>
                            <td class="whitespace-nowrap  px-6 py-4">Mark</td>
                            <td class="whitespace-nowrap  px-6 py-4">Otto</td>
                            <td class="whitespace-nowrap  px-6 py-4">@mdo</td>
                          </tr>
                          <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap  px-6 py-4 font-medium">2</td>
                            <td class="whitespace-nowrap  px-6 py-4 ">Jacob</td>
                            <td class="whitespace-nowrap  px-6 py-4">Thornton</td>
                            <td class="whitespace-nowrap  px-6 py-4">@fat</td>
                          </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@endsection