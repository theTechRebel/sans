<?php
require_once('header.php');
require_once('navbar.php');
?>



<div class="row">
<div class="large-12 columns">
<a href="<?php echo $url;?>stocks/add/" class="button">Add New Stock Item</a>
<a href="<?php echo $url;?>dashboard/" class="button">Back to Mission Control</a>
<table>
  <thead>
    <tr>
    <th>Code</th>
    <th>Sex</th>
    <th>Item Name</th>
    <th>Price</th>
    <th>Size</th>
    <th>Quantity</th>
    <th>Designer</th>
    <th>update</th>
    <th>delete</th>
    <th>view</th>
    <th>Add Collection</th>
    </tr>
  </thead>

<tbody>

      <?php foreach($data->result() as $row) { ?>
       <tr>
      <td><?php  echo $row->code; ?></td>

      <td><?php  switch ($row->sex) {
        case 1:
          echo "Male";
        break;
        case 2:
          echo "Unisex";
        break;
        case 0:
          echo "Female";
        break;
      }

       ?></td>

      <td> <?php  echo $row->item_name; ?></td>

      <td> $<?php  echo $row->price; ?></td>

      <td><?php  echo $row->size; ?></td>

      <td><?php  echo $row->quantity; ?></td>

      <td><?php  echo $row->designer; ?></td>

      <td><a href="<?php echo $url;?>stocks/update/<?php  echo $row->code; ?>">Update</a></td>

      <td><a href="<?php echo $url;?>stocks/delete/<?php  echo $row->code; ?>">Delete</a></td>

      <td><a href="<?php echo $url;?><?php  echo $row->pic; ?>">View</a></td>

      <td><a href="<?php echo $url?>stocks/add/<?php echo $row->code;?>">Add</a></td>
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>
</div>
<?php

require_once('footer.php')

?>
