


        <div class ="row">
        <div class="large-12 colunms center" align="center">
        <div class="large-6 medium-12 small-12 colunms center panel">

        <h4 align="center">Login</h4>
        <?php echo form_open('auth/index'); ?>
        <fieldset>
           <div class="row">
            <div class="large-6 columns">
              <label>Phone Number</label>
              <input type="text" name="phone" value="<?php echo set_value('phone')?>" />
              <font color="red"><?php echo form_error('phone')?></font>
            </div>
            <div class="large-6 columns">
              <label>Password</label>
              <input type="password" name="password" value="" />
              <font color="red"><?php echo form_error('password')?></font>
            </div>
            <div class="large-12 colunms">
            <input type="submit" class="button expand" name="button" value="Login">
            </div>
            </div>
            <a href="<?php echo $url."auth/signup/"?>">if you do not have an account, click here to create one.</a>
            </div>
          </fieldset>

        </form>

        <font color="red"><?php if(isset($no_user)){echo $no_user;}?></font>

        </div>
      </div>
