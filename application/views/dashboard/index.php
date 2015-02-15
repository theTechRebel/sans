<?php
//exposed variables
//echo $usertype;
//echo "<br/>";
//echo $user;
//echo "<br/>";
//echo $page;

require_once('header.php');
require_once('navbar.php');

?>



<?php

if($usertype == "admin"){
//One for us as the administration that can allow us to send, receive orders to
//and from the sales reps and the fashion designers and monitor stock in the database. -->

require_once('admin_view.php');

} elseif ($usertype == "sales") {
//One for the sales rep that will allow them to make an order and payments to us. -->

require_once('sales_view');

} elseif ($usertype == "designer") {
//One for the designers that will allow them to receive orders from us. -->

require_once('designer_view');

}

?>

<?php require_once('footer.php')  ?>
