<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Create a New User.</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link text-light" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="createprofile.php">Create profile.</a>
              </li>
            </ul>
          </div>
        </nav>
        <h1>Registration Form:</h1>
        <div style="margin:10px 10px 10px 10px">        
            <form action="insert.php" class= "form-group" method="POST" enctype="multipart/form-data">
                <label>Name:</label>
                <div style="margin: 3px 3px 3px 0px">
                    <input type="text" name = "uname" placeholder="Name" class="form-control" autocomplete="off" required>
                </div>
                <label>Email Address</label>
                <div style="margin: 3px 3px 3px 0px">
                    <input type="email" name = "email" placeholder="email@address.domain" class="form-control" autocomplete="off" required>
                </div>
                <div style="margin: 5px 3px 5px 0px">
                    <label>Password</label>
                    <input type="Password" name = "password" placeholder="Password" class="form-control" minlength="8" autocomplete="off" required>
                </div>
                <input type="Submit" value="Submit" class="btn btn-success">
            </form>
        </div>
    </body>
</html>