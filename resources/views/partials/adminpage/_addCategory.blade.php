<section class="admin-container">
  @if(session()->has("requestStatus"))
  <div x-data="{ open: true }" x-init="setTimeout( () => open = false,3000)"> 
     <div x-show="open" class="alert alert-success">
        {{ session('requestStatus')}}  
    </div> 
  </div>
  @endif

  <div class="category-form ">
    <h1><span>add</span> category</h1>
    <form action="{{ route('categories.store') }}" method="post"  enctype="multipart/form-data">
      @csrf
      <div class="input-field">
        <label for="category_name" class="form-label">name</label>
        <input type="text" class="input-control" id="category_name" name="name" required>
      </div>
      @error("name")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror
    
      <div class="input-field">
        <label for="category_price" class="form-label">price</label>
        <input type="text" class="input-control" id="category_price" name="price">
      </div>
      @error("price")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror
      <div class="input-field">
        <label for="category_duration" class="form-label">duration</label>
        <input type="text" class="input-control" id="category_duration" name="duration">
      </div>
      @error("duration")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror
      <div class="input_container">
        <input type="file" class="input-control" id="myInput" name="photo" style="visibility:hidden" required>
        <span title="attach file" class="attachFileSpan" onclick="document.getElementById('myInput').click()">
          Attach image
        </span>
      </div>
      @error("photo")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror
      <div class="checkbox_container">
        <h3>our courses</h3>
        @foreach ($courses as $course)
        <label class="checkbox-control" for="{{$course->id}}">
          <input type="checkbox" id="{{$course->id}}" name="select_process[{{$course->id}}]" value="{{$course->id}}" />
          <span>{{$course->name_course}}</span>
        </label>
        @endforeach
      </div>
      @error("select_process")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror

    
      <div class="input-field">
        <textarea name="description" class="textarea-field " rows="10" placeholder="Enter your description" pattern="[a-zA-Z]{2}[a-zA-Z\s]*" required="" id="description"></textarea>
      </div>
      @error("description")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror

      <div class="btn-submit">       
        <input type="submit" value="create" name="submit">
      </div>
    </form>
  </div>
</section>

    

