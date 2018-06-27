<style>
.login-form {
  width: 340px;
    margin: 50px auto;
}
  .login-form form {
    margin-bottom: 15px;
      background: #f7f7f7;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 30px;
  }
  .login-form h2 {
      margin: 0 0 15px;
  }
  .form-control, .btn {
      min-height: 38px;
      border-radius: 2px;
  }
  .btn {
      font-size: 15px;
      font-weight: bold;
  }
</style>
<div class="login-form">
<?= $this->Form->create();?>

      <h2 class="text-center">Log in</h2>
      <div class="form-group">
          <?= $this->Form->control('username',array('label'=>'','placeholder'=>'Enter your username address ')); ?>
          <?= $this->Form->control('password', array('label'=>'','placeholder' =>'Enter your password'))?>
      </div>
      <div class="form-group">
            <?= $this->Form->button('Login', array('type' => 'login', 'class' => 'btn btn-primary btn-block')); ?>
      </div>
      <div class="clearfix">
          <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
          <a href="#" class="pull-right">Forgot Password?</a>
      </div>
  </form>
  <p class="text-center"><a href="#">Create an Account</a></p>
</div>
<?= $this->Form->end(); ?>
