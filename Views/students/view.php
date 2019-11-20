<div class="row">
    <div class="col-md-12">
        <a href="index.php?action=add" class="btn btn-success">Add New</a>
    </div>
</div>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fullname</th>
      <th scope="col">Class</th>
      <th scope="col">Mark</th>
      <th scope="col">Sex</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php 
    if(isset($data['student_data'])){
        foreach ($data['student_data'] as $rows) {
        
  ?>
  <tbody>
    <tr>
      <td><?php echo $rows['id'];?></td>
      <td><?php echo $rows['name'];?></td>
      <td><?php echo $rows['class'];?></td>
      <td><?php echo $rows['mark'];?></td>
      <td><?php echo $rows['sex'];?></td>
      <td>
        <a href="index.php?action=detail&id=<?php echo $rows['id'];?>"><i class="material-icons">remove_red_eye</i></a>
        <a href="index.php?action=edit&id=<?php echo $rows['id'];?>"><i class="material-icons">edit</i></a>
        <a href="index.php?action=delete&id=<?php echo $rows['id'];?>"><i class="material-icons">delete</i></a>
            
      </td>
    </tr>
  </tbody>
  <?php
        }
    }
  ?>
</table>
