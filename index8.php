<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="https://github.com/Tariqu/database_connection_php/blob/master/css/bootstrap.css" />
</head>

<body>
<header>

<div id="flexHeader">
    <div>
        <p id="tarihs">
          <a href="http://localhost/WebGroupProject/index1.php">  <button id="tarih">Kazakhs<br>history</button></a>

        </p>
    </div>
    <div>
        <p id="tarihs">
          <a   href="http://localhost/WebGroupProject/index2.php"><button id="tarih">National <br> food</button></a>

        </p>
    </div>

    <div>
        <p id="tarihs">
         <a  href="http://localhost/WebGroupProject/index3.php">   <button id="tarih">National<br>drink</button></a>

        </p>
    </div>
    <div>
        <p id="tarihs">
          <a href="http://localhost/WebGroupProject/index4.php">  <button id="tarih" >National<br>games</button></a>

        </p>
    </div>
    <div>
        <p id="tarihs">
          <a href="http://localhost/WebGroupProject/index5.php">  <button id="tarih" >Kazakhs<br>clothes</button></a>

        </p>
    </div>
    <div>
        <p id="tarihs">
         <a  href="http://localhost/WebGroupProject/index6.php">   <button id="tarih">Kazakhs<br>sport</button></a>

        </p>
    </div>
    <div>
        <p id="tarihs">
         <a href="http://localhost/WebGroupProject/index7.php">   <button id="tarih" >National <br>dances</button></a>
        </p>
    </div>

</div>

</header>
    <div class="container">

        <div class="panel-heading text-center">
            <h1>Registration Form</h1>
        </div>
        <div class="panel-body">
            <form action="connect.php" method="post">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" />
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" />
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <div>
                        <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male" />Male</label>
                        <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female" />Female</label>
                        <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="others" />Others</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" />
                </div>
                <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input type="number" class="form-control" id="number" name="number" />
                </div>
                <input type="submit" class="btn btn-primary" />
            </form>

</body>

</html>
