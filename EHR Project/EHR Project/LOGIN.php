<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="50">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styling.css">
    </head>

    <body>
        <div class="container">

            <img src="images/logo.jpg" class="rounded mx-auto d-block" alt="logo" />
            <h1 class="text-center">Login</h1>

            <form class="needs-validation">
                <div class="form-group">
                    <label class="form-label" for="email">Username</label>
                    <input class="form-control" type="email" id="email" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="form-group ">
                    <label class="form-label" for="password">Enter Password</label>
                    <input class="form-control" type="password" id="password" required>
                    <div class="invalid-feedback">
                        Enter your password
                    </div>
                </div>

                <div class="form-group form-check">
                    <input class=" form-check-input" type="checkbox" id="check">
                    <label class=" form-check-label" for="check">Rememeber me.</label>
                </div>

                <div class="col-md-12 text-center">
                    <input class="btn btn-success btn-lg" type="submit" value="LOGIN">
                    <a href="Register.html">
                    <input class="btn btn-primary btn-lg" type="button" value="Create Account"></a>
                </div>
                
                <h4><a href="#">Forgot Password?</a></h4>
                
            </form>
    </body>

</html>
