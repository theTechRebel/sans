<?php
require_once('header.php');
require_once('navbar.php');
?>



<div class="row">
<div class="large-12 columns">
<a href="<?php echo $url;?>collections/add/" class="button">Add New Collection</a>
<a href="<?php echo $url;?>dashboard/" class="button">Back to Mission Control</a>
<table>
  <thead>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>update</th>
    <th>delete</th>
    <th>view</th>
    <th>Add Collection</th>
    </tr>
  </thead>

<tbody>

      <?php foreach($data->result() as $row) { ?>
       <tr>
      <td><?php  echo $row->id; ?></td>

      <td> <?php  echo $row->collection_name; ?></td>

      <td><a href="<?php echo $url;?>collections/update/<?php  echo $row->id; ?>">Update</a></td>

      <td><a href="<?php echo $url;?>collections/delete/<?php  echo $row->id; ?>">Delete</a></td>

      <td><a href="<?php echo $url;?>collections/view/">View</a></td>

      <td><a href="<?php echo $url?>collections/add/<?php echo $row->id;?>">Add</a></td>
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>
</div>
<?php

require_once('footer.php')

?>
