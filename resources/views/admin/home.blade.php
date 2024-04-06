<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <h1>hello admin</h1>
  <ul>
    <li><a href="{{route('diplomas.create')}}">catigory</a>
      
    </li>
    {{-- action="{{route('products.index')}}" --}}
    <li>
      <a href="#ui-basic">courses</a>
      <div id="ui-basic">
        <ul>
          <li> <a href="{{route('courses.create')}}">>add course</a></li>
          <li><a href="">show course</a></li>
        </ul>
      </div>
    </li>
    <li><a href="{{route('instructors.create')}}">instractor</a></li>

  </ul>

</x-app-layout>

