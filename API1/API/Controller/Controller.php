
<?php
require_once("Model/Model.php");

class Controller extends Model
{

    function __construct()
    {
        parent::__construct();
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/register':
                    $Data = json_decode(file_get_contents('php://input'), TRUE);
                    // print_r($Data);
                    $InsertRes = $this->Insert("register", $Data);
                    
                    // echo json_encode($InsertRes);
                    break;
                case '/login':
                    echo "Login";
                    break;

                default:
                    # code...
                    break;
            }
        }
    }
}

$Controller = new Controller;
?>