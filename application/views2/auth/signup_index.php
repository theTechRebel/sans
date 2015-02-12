
  <div class ="row">
    <div class="large-12 colunms" align="center">
        <div class="large-6 medium-12 small-12 colunms center panel" align="center">
            <h4 align="center">Sign Up</h4>
        <?php echo form_open('auth/signup/'); ?>
          <fieldset>
          <div class="row">
          <div class="large-12 colunms">
           <div class="row">
           <div class="large-6 columns">
              <label>Name</label>
              <input type="text" placeholder="" name="s_name" value="<?php echo set_value('s_name'); ?>"/>
              <font color="red"><?php echo form_error('s_name'); ?></font>
            </div>
            <div class="large-6 columns">
              <label>Surname</label>
              <input type="text" name="s_surname" value="<?php echo set_value('s_surname'); ?>" />
              <font color="red"><?php echo form_error('s_surname'); ?></font>
            </div>
            <div class="large-6 columns">
            <label>Phone Number</label>
              <input type="text" name="s_phone" value="<?php echo set_value('s_phone'); ?>" />
              <font color="red"><?php echo form_error('s_phone'); ?></font>
            </div>
            <div class="large-6 columns">
              <label>Email Address</label>
              <input type="text" name="s_email" value="<?php echo set_value('s_email'); ?>" />
              <font color="red"><?php echo form_error('s_email'); ?></font>

            </div>
          </div>
        </div>

            <div class="row">
            <div class="large-12 colunms">
              <label>Physical Address</label>
              <textarea rows="4" cols="50" name="s_address" value="">
              <?php echo set_value('s_address')?>
              </textarea>
              <font color="red"><?php echo form_error('s_address'); ?></font>
            </div>
            <div class="large-12 colunms">
              <label>Password</label>
              <input type="password" name="s_password" value="<?php echo set_value('s_password'); ?>" />
              <font color="red"><?php echo form_error('s_password'); ?></font>
            </div>
            <div class="large-12 colunms">
            <input type="submit" class="button expand" name="s_button" value="Sign Up">
            </div>
          </div>
        </div>
        <a href="<?php echo $url."auth/"?>">if you already have an account, click here to login.</a>
          </fieldset>
        </form>

            </div>

            </div>
        </div>
      </div>




