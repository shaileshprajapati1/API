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
    // echo $SQL;
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
function Login($uname,$pass){
    $SQL = " SELCET * FROM register where password='$pass' AND username = '$uname'";
    // echo $SQL;
    $SQLEx = $this->connection->query($SQL);
    
    if($SQLEx->num_rows > 0){
        while ($data = $SQLEx->fetch_object()) {
            $FetchData[]=$data;
        }
        $ResonceData['Code'] = "1";
        $ResonceData['Msg'] = "Success";
        $ResonceData['Data'] = $FetchData;
    } else {
        $ResonceData['Code'] = "0";
        $ResonceData['Msg'] = "Try Again";
        $ResonceData['Data'] = "0";
    }
    return $ResonceData;

}
function Select($tbl,$where = null){
    $SQL = " SELECT * FROM $tbl ";
    if($where != ""){
        $SQL.= " WHERE";
        foreach ($where as $key => $value) {
           $SQL.= " $key ='$value'AND";
        }
        $SQL =rtrim($SQL,"AND");
    }
    // echo $SQL;
    $SQLEx = $this->connection->query($SQL);
    
    if($SQLEx->num_rows > 0){
        while ($data = $SQLEx->fetch_object()) {
            $FetchData[]=$data;
        }
        $ResonceData['Code'] = "1";
        $ResonceData['Msg'] = "Success";
        $ResonceData['Data'] = $FetchData;
    } else {
        $ResonceData['Code'] = "0";
        $ResonceData['Msg'] = "Try Again";
        $ResonceData['Data'] = "0";
    }
    return $ResonceData;

}


}
