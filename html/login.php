<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Custom Css file-->
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>
    <!--Header starts-->
    <div class="head container-fluid navbar row">
      <a href="#" class=" display-4 logo_link text-center float-left align-items-start col-xs-1 col-md-1">AO</a>
      <div class="search-box align-items-end justify-content-center row col-xs-10 col-md-10">
        <input class="search-input" type="text" name="search" placeholder="Search">
        <input class="search-go" type="button" name="go">
      </div>
    </div>
    <!--Header ends-->
    <!--login form card starts-->
    <div class="background-1 row container-fluid">
    <form class="form-tile" action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" placeholder="Enter Username" name="username">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="password">
      </div>
      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Remember Me
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <!--login form card ends-->
  </body>
  <!--bootstrapcdn JS links-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</html>
