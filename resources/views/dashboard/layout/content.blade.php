@include('dashboard.layout.header')
<body>
  <div class="flex h-screen">
    @include('dashboard.layout.menu')
    <div class="bg-gray-200 h-screen w-full">
      @yield('container')
    </div>
  </div>
</body>
</html>