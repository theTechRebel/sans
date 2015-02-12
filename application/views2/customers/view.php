<?php
require_once('header.php');
?>



<div class="row">
  <div class="large-12 columns">

        <div class="panel callout">
        <h1>My Account:</h1> <br/>
        <h3><?php echo $fname;?> <?php echo $sname;?></h3>
        <h1>Customer Contact Details:</h1> <br/>
        <h3>Cell:<?php echo $phone;?> | Email:<?php echo $email;?></h3><hr/>
        <h4><a href="#">Contact Support</a></h4> <h4><a href="#">Contact Sales</a></h4> <h4><a href="#">Update Details</a></h4>
        </div>

        <div class="panel">
        <h1>My Messages:</h1> <br/>
          <table>
            <thead>
            <tr>
              <th>Date</th>
              <th>From</th>
              <th>Messages</th>
              <th>Read</th>
            </tr>
            </thead>

            <tbody>
              <!-- colunms here-->
            </tbody>
          </table>
        <h1>Recent Orders:</h1> <br/>
          <table>
            <thead>
            <tr>
              <th>Date</th>
              <th>From</th>
              <th>Messages</th>
              <th>Read</th>
            </tr>
            </thead>

            <tbody>
              <!-- colunms here-->
            </tbody>
          </table>

        <h1>Payments:</h1> <br/>
          <table>
            <thead>
            <tr>
              <th>Date</th>
              <th>From</th>
              <th>Messages</th>
              <th>Read</th>
            </tr>
            </thead>

            <tbody>
              <!-- colunms here-->
            </tbody>
          </table>
        </div>

  </div>
</div>
<?php

require_once('footer.php')

?>
