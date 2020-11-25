<?php
?>


<html>
<head>
    <title>Maps</title>
</head>
<body>
<form name="dataInsert" action="index.php?save=pin" method="post">
    <table>
        <tr>
            <td>Where do you want to go (Name)?</td>
            <td><input type="text" name="name" value=""></td>
        </tr>
        <tr>
            <td>Address?</td>
            <td><input type="text" name="address" value=""></td>
        </tr>
        <tr>
            <td>Where do you want to go (lat)?</td>
            <td><input type="text" name="lat" value=""></td>
        </tr>
        <tr>
            <td>Where do you want to go (long)?</td>
            <td><input type="text" name="lng" value=""></td>
        </tr>
        <tr>
            <td>Type?</td>
            <td><input type="text" name="type" value=""></td>
        </tr>
        <tr>
            <td>Submit</td>
            <td><input type="submit" name="submit" value="insert/update"></td>
        </tr>
    </table>
</form>
</body>
</html>