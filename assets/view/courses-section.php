<!-- courses Section -->

<div class="col-md-6 col-lg-4 order-3 order-lg-1 bg-sections">
<ul class="list-group">
<li class="list-group-item d-flex justify-content-between align-items-center">
  <h4>Courses</h4>
    <div  align=right>
        <button name='add-course' class='btn btn-danger'>+</button>
    </div>
  </li>
  <?php foreach ($allCourses as $index => $course) {
    
  ?>  
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <button name='course<?php echo $course->course_id ?>' type='submit' value='<?php echo $course->course_id ?>' class='btn section-btn'>
      <div class="row">
        <div class="col-5 mr-2">
          <img style="width:100px; height:100px;" src="..\uploads\courses\courses-cover-images\<?php echo $course->course_image ?>" alt="course-image">
        </div>
        <div class="col-5 mr-2">
          <p><?php echo $course->course_name ?></p>
          <span>Enrolled</span>
          <span class="badge badge-primary badge-pill">14</span>
          <br />
          <span>Places Left</span>
          <span class="badge badge-primary badge-pill">16</span>
        </div>
      </div>
    </button>
  </li>
  <?php
  } 
  ?>
</ul>
</div>
