<?php
require_once('header.php');
require_once('navbar.php');
?>



<div class="row">
<div class="large-12 columns">
<a href="<?php echo $url;?>dashboard/insert/designers" class="button">Add New</a>
<table>
  <thead>
    <tr>
    <th>Surname</th>
    <th>Label</th>
    <th>Full Name</th>
    <th>Update</th>
    <th>Delete</th>
    <th>View</th>
    </tr>
  </thead>

<tbody>

      <?php foreach($data->result() as $row) { ?>
      <tr>
      <td><?php  echo $row->surname; ?></td>

      <td><?php  echo $row->label; ?></td>

      <td> <?php  echo $row->full_name; ?></td>

      <td><a href="<?php echo $url;?>dashboard/read/designers/<?php  echo $row->surname; ?>">Update</a></td>

      <td><a href="<?php echo $url;?>dashboard/delete/designers/<?php  echo $row->surname; ?>">Delete</a></td>

      <td><a href="<?php echo $url;?>dashboard/read/designers/<?php  echo $row->surname; ?>">View</a></td>
      </tr>
      <?php } ?>

  </tbody>
</table>
</div>
</div>
<?php

require_once('footer.php')

?>
