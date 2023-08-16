<?php


class Model {

function __construct(protected $connection = null)
{
    $this->connection = new mysqli("localhost","root","","api");
    // if($this->connection){
    //     echo "connection Success";
    // }

}
function Insert($tbl,$data){
    $clm = implode(",",array_keys($data));
    $val = implode("','",$data);
    $SQL = " INSERT INTO $tbl ($clm) VALUE ('$val')";
    echo $SQL;
    $SQLEx = $this->connection->query($SQL);
    if($SQLEx > 0){
        $ResonceData['Code'] = "1";
        $ResonceData['Msg'] = "Success";
        $ResonceData['Data'] = "1";
    } else {
        $ResonceData['Code'] = "0";
        $ResonceData['Msg'] = "Try Again";
        $ResonceData['Data'] = "0";
    }
    return $ResonceData;

}


}
