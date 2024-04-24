<section class="admin-container">
  <div class="category-form ">
    <h1><span>add</span> course</h1>
    <form action="{{ route('courses.store') }}" method="post" >
      @csrf
      <div class="input-field">
        <label for="courses_name" class="form-label">name</label>
        <input type="text" class="input-control" id="courses_name" name="name">
      </div>
    
      <div class="input-field">
        <label for="courses_topics" class="form-label">topics</label>
        <input type="text" class="input-control" id="courses_topics" name="topics">
      </div>
    

      <div class="btn-submit">       
        <input type="submit" value="create" name="submit">
      </div>
    </form>
  </div>
</section>

    

