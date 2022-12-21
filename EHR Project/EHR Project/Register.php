<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="3">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styling.css">
    </head>

    <body>
        <div class="container">
            <h1 class="text-center">Register Here</h1>
            <form> 
                <div class="form-group">
                    <label class="form-label" for="email">Create username</label>
                    <input class="form-control" type="email" id="email" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input class="form-control" type="email" id="email" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" id="password" required>
                    <div class="invalid-feedback">
                        Enter your password
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Confirm Password</label>
                    <input class="form-control" type="password" id="password" required>
                    <div class="invalid-feedback">
                        Enter your password
                    </div>
                    <br>
                <div class="col-md-12 text-center">
                    <input class="btn btn-primary btn-lg" type="submit" value="Sign Up">
                </div> 
            </form>
        </div>

    </body>

</html>