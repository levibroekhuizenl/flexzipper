<?php
require_once '../model/userLogic.php';
class UserController {
        //properties

        //methods
        function __construct() {
            $this->UserLogic = new UserLogic();
        }

        $todo = isset($_REQUEST['todo']) ? $todo = $_REQUEST['todo'] : $todo = 'read';

        function handleRequest() {
            try {

                switch ($todo) {
                    case 'create':
                        
                }

            }catch (Exeption $e){
                throw $e;
            }
        }

        function collectCreateUser($review_id, $name , $desc, $stars) {
            $users = $this->ReviewsLogic->createReview($review_id, $name , $desc, $stars);
        }

        function __destruct() {
            $this->conn = null;
        }
    }

$new = new UserController();
$new->handleRequest();

?>