<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raul's Bridal</title>

    <!--Bootstrap CSS CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<link href="css/login-form.css" rel="stylesheet" />

</head>

<body>

    <main>
        <div class="web-form">
            <div class="alert alert-warning">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque quam dolorem reprehenderit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, quas.</p>
            </div>

            <form class="needs-validation" method="post" action="update.php" novalidate>
                <div class="row">

                    <!-- First Name - text Field-->
                    <div class="col-12 col-xxs-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <label for="first-name">First Name</label>
                        <input type="text" name="firstName" id="first-name" required class="form-control" value='<?php echo $firstName;?>' />
                    </div>
                  
                  
                    <!-- Last Name - text Field-->
                    <div class="col-12 col-xxs-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <label for="last-name">Last Name</label>
                        <input type="text" name="lastName" id="last-name" required class="form-control"  value='<?php echo $lastName;?>' />
                    </div>

                    <!-- Age - number Field -->
                    <div class="col-12 col-xxs-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" min="18" max="110" class="form-control"  value='<?php echo $age;?>'  />
                    </div>

                    <!-- Email - email Field-->
                    <div class="col-12 col-xxs-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required class="form-control"  value='<?php echo $email;?>'  />
                    </div>

                    <!-- Phone - tel Field-->
                    <div class="col-12 col-xxs-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                        <label for="phone">Phone (optional)</label>
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="(###) ###-####"  value='<?php echo $phone;?>' />
                    </div>

                    <!-- Submit - submit Field -->
                    <div class="col-12">
                        <input type="submit" name="submit" value="Update Record" class="btn btn-outline-primary submit" id="submit"/>
                    </div>

                </div>
            </form>

        </div>
    </main>



<script src="js/login-form.js"></script>
</body>

</html>