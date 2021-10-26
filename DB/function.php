<?php
include("connect.php")


//ASSIGNING A FUNCTION FOR $CON
function check_login($con)
{

    //REQUESTING FOR USER_ID FROM DATABASE
    if(isset($_SESSION['user_id']))
    {

        //WHERE ID IS = USER_ID
        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows ($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;

        }
        
    }
    //REDIRECT TO LOGIN
    header("Location: login.php");
    die;

}
    //GENERATING RANDOM NUMBER FOR ID  
function random_number($lenth)
{

    if($lenth < 5)
    {
        $lenth = 5;
    }

    $len = rand(4,$lenth);
    
    for ($i=0; $i < $len; $i++) { 
        # code...

        $text .= rand(0,9);
    }

    return $text;

}
