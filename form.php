<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="s.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="display.js"></script>


    <title>Document</title>

</head>

<body>
    <div class="container" width="200px" height:"600px">

        <div id="fields"></div>
        <div id="success_response"></div>
        <div id="ajax_response" class="ajaxresponse"></div>
        <div id="ajax_stream"></div>
        <div id="msg"></div>

        <h2>Registration form</h2>

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" title="Enter the name" autocomplete="off">
            <div id="ajax_name"></div>
        </div>

        <br>

        <div>
            <label>Email</label>
            <input type="text" name="email" id="email" placeholder="Enter the email" autocomplete="off">
            <div id="ajax_email"></div>
        </div>
        <br>

        <div>
            <label>Password</label>
            <input type="password" id="password" name="password" title="Enter the Password" autocomplete="off">
            <div id="ajax_password"></div>
        </div>
        <br>

        <div>
            <label for="phone">contact</label>
            <input type="text" id="contact" name="contact" title="Enter the contact" maxlength="10 200px"
                autocomplete="off"><span id="spnPhoneStatus"></span>
            <div id="ajax_contact"></div>
        </div>
        <br>

        <div>
            <input type="radio" id="gender" name="gender" class="gender" value="female">Female
            <input type="radio" id="gender" name="gender" class="gender" value="male">Male
            <div id="ajax_gender"></div>
        </div>
        <br>
        <div>
            <label>Courses :</label>
            <input type="checkbox" name="course" id="course" class="course" value="Python">Python
            <input type="checkbox" name="course" id="course" class="course" value="Javascript">Javascript
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


        <input type="button" name="submit" id="submit" value="submit" class="submit">



        <div class="loader">
            <center>
                <img class="loading-image" id="loading" src="loading.gif" alt="loading..">
            </center>
        </div>
    </div>


    <div>
        <h1> Display Data</h1>
        <br>
        <button id="displaydata">Display </button>
        <br><br>
        <table border="1" class="table table-striped table-bordered">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Course</th>
                <th>Education</th>
                <th>
                    Update
                </th>
                <th>
                    Delete
                </th>
            </thead>
            <tbody id="response">
            </tbody>


        </table>

    </div>



</body>


</html>