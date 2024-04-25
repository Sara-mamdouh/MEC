<section class="admin-container">
  <div class="category-form ">
    <h1><span>edit</span> course</h1>
    <form action="{{ route("courses.update",$course->id) }}" method="post" >
      @csrf
      @method("put")
      <div class="input-field">
        <label for="courses_name" class="form-label">name</label>
        <input type="text" class="input-control" id="courses_name" name="name" value="{{ $course->name_course}}">
      </div>
      @error("name")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror
      <div class="input-field">
        <label for="courses_topics" class="form-label">topics</label>
        <input type="text" class="input-control" id="courses_topics" name="topics" value="{{ $course->topics}}">
      </div>
      @error("topics")
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




