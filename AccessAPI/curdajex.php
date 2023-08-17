<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curdajex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <table class="table table-bordered mt-2">
        <h2 class="text-center">Register Form</h2>
        <form method="post" id="formdata">

            <tr>
                <td> <label for="fullname">Fullname</label><br><input type="text" name="fullname" id="fullname"><br></td>
                <td> <label for="username">Username</label><br><input type="text" name="username" id="username"><br></td>
                <td> <label for="password">Password</label><br><input type="password" name="password" id="password"><br></td>
                <td> <label for="email">Email</label><br><input type="email" name="email" id="email"><br></td>
            </tr>
            <tr>
                <td> <label for="phone">phone</label><br><input type="tel" name="phone" id="phone"><br></td>
                <td>
                    <label for="gender">Gender</label><br>
                    <input type="radio" name="gender" id="Male" value="Male"><label for="Male">Male</label>
                    <input type="radio" name="gender" id="Female" value="Female"><label for="Female">Female</label><br>
                </td>
                <td>
                    <label for="hobby">Hobby</label><br>
                    <input type="checkbox" name="hobby[]" id="reading" value="reading"><label for="reading">Reading</label>
                    <input type="checkbox" name="hobby[]" id="music" value="music"><label for="music">Music</label>
                    <input type="checkbox" name="hobby[]" id="cricket" value="cricket"><label for="cricket">Cricket</label><br>
                </td>
            </tr>
            <tr class="text-center">

                <td colspan="4"> <input type="submit" class="btn btn-success" name="register" id="register"><br></td>
            </tr>


        </form>
    </table>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Hobby</th>
                <th>Action</th>

            </tr>
            

        </thead>
        <tbody id="viewdata">

        </tbody>
    </table>
</body>

</html>