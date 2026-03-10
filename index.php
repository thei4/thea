<!DOCTYPE html>
<head> 
    <title> Profile Form</title>

    <style>
        body {
            text-align: center;
            background-color: #FFC9D7;
            font-family: "Courier New", monospace; 
        }

        h1 {
            color:#EC5578;
            font-size: 50px;
        }

        form {
            text-align: center;
            background-image: radial-gradient(circle, #FEC5E5, #F7DDE8, #F9C5C7);
            width: 90%;
            max-width: 400px;
            margin: auto;
            border: 3px solid #FF9CB5;
            border-radius: 20px;
            padding: 20px;
        }

        input[type="submit"] {
            background-color: #FF9CB5;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>

<body> 
    <h1> PROFILE FORM </h1>
    <form action="profile.php" method="POST" enctype="multipart/form-data">
    
    <strong> Full Name </strong> <br>
    <input type="text" name="fullname" required> <br> <br>

    <strong> Age </strong> <br>
    <input type="number" name="age" required> <br> <br>

    <strong> Course / Program </strong> <br>
    <input type="text" name="course_program" required> <br> <br>

    <strong> Email </strong> <br>
    <input type="email" name="email" required> <br> <br>

    <strong> Gender </strong> <br>
    <input type="radio" name="gender" value="Male"> Male <br>
    <input type="radio" name="gender" value="Female"> Female <br> <br>

    <strong> Hobbies </strong> <br>
    <input type="checkbox" name="hobby[]" value="Reading"> Reading <br>
    <input type="checkbox" name="hobby[]" value="Gaming"> Gaming <br>
    <input type="checkbox" name="hobby[]" value="Movies"> Movies <br>
    <input type="checkbox" name="hobby[]" value="Eating"> Eating <br>
    <input type="checkbox" name="hobby[]" value="Sports"> Sports <br> <br>

    <strong> Short Biography </strong> <br>
    <textarea name="bio" rows="7" cols="40"> </textarea> <br> <br>

    <input type="file" name="profile_image"> <br> <br>
    <input type="submit" value="Submit Profile">

    </form>
</body>

<html>