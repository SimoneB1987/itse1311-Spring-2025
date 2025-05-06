<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raul's Bridal</title>

    <!--Bootstrap CSS CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<link href="css/login.css" rel="stylesheet" />

</head>

<body>

    <main>
        <div class="web-form">
            <div class="alert alert-warning">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque quam dolorem reprehenderit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, quas.</p>
            </div>

            <form method="post" action="login-page.php" class="needs-validation" novalidate>

                <div class="row">

                    <!-- User Name - text Field-->
                    <div class="col-12 col-xxs-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required class="form-control" />
                    </div>
                  
                  
                    <!-- Password - text Field-->
                    <div class="col-12 col-xxs-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required class="form-control" />
                    </div>

                  
                  
                  

                    <!-- Log In - submit Field -->
                    <div class="col-12">

                      
                        <input type="submit" name="submit" value="Log In" class="btn btn-outline-primary submit" id="submit"/>
                    </div>

                </div>
            </form>

        </div>
    </main>



<script src="js/login.js"></script>
</body>

</html>