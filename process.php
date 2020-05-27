<?php

    $element=$_POST['menu'];
    if($element=='')
    {
        echo '<script language=javascript>alert("go back and please select an option");</script>';
    }
    else
    {
    switch($element)
    {
        case 'student data':header('location:data.php');
                break;
        case 'grading':echo'hurray';
            break;
        default: echo'not working';
        break;
    }
}

?>