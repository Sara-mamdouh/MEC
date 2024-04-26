<section class="diplomas" id="diplomas">
  <div class="container">
    <div class="diplomas__head">
      <h2><span>our</span> diplomas</h2>
    </div>
    <div class="diplomas__cards">
      @foreach ( $categorys as $category)
      <div class="card" >
        <div class="card__img">
          <img src="{{asset("{$category->image}")}}" alt="" />
          <div class="card__img__overlay">
            <form method="POST" action="{{route("add_cart",$category->id)}}">
              @csrf
            <input class="card__body__link" type="submit" value="Book now">
          </form>
          </div>
        </div>
        <div class="card__body">
          <h5 class="card__body__title">{{$category->category_name}}</h5>
          <p class="card__body__text">{{$category->description}}</p>
          <a class="card__body__link"
          href="{{route("categories.show",$category->id)}}"> read more</a>
        </div>
      </div>
      @endforeach
    </div>
     {{-- Pagination --}}
     {{-- <div class="d-flex justify-content-center">
      {!! $categorys->links() !!}
  </div> --}}

  </div>
</section>