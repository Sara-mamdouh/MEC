<section class="admin-container">
  <div class="category-form ">
    <h1><span>edit</span> instrutor</h1>
    <form action="{{route("instructors.update",$instructor->id) }}" method="post"  enctype="multipart/form-data">
      @csrf
      @method("put")
      <div class="input-field">
        <label for="instructor_name" class="form-label">name</label>
        <input type="text" class="input-control" id="instructor_name" name="name" value="{{ $instructor->instructor_name}}">
      </div>
      @error("name")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror
      <div class="input-field">
        <label for="instructor_job" class="form-label">job</label>
        <input type="text" class="input-control" id="instructor_job" name="job" value="{{ $instructor->job}}">
      </div>
      @error("job")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror
      <div class="input-field">
        <label for="instructor_experience" class="form-label">experience</label>
        <input type="text" class="input-control" id="instructor_experience" name="experience" value="{{ $instructor->experience}}">
      </div>
      @error("experience")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror
      
      <div class="input_container">
        <input type="file" class="input-control" id="instructor_image" name="photo" style="visibility:hidden">
        <span title="attach file" class="attachFileSpan" onclick="document.getElementById('instructor_image').click()">
          Attach image
        </span>
      </div>
      @error("photo")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror

      <div class="input-field">

        <select id="" name="category" class="different">
          @foreach ($categorys as $category)

          <option value="{{$category->id}}" @selected($category->id == $instructor->category_id)>
            {{$category->category_name}}
          </option>
          @endforeach

          </select>
      </div>
      @error("category")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror


      <div class="btn-submit">       
        <input type="submit" value="update" name="submit">
      </div>
    </form>
  </div>
</section>


