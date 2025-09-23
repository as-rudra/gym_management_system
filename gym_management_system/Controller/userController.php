<?php
    require_once("../Model/userModel.php");

    function validateUser($id, $pass)
    {
        return validateUsers($id, $pass);
    }

?>