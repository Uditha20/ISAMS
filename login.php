<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<style>
  .container{
    position:absolute;
    top:30%;
    left:30%
  }

</style>
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <div class="container-fluid">
    <a class="navbar-brand" href="c.html">ISAMS</a>
    </nav>
  <div class="container">
    <form action="admin_login.php" method="post">
      <div class="form-row pt-2 ">
        <div class="form-group col-lg-4 col-md-6 col-4">
          <label class="form-label pt-3  ">User name</label>
          <input type="text" class="form-control " id="example" placeholder="User name" name="name">
        </div>
        <div class="form-row pt-2">
          <div class="form-group col-lg-4 col-md-6 col-4">
            <label class="form-label pt-3 ">Password</label>
            <input type="password" class="form-control " id="example" placeholder="password" name="pass">
          </div>
      </div>

        <button class="btn btn-primary mt-3" type="submit">Login</button>

       


  
    </form>  

  </div>
</body>
</html>