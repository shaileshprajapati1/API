
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
                    print_r($Data);
                    $InsertRes = $this->Insert("register", $Data);
                    
                    // echo json_encode($InsertRes);
                    break;
                case '/uploadimage':
                    $filename = $_FILES['profile_pic']['name'];
                    move_uploaded_file($_FILES['profile_pic']['tmp_name'],"Uploads/".$filename);
                    echo json_encode($filename);
                    break;
                case '/viewalldatabyid':
                  $ViewData = $this->Select("register");
                //   echo "<pre>";
                //   print_r( $ViewData);
                //   echo "</pre>";
                  echo json_encode($ViewData);
                    break;
                case '/selectdatabyid':
                  $SelectData = $this->Select("register",array("id"=>$_REQUEST["id"]));
                //   echo "<pre>";
                //   print_r( $SelectData);
                //   echo "</pre>";
                  echo json_encode($SelectData);
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