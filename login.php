<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .container {
            margin-top: 150px;
        }

        .container .form-box {
            box-shadow: 0px 0px 5px 1px rgba(220, 220, 220, 0.86);
            -webkit-box-shadow: 0px 0px 5px 1px rgba(220, 220, 220, 0.86);
            -moz-box-shadow: 0px 0px 5px 1px rgba(220, 220, 220, 0.86);
        }

        input{
            max-width: 300px;
            min-width: 300px;
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="form-box col-md-8 col-md-offset-4" align="center" style="background-color: #fff; padding:4em;">

                <form action="login-main.php" method="POST">
                    <input type="text" name="username" class="form-control" placeholder="Enter Username"><br>

                    <input type="password" name="password" class="form-control" placeholder="Enter Password"><br>

                    <input type="submit" value="Login" class="btn btn-success">
                </form>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>