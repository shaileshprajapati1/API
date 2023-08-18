<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curdajex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>

<body>
    <table class="table table-bordered mt-2">
        <h2 class="text-center">Register Form</h2>
        <form method="post" id="formdata">

            <tr>
                <td> <label for="fullname">Fullname</label><br><input type="text" name="fullname" id="fullname" required><br></td>
                <td> <label for="username">Username</label><br><input type="text" name="username" id="username"required><br></td>
                <td> <label for="password">Password</label><br><input type="password" name="password" id="password"required><br></td>
                <td> <label for="email">Email</label><br><input type="email" name="email" id="email"required><br></td>
            </tr>
            <tr>
                <td> <label for="phone">phone</label><br><input type="tel" minlength="10" maxlength="10" name="phone" id="phone"required><br></td>
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

                <td colspan="4"> <input type="submit" class="btn btn-success" name="add" id="add"><br></td>
            </tr>


        </form>
    </table>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Hobby</th>
                <th>Action</th>

            </tr>


        </thead>
        <tbody  id="viewdata">

        </tbody>
    </table>
    <script>
        document.getElementById("add").addEventListener("click", function() {
            // event.preventDefault()
            var result = {};
            $.each($('#formdata').serializeArray(), function() {
                result[this.name] = this.value;
            });
            var HobbyStr = '';

            $('input[type=checkbox]').each(function() {
                if (this.checked) {
                    HobbyStr += this.value + ",";
                }
            });
            HobbyStr = HobbyStr.substring(0, HobbyStr.length - 1);
            result["hobby"] = HobbyStr;
            delete result["hobby[]"];
            fetch("http://localhost/api/API1/API/register", {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: JSON.stringify(result)
                }).then((res) => res.json())
                .then((response) => {
                    viewalldata()

                })
        });

        function viewalldata() {
            // console.log("called");
            fetch("http://localhost/api/API1/API/viewalldatabyid").then((res) => res.json()).then((responce) => {
                console.log(responce.Data)
                let HtmlRes = ""
                responce.Data.forEach((res) => {
                    console.log(res)
                    HtmlRes += `<tr>
                                <td>${res.fullname}</td>
                                <td>${res.username}</td>
                                <td>${res.email}</td>
                                <td>${res.phone}</td>
                                <td>${res.gender}</td>
                                <td>${res.hobby}</td>
                                <td> 
                                <button  onclick="selectdatabyid(${res.id})" >Edit</button>
                                <button  onclick="deletedatabyid(${res.id})" >Delete</button>
                                </td>
                                </tr>`
                })
                document.getElementById("viewdata").innerHTML = HtmlRes
            })
        }
        viewalldata()
        function selectdatabyid(id){
            // console.log("update:",id);
            fetch("http://localhost/api/API1/API/selectdatabyid?id="+id).then((res)=>res.json()).then((responce)=>{
                console.log(responce.Data[0]);
                
            })

        }
    </script>
</body>

</html>