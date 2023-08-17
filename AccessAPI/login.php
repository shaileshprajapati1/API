<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5 p-5 mb-5 bg-success text-white ">
        <h2 class="text-center"><b>Login Form</b></h2>

        <form method="post" id="loginform" enctype="multipart/form-data">

            <div class="row mb-3">
                <div class="col-6 offset-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6 offset-5">
                    <input type="submit" class="btn btn-secondary" value="Login" name="login" id="login">

                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-4">

                    <a href="register.php">CLick Here To Register</a>
                </div>
            </div>

        </form>
    </div>
    <script>
        document.getElementById("loginform").addEventListener("click", function() {
            event.preventDefault()
            const form = {
                username: document.getElementById("username"),
                password: document.getElementById("password")
            };
                console.log(form.username.value);
            // fetch("http://localhost/api/API1/API/login", {
            //     method: "POST",
            //     headers: {
            //         'Content-Type': 'application/json',
            //     },
            //     body: JSON.stringify({
            //         username: form.username.value,
            //         password: form.password.value,
            //     }),

            // }).then((res) => res.json()).then((result) => {
            //     console.log(result);
            //     // document.getElementById("login").value = result
            // })

        })
    </script>



    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>