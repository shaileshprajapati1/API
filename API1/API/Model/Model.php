<?php


class Model {

function __construct(protected $connection = null)
{
    $this->connection = new mysqli("localhost","root","","api");
    // if($this->connection){
    //     echo "connection Success";
    // }

}
function Insert(){

}


}


?>