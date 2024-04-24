<section class="admin-container">
  <div class="category-form ">
    <h1><span>add</span> category</h1>
    <form action="{{ route('diplomas.store') }}" method="post"  enctype="multipart/form-data">
      @csrf
      <div class="input-field">
        <label for="category_name" class="form-label">name</label>
        <input type="text" class="input-control" id="category_name" name="name">
      </div>
    
      <div class="input-field">
        <label for="category_price" class="form-label">price</label>
        <input type="text" class="input-control" id="category_price" name="price">
      </div>
      <div class="input-field">
        <label for="category_duration" class="form-label">duration</label>
        <input type="text" class="input-control" id="category_duration" name="duration">
      </div>
      <div class="input_container">
        <input type="file" class="input-control" id="myInput" name="photo" style="visibility:hidden">
        <span title="attach file" class="attachFileSpan" onclick="document.getElementById('myInput').click()">
          Attach image
        </span>
      </div>
      {{-- ///////////////////////////////////// edit --}}
      <div class="checkbox_container">
        <h3>our courses</h3>
        @foreach ($courses as $course)
        <label class="checkbox-control" for="{{$course->id}}">
          <input type="checkbox" id="{{$course->id}}" name="select_process[{{$course->id}}]" value="{{$course->id}}" />
          <span>{{$course->name_course}}</span>
        </label>
        @endforeach
      </div>

      

      <div class="input-field">
        <textarea name="description" class="textarea-field " rows="10" placeholder="Enter your description" pattern="[a-zA-Z]{2}[a-zA-Z\s]*" required="" id="description"></textarea>
      </div>

      <div class="btn-submit">       
        <input type="submit" value="create" name="submit">
      </div>
    </form>
  </div>
</section>

    

