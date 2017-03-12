<div id="home">
  <div class="home-bg">
    <div class="center">
      <a href="/" class="home-link right">&nbsp;</a>
        <h2 class="title-home">
            Welcome to Register form
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
        <li><span>Register</span></li>
      </ul>
    </div>
  </div>
</div>

<div class="middle clearfix center"> <!-- блок с контентом -->

<!-- в случае успешной регистрации поблагодарить -->
<?php if($data['success']):?>
    <h4 id="reg_thanks">Спасибо за регистрацию!</h4>
    <h3 id="reg_main">Вернуться на <a href="/" id="reg_main_a">Главную</a></h3>
<?php else: ?>
      <!-- если есть ошибки - вывести их маркерованным списком -->
        <?php if (isset($data['errors'])):?>
            <ul class="errors">
                <?php foreach($data['errors'] as $error):?>
                    <li><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
 - <?php echo $error;?></li>
                <?php endforeach;?>
            </ul>
        <?php endif;?>

<!-- форма регистрации -->
  <div class="form">
    <div id="signup">

      <h1>Sign Up for Free</h1>

          <form method="post" action="#">

              <div class="top-row">
                  <div class="field-wrap">
                      <label>
                        First Name<span class="req">*</span>
                      </label>

                    <input type="text" name="name" value="" required autocomplete="off" />

                  </div>

                <div class="field-wrap">
                  <label>
                    Last Name<span class="req">*</span>
                  </label>

                  <input type="text" name="lname" value="" required autocomplete="off"/>

                </div>
              </div>

              <div class="field-wrap">
                <label>
                  Email Address<span class="req">*</span>
                </label>

                <input type="email" name="email" value="" required autocomplete="off"/>

              </div>

              <div class="field-wrap">
                <label>
                  Set A Password<span class="req">*</span>
                </label>

                <input type="password" name="password" value="" required autocomplete="off"/>

              </div>

            <input type="submit" class="button button-block" value="Get Started" />

          </form>
        <?php endif;?>
    </div>
  </div> <!-- /form -->
</div> <!-- блок с контентом -->