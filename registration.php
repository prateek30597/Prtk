<?php
                                            
$name = filter_input(INPUT_POST,"name");
$id = filter_input(INPUT_POST,"id");
$english = filter_input(INPUT_POST,"english");
$physics = filter_input(INPUT_POST,"physics");
$chemistry= filter_input(INPUT_POST,"chemistry");
$mathematics = filter_input(INPUT_POST,"mathematics");   
$mechanics=filter_input(INPUT_POST,"mechanics");    


$link = mysqli_connect("127.0.0.1", "root", "root", "school");                    //to create connection. 

if (!$link) {
echo "some error occurs.";	
}

$sql= "insert into student values ('$english','$physics','$chemistry','$mathematics','$mechanics','$name','$id')";          //insert query.


if ($link->query($sql) === TRUE) {
    echo "table created successsfully";
} 
else 
{
    echo "please fill the details again.1" ;
}

?>