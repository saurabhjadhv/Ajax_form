<?php
$id = $_GET['id'];

$conn = mysqli_connect("localhost", "root", "", "form");
$sql = "select * from signup where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="s.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="updateajax.js"></script>

    <title>Document</title>

</head>

<body>
    <div class="container" width="200px" height:"600px">

        <div id="fields"></div>
        <div id="success_response"></div>
        <div id="ajax_response" class="ajaxresponse"></div>
        <div id="ajax_stream"></div>
        <div id="msg"></div>

        <h2>Update form</h2>

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" title="Enter the name">
            <div id="ajax_name"></div>
        </div>

        <br>

        <div>
            <label>Email</label>
            <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"
                placeholder="Enter the email">
            <div id="ajax_email"></div>
        </div>

        <br>

        <div>
            <label>Password</label>
            <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>"
                title="Enter the Password">
            <div id="ajax_password"></div>
        </div>
        <br>

        <div>
            <label for="phone">contact</label>
            <input type="text" id="contact" name="contact" title="Enter the contact"
                value="<?php echo $row['contact']; ?>" maxlength="10 200px">
            <div id="ajax_contact"></div>
        </div>
        <br>

        <div>
            <input type="radio" id="gender" name="gender" class="gender" value="female">Female
            <input type="radio" id="gender" name="gender" class="gender" value="male"> Male
            <div id="ajax_gender"></div>
        </div>
        <br>
        <div>
            <label>Courses :</label>
            <input type="checkbox" name="course" id="course" class="course" value="Javascript">Javascript
            <input type="checkbox" name="course" id="course" class="course" value="Python">Python
            <input type="checkbox" name="course" id="course" class="course" value="PHP">PHP
            <div id="ajax_checkbox"></div>
        </div>
        <br>

        <label>Degree :</label>
        <select class="leave_response" name="edu" id="edu">
            <option value=""></option>
            <option value="BCS">BCS</option>
            <option value="BSC">BSC</option>
            <option value="BCOM">BCOM</option>
            <option value="BA">BA</option>
        </select>
        <br><br>

        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
        <input type="button" name="update" id="update" value="update" class="update">



        <div class="loader">
            <center>
                <img class="loading-image" id="loading" src="loading.gif" alt="loading..">
            </center>
        </div>
    </div>



</body>

</html>