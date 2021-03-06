<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User login</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left" >
                <h2>login here</h2>
                <form action="validation.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit"  class="btn btn-primary" >Login</button>
                </form>
            </div>

            <div class="col-md-6 login-right" >
                <h2>Register here</h2>
                <form action="registration.php" method="POST">
                    <div class="form-group">
                        <label>Registration</label>
                        <input type="text" name ="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit"  class="btn btn-primary" >Register</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>