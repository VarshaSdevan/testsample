</!DOCTYPE html>
<html>
<head>
    <title>registration</title>
    <style>
        fieldset{
            padding: 10px;
            margin-left:450px;
            text-align:center;
            margin-top:50px;
        }
        input{
            padding:10px;
            margin-top: 5px;
            text-align:center;
        }
    </style>
</head>
<body>
    
    <form method="post" action="<?php echo base_url()?>main/reg">

    <fieldset style="width:100px">
        <legend> Register</legend>
        <input type="text" name="fname" placeholder="First Name" required  maxlength="25" pattern="[a-zA-Z]+">
        <input type="text" name="lname" placeholder="Last Name" required  maxlength="25" pattern="[a-zA-Z]+">
        <input type="text" name="uname" placeholder="User Name"  maxlength="10" pattern="[a-zA-Z]+">
        <input type="password" name="password" placeholder="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
        <input type="text" name="mobile" placeholder="Mobile number" required pattern="[7-9]{1}[0-9]{9}">
        <input type="email" name="email" placeholder="Email" required>
        <input type="submit" name="submit">
    </fieldset>
</body>
</html>