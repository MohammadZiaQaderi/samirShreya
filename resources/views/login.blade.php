<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
        .nav-item.dropdown .dropdown-toggle::after {
            display: none;
        }
    </style>
</head>
<body>

<div class="container-fluid">

    <header>
        <img src="images/header_image.png" alt="header image ">
        <hr/>
    </header>
    <div class="row justify-content-center mt-2 py-0">
       <div class="col-md-4 h-75 text-bg-white py-0">
       <h5 class="mt-3">
       LOGIN TO SAMIR : SHREYA INTRANET
      </h5>
      <form action={{ route('home')}} method="POST">
        @csrf
        <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="text" required class="form-control border border-top-0" 
        id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
        <label for="pwd">Password:</label>
        <input type="password" required class="form-control border border-top-0" 
        id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="d-block">
        <a href="#" class="text-primary float-end">
            forgot your password?</a>
        <button type="submit" class="btn btn-primary mb-2 w-100 " style="background-color:#2196F3">Sign in</button>    
        </div>
      </form>
       </div>
       <div class="col-md-4 py-0" style="height:290px;">
         <img class="w-100 h-100" src="images/Control-Chart-3.png" alt="Galaxy view">
       </div>
    </div>
</div>

</body>
</html>
