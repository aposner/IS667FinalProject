<?php
?>


<html>
<head>
    <title>Maps</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <form name="dataInsert" action="index.php?save=pin" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Where do you want to go (Name)?</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Address?</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Address" name="address">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Where do you want to go (Lat)?</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Lat" name="lat">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Where do you want to go (Long)?</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Long" name="lng">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Type?</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="type">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<!-- <form name="dataInsert" action="index.php?save=pin" method="post">
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
</form> -->
</body>
</html>