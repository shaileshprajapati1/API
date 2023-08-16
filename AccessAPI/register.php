<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
    <div class="container mt-3 p-3 mb-2 bg-success text-white ">
        <h2 class="text-center"><b>Register Form</b></h2>

        <form method="post" id="formsubmit" onsubmit="return formdata(this)" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col-6 offset-3">
                    <label for="fullname">Fullname</label>
                    <input type="text" name="fullname" class="form-control" id="fullname" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-3">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-3">
                    <label for="phone">Phone</label>
                    <input type="tel" name="phone" class="form-control" id="phone" minlength="10" maxlength="10" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-3" class="form-check">
                    <label for="gender">Gender</label><br>
                    <input type="radio" name="gender" class="form-check-input" id="Male" value="Male"><label class="form-check-label" for="Male">Male</label>
                    <input type="radio" name="gender" class="form-check-input" id="Female" value="Female"><label class="form-check-label" for="Female">Female</label>
                    <input type="radio" name="gender" class="form-check-input" id="Other" value="Other"><label class="form-check-label" for="Other">Other</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-3" class="form-check">
                    <label for="hobby">Hobby</label><br>
                    <input type="checkbox" name="hobby[]" class="form-check-input" id="crickect" value="crickect"><label class="form-check-label" for="crickect">crickect</label>
                    <input type="checkbox" name="hobby[]" class="form-check-input" id="reading" value="reading"><label class="form-check-label" for="reading">reading</label>
                    <input type="checkbox" name="hobby[]" class="form-check-input" id="music" value="music"><label class="form-check-label" for="music">music</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-3">
                    <label for="profile_pic">Profile Pic</label>
                    <input type="file" name="profile_pic" class="form-control" id="profile_pic">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-5">
                    <input type="submit" class="btn btn-secondary" name="register" id="register">
                    <input type="reset" class="btn btn-danger">
                </div>
            </div>


        </form>

    </div>
    <script>
        function formdata() {
            event.preventDefault()
            var result = {};
            $.each($('#formsubmit').serializeArray(), function() {
                result[this.name] = this.value;
                // console.log(result);
            });
            var Hobbytostring = '';
            $('input[type=checkbox]').each(function() {
                if (this.checked) {
                    Hobbytostring += this.value + ",";
                }
            });
            Hobbytostring = Hobbytostring.substring(0, Hobbytostring.length - 1);
            result['hobby'] = Hobbytostring;
            // console.log(Hobbytostring);
            delete result['hobby[]'];
            // console.log(result);
            fetch("http://localhost/api/API1/API/register", {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify(result)
            }).then((res) => res.json()).then((result) => {
                console.log(result)
            })

        }
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