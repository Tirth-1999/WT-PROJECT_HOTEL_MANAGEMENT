<?php
 
 $username=filter_input(INPUT_POST,'username');
 $password=filter_input(INPUT_POST,'password');

if(!empty($username))
{
    if(!empty($password))
    {
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="wt_database";

        $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error())
        {
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else
        {
            $sql="INSERT INTO Login_details(username,password) values('$username','$password')";

            if($conn->query($sql))
            {
                echo "new record.";
            }
            else
            {
                echo "error";
            }
        }
        $conn->close();
    }
    else
    {
        echo "Password is empty!";
        die();
    }

}
else
{
    echo "Username is empty";
    die();
}

?>
