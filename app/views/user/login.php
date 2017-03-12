<div id="home"> <!-- Заголовок -->
  <div class="home-bg">
    <div class="center">
      <a href="/" class="home-link right">&nbsp;</a>
      <h2 class="title-home">
        Welcome to login form
      </h2>
      <ul class="breadcrumbs clearfix">
        <li>
            <a href="#">Home</a>
            <span class="sp">&raquo;</span>
        </li>
        <li>
            <a href="#">User</a>
            <span class="sp">&raquo;</span>
        </li>
        <li>
            <span>Login</span>
        </li>
      </ul>
    </div>
  </div>
</div> <!-- ..Заголовок -->  

<div class="middle clearfix center"> <!-- блок с контентом -->

<!-- блок для вывода ошибок -->
    <?php if (isset($data['errors']) && is_array($data['errors'])):?>
        <ul class="errors">
            <?php foreach($data['errors'] as $error):?>
                <li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> - <?php echo $error;?></li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>
<!-- блок для вывода ошибок -->

  <div class="form">
    <div id="login">
      <h1>Welcome</h1>

      <form action="" method="post">

        <div class="field-wrap">
          <label>
            Email Address<span class="req">*</span>
          </label>
          <input type="email" name="email" required autocomplete="off"/>
        </div>

        <div class="field-wrap">
          <label>
            Password<span class="req">*</span>
          </label>
          <input type="password" name="password" required autocomplete="off"/>
        </div>

        <p class="forgot">
          <a href="#">Forgot Password?</a>
        </p>

        <input type="submit" class="button button-block" value="Log In" />

      </form>
    </div>

  </div> <!-- //форма -->
</div> <!-- //блок с контентом -->