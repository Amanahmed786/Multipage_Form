<?php

$dbhost='localhost';
$dbname='demo';
$dbuser='root';
$dbpass='';

$mysqli=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$mysqli)
{
    echo 'not connect';

}

else{
    echo 'connected';
}


?>
