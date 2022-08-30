<?php

function disconnection_virgin(){
    if(isset($_SESSION['LOGGED_USER_PICTURE'])){
        $profilpicture=$_SESSION['LOGGED_USER_PICTURE'];
    }
    
    require("view/disconnectionview.php");
}

function disconnection($disconnection_order){
	if (isset($disconnection_order)) {
        unset($_SESSION["LOGGED_USER_PICTURE"]);
        session_destroy();
        header("Location:index.php");
	}

    require("view/disconnectionview.php");
}
