<?php
require_once('header.php');
require_once('navbar.php');
?>



<div class="row">
<div class="large-12 columns">
<a href="<?php echo $url;?>dashboard/insert/stocks" class="button">Add New</a>
<table>
  <thead>
    <tr>
    <th>Code</th>
    <th>Pic</th>
    <th>Price</th>
    <th>Size</th>
    <th>Quantity</th>
    <th>Designer</th>
    <th>update</th>
    <th>delete</th>
    <th>view</th>
    </tr>
  </thead>

<tbody>

      <?php foreach($data->result() as $row) { ?>
       <tr>
      <td><?php  echo $row->code; ?></td>

      <td><?php  echo $row->pic; ?></td>

      <td> $<?php  echo $row->price; ?></td>

      <td><?php  echo $row->size; ?></td>

      <td><?php  echo $row->quantity; ?></td>

      <td><?php  echo $row->designer; ?></td>

      <td><a href="<?php echo $url;?>dashboard/read/stocks/<?php  echo $row->code; ?>">Update</a></td>

      <td><a href="<?php echo $url;?>dashboard/delete/stocks/<?php  echo $row->code; ?>">Delete</a></td>

      <td><a href="<?php echo $url;?>dashboard/read/stocks/<?php  echo $row->code; ?>">View</a></td>
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>
</div>
<?php

require_once('footer.php')

?>
