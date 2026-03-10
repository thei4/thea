<?php

$fullname = $_POST['fullname'] ?? '';
$age = $_POST['age'] ?? '';
$course_program = $_POST['course_program'] ?? '';
$email = $_POST['email'] ?? '';
$gender = $_POST['gender'] ?? '';
$bio = $_POST['bio'] ?? '';

$hobby = $_POST['hobby'] ?? [];

$uploads = "";
$imageName = "";

if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === 0) {

    $imageName = basename($_FILES['profile_image']['name']);
    $tempName = $_FILES['profile_image']['tmp_name'];

    $uploads = "uploads/" . $imageName;

    if (!move_uploaded_file($tempName, $uploads)) {
        echo "Image upload failed.<br>";
    }
}
?>

<!DOCTYPE html>
<head>
<title>Profile</title>

<style>
    body {
        text-align:center;
        background-image: radial-gradient(circle,#FEC5E5,#F7DDE8,#F9C5C7);
        font-family: Arial;
    }

    h1 {
        color:#EC5578;
        font-size:50px;
    }

    form{
        text-align: center;
        background-image: radial-gradient(circle, #FEC5E5, #F7DDE8, #F9C5C7);
        width: 90%;
        max-width: 400px;
        margin: auto;
        border: 3px solid #FF9CB5;
        border-radius: 20px;
        padding: 20px;
    }

    input, textarea {
        width:80%;
        padding:8px;
        margin-bottom:10px;
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

<h1>USER PROFILE</h1>

<img src="<?php echo $uploads; ?>" width="200"
style="border-radius:100%; object-fit:cover; border:5px solid #FF9CB5;">

<br><br>

<form action="index.php" method="POST">

<b>Name:</b> <?php echo ucwords($fullname); ?> <br> 
<b>Age:</b> <?php echo $age; ?> <br> 
<b>Course/Program:</b> <?php echo $course_program; ?> <br> 
<b>Email:</b> <?php echo $email; ?> <br> 
<b>Gender:</b> <?php echo $gender; ?> <br> 
<b>Biography:</b> <?php echo $bio; ?> <br> 
<b>Hobbies:</b> <?php echo implode(", ", array_map('htmlspecialchars', $hobby)); ?>

<br> <br>

<input type="submit" value="Generate New Profile">

</form>

</body>
</html>