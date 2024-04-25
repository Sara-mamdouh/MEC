<section class="admin-container">
  @if(session()->has("requestStatus"))
  <div x-data="{ open: true }" x-init="setTimeout( () => open = false,3000)"> 
     <div x-show="open" class="alert alert-success">
        {{ session('requestStatus')}}  
    </div> 
  </div>
  @endif
  <div class="category-form ">
    <h1><span>add</span> course</h1>
    <form action="{{ route('courses.store') }}" method="post" >
      @csrf
      <div class="input-field">
        <label for="courses_name" class="form-label">name</label>
        <input type="text" class="input-control" id="courses_name" name="name">
      </div>
      @error("name")
      <div class="alert error-mess">
        {{ $message }}    
      </div>        
      @enderror
      <div class="input-field">
        <label for="courses_topics" class="form-label">topics</label>
        <input type="text" class="input-control" id="courses_topics" name="topics">
      </div>
      @error("topics")
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

    

