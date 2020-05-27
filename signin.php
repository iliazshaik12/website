<html id="register">
    <title>sign into your new account</title>
    <h1 style="color: indigo; font-weight: bold; font-size: 28;">REGISTER YOUR ACCOUNT</h1>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body style="padding-left: 30%; padding-top: 10%; background-color: honeydew;">
        <form name="registerform" action="server.php" method="POST">
            <label style="color: darkcyan;">first name:</label>
            <input type="text" id="firstname"   placeholder="first name" style="color: blue;" required></input>
            &emsp;&emsp;
            <label style="color: darkcyan;">secondname:</label>
            <input type="text" id="secondname" name="secondname" placeholder="second name" style="color: blue;" required/>
            <br>
            <br>
            <label style="color: darkcyan;">DOB:</label>
            &emsp;&nbsp;&nbsp;
            <input type="date" placeholder="dd-mm-yyyy" style="color: blue;"required></input>
            <br>
            <br>
            <label style="color: darkcyan;">email id:</label>
            &ensp;
            <input type="text" id="mailid" name="email" placeholder="email example@x.com" style="color: blue;" required/>
            <br>
            <br>
            <label style="color: darkcyan;"> choose gender:</label>
            <br>
            <input type="radio" name="gender">male</input>
            <br>
            <br>
            <input type="radio" name="gender">female</input>
            <br>
            <br>
            <label style="color: darkcyan;">username:</label>
            <input  type="text" id="uname" name="name" placeholder="username ex:soandso_12" required></input>
            <br>
            <br>
            <label style="color: darkcyan;">password:</label>
            <input type="password" id="pwrd" name="password" placeholder="input a password" style="color: blue;"required/>
            &emsp;&emsp;
            <label style="color: darkcyan;">confirm password:</label>
            <input type="password" id="cpwrd" name="confirmpassword" placeholder="conform password" style="color: blue;"required/>
            <br>
            <br>
            <button style="color: blue;" type="submit" onclick="validations()">register</button>
            </form>
        </body>

    