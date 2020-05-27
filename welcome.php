<!Doctype html>
<head>
</head>
<div id="logo" style="background-color:springgreen;border:2px solid springgreen;border-radius:25px">
    
<h1 id=:heading" style="margin-left:20%;font-size:60px;color:blue;display:inline"><img src="/logo.jpeg?img_id=%s" style="display:inline" width=100 height=100></img>NAVABHARATH HIGH SCHOOL</h1>
<script>
    function selectchange()
    {
        var element=docu
    }
</script>
<form  method="POST">
<select id="select anything" name="menu"  style="margin-left:50%; background-color:skyblue;color:cornsilk;" onchange="selectchange(this.value);">
<option  value="" disabled selected hidden>MENU</option>
<option name="data">student data</option>
<option>student particulars entry</option>
<option>grading</option>
<option>message to parents</option>
</select>
&nbsp;
<select name="teachers session" style="background-color:skyblue;color:cornsilk">
    <option value="" disabled selected hidden>TEACHER SESSION</option>
    <option>teaching schedule</option>
    <option>attendance</option>
    <option>leave application</option>
</select>
&nbsp;
<select name="ACADEMIC SESSION" style="background-color:skyblue;color:cornsilk">
    <option value="" disabled selected hidden>ACADEMIC SESSION</option>
    <option>ranking of students</option>
    <option>PET performances</option>
</select>
&nbsp;
<button style="background-color:blue;color:cornsilk;"type="submit">logout</button>
&nbsp;
</form>
</div>
<br>
<br>
<br>
<div id="process1" style="visibility:hidden;">
<body>
        <form>
        <select style=;background-color:skyblue;color:cornsilk" name="option">
            <option type="" diabled selected hidden>select type</option>
            <option value="newentry">new entry</option>
            <option value="updatestudentdata">update student data</option>
        </select>
</form>
</body>
</div>
</html>
<?php
    echo '<script>alert("login successful")</script>';
?>