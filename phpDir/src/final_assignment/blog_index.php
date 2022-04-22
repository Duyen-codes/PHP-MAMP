<?php 
  include_once 'blog_header.php';
?>
    <form class="form-signin" action="login.php" method="post">
      <div class="text-center mb-4">
        <h2>Please Log in</h2>
      </div>
      <div class="form-label-group">
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email">
        <label for="inputEmail">Email address</label>
      </div>
      <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
        <label for="inputPassword">Password</label>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form> 
<?php 
include_once 'blog_footer.php';
