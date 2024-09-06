<?php
//name //email //password

function dbconnect()
{
    $hostname="localhost";
    $username="root";
    $userpassword="";
    $dbname="blooddonor";

    $conn=mysqli_connect($hostname,$username,$userpassword,$dbname);

    return $conn;
}
//addadmin
function addadmin($data)
{
    $name = $data['name'];
    $email = $data['email'];
    $blood = $data['blood'];
    $date = $data['date'];
    $text = $data['text'];

    $conn = dbconnect();

    $sql="select email from donate where email = '$email'";
    $rs=mysqli_query($conn,$sql)or die(mysqli_error($conn));

    if(mysqli_num_rows($rs)> 0)
    {
        echo "allready registered";
    }
    else
    {
        $sql="insert into request(name,email,blood,date,text)values('$name','$email','$blood','$date','$text')";

        $responce=mysqli_query($conn,$sql);

        return $responce;
    }
}
//getalladmin
    function getalladmin()
    {
        $conn = dbconnect();

        $sql = "select *from request";

        $responce=mysqli_query($conn,$sql);

        return $responce;
    }

    function getAllDonorsByGroup($bg)
    {
        $conn = dbconnect();

        $sql = "select *from donate where blood='$bg'";

        $responce=mysqli_query($conn,$sql);

        return $responce;
    }

    function getDonorbyId($email)
    {
        $conn = dbconnect();

        $sql = "select *from donate where email='$email'";

        $responce=mysqli_query($conn,$sql);

        return $responce;
    }

?>