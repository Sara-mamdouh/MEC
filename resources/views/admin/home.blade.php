<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <h1>hello admin</h1>
  <ul>
    <li><a href="{{route('diplomas.create')}}">catigory</a></li>
    {{-- action="{{route('products.index')}}" --}}
    <li>
      <a href="#ui-basic">product</a>
      <div id="ui-basic">
        <ul>
          <li> <a href="">add product</a>
          </li>
          <li><a href="">show product</a></li>
        </ul>
      </div>
     

    </li>
  </ul>

</x-app-layout>

