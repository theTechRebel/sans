<?php
require_once('header.php');
require_once('navbar.php');
?>



<div class="row">
<div class="large-12 columns">
<a href="<?php echo $url;?>designers/add/" class="button">Add New</a>
<a href="<?php echo $url;?>dashboard/" class="button">Back to Mission Control</a>
<table>
  <thead>
    <tr>
    <th>Surname</th>
    <th>Label</th>
    <th>Full Name</th>
    <th>Update</th>
    <th>Delete</th>
    </tr>
  </thead>

<tbody>

      <?php foreach($data->result() as $row) { ?>
      <tr>
      <td><?php  echo $row->surname; ?></td>

      <td><?php  echo $row->label; ?></td>

      <td> <?php  echo $row->full_name; ?></td>

      <td><a href="<?php echo $url;?>designers/update/<?php  echo $row->surname; ?>">Update</a></td>

      <td><a href="<?php echo $url;?>designers/delete/<?php  echo $row->surname; ?>">Delete</a></td>
      </tr>
      <?php } ?>

  </tbody>
</table>
</div>
</div>
<?php

require_once('footer.php')

?>
