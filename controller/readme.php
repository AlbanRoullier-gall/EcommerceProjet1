<?php
function readme(){
	
    if(isset($_SESSION['LOGGED_USER_PICTURE'])){
        $profilpicture=$_SESSION['LOGGED_USER_PICTURE'];
      }

    require("view/readmeview.php");
}
