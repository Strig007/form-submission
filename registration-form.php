<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h1>Registration form</h1>
    <br>
    <?php
        $firstName = $lastName = $gender = $dob = $religion = $email = $userName = $password = "";
        $presentAddress = $permanentAddress = $phone = $personalLink = "";
        $firstNameErr = $lastNameErr = $genderErr = $dobErr = $religionErr = $emailErr = $userNameErr = $passwordErr = "";
        $flag = true;
        $sMessage = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if (empty($_POST["fname"]))
            {
                $firstNameErr = "First name cannot be empty!";
                $flag = false;
            }
            else
            {
                $firstName = test_input($_POST["fname"]);
            }

            if (empty($_POST["lname"]))
            {
                $lastNameErr = "Last name cannot be empty!";
                $flag = false;
            }
            else
            {
                $lastName = test_input($_POST["lname"]);
            }

            if (empty($_POST["gender"]))
            {
                $genderErr = "Gender cannot be empty!";
                $flag = false;
            }
            else
            {
                $gender = test_input($_POST["gender"]);
            }

            if (empty($_POST["dob"]))
            {
                $dobErr = "Date of birth cannot be empty!";
                $flag = false;
            }
            else
            {
                $dob = test_input($_POST["dob"]);
            }

            if (empty($_POST["religion"]))
            {
                $religionErr = "Religion cannot be empty!";
                $flag = false;
            }
            else
            {
                $religion = test_input($_POST["religion"]);
            }

            if (empty($_POST["email"]))
            {
                $emailErr = "E-mail cannot be empty!";
                $flag = false;
            }
            else
            {
                $email = test_input($_POST["email"]);
            }

            if (empty($_POST["uname"]))
            {
                $userNameErr = "User name cannot be empty!";
                $flag = false;
            }
            else
            {
                $userName = test_input($_POST["uname"]);
            }

            if (empty($_POST["password"]))
            {
                $passwordErr = "Password cannot be empty!";
                $flag = false;
            }
            else
            {
                $password = test_input($_POST["password"]);
            }

            if (empty($_POST["presentAddress"]))
            {
                $presentAddress = "";
            }
            else
            {
                $presentAddress = test_input($_POST["presentAddress"]);
            }

            if (empty($_POST["permanentAddress"]))
            {
                $permanentAddress = "";
            }
            else
            {
                $permanentAddress = test_input($_POST["permanentAddress"]);
            }

            if (empty($_POST["phone"]))
            {
                $phone = "";
            }
            else
            {
                $phone = test_input($_POST["phone"]);
            }
            
            if (empty($_POST["pwl"]))
            {
                $personalLink = "";
            }
            else
            {
                $personalLink = test_input($_POST["pwl"]);
            }

            if ($flag == true)
            {
                $sMessage = "Succefully Saved!";
            }

        }

        function test_input($data)
        {
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }

    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend>Basic Information:</legend>
            <label for="fname">First Name: </label>
            <input type="text" id="fname" name="fname"> <span style="color: red;">* <?php echo $firstNameErr;?></span>
            <br>
            <label for="lname">Last Name: </label>
            <input type="text" id="lname" name="lname"> <span style="color: red;">* <?php echo $lastNameErr;?></span>
            <br>
            
            <label for="gender">Gender: </label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="gender">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="gender">Female</label> <span style="color: red;">* <?php echo $genderErr;?></span>
            <br>

            <label for="dob">Date of Birth: </label>
            <input type="date" id="dob" name="dob"> <span style="color: red;">* <?php echo $dobErr;?></span>
            <br>

            <label for="religion">Religion: </label>
            <select name="religion" id="religion">
                <option value="muslim">Muslim</option>
                <option value="christian">Christian</option>
                <option value="hindu">Hindu</option>
                <option value="buddhist">Buddhist</option>
            </select>
            <span style="color: red;">* <?php echo $religionErr;?></span>
        </fieldset>
        
        <fieldset>
            <legend>Contact Information:</legend>
            <label for="preaddress">Present Address: </label>
            <br>
            <textarea name="presentAddress" id="preaddress" cols="30" rows="10" placeholder="Enter Present Address"></textarea> 
            <br>
            <label for="peraddress">Permanent Address: </label>
            <br>
            <textarea name="permanentAddress" id="peraddress" cols="30" rows="10" placeholder="Enter Permanent Address"></textarea>
            <br>

            <label for="phone">Phone: </label>
            <input type="tel" id="phone" name="phone" placeholder="222-11-333" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"> <br>

            <label for="email">Email: </label>
            <input type="email" id="email" name="email"> <span style="color: red;">* <?php echo $emailErr;?></span>
            <br>

            <label for="pwl">Personal Website Link: </label>
            <input type="url" id="pwl" name="pwl"> <br>

        </fieldset>

        <fieldset>
            <legend>Account Information:</legend>
            <label for="uname">User Name: </label>
            <input type="text" id="uname" name="uname"> <span style="color: red;">* <?php echo $userNameErr;?></span>
            <br>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password"> <span style="color: red;">* <?php echo $passwordErr;?></span>
        </fieldset>
        <input type="submit" name="submit" value="Submit">
    </form>
    <span style="color: green;"><?php echo $sMessage;?></span>

</body>
</html>