<?php

function billing(){

    if(isset($_SESSION['LOGGED_USER_PICTURE']))
    {
		$profilpicture=$_SESSION['LOGGED_USER_PICTURE'];
	}

    $cumulationproductsCartDimensionsPrice = 0;


    if (isset($_SESSION['cart'])){
        $productsCart = $_SESSION['cart'];
    }
    else{
        $productsCart = array();
    }

    if(isset($_COOKIE['LOGGED_USER_NAME'])){
        $userFirstname= $_COOKIE['LOGGED_USER_FIRSTNAME'];
        $userName= $_COOKIE['LOGGED_USER_NAME'];
        $userEmail= $_COOKIE['LOGGED_USER_EMAIL'];
        $userAddress= $_COOKIE['LOGGED_USER_ADDRESS'];
        $userPostalCode= $_COOKIE['LOGGED_USER_POSTAL_CODE'];
        $userCity= $_COOKIE['LOGGED_USER_CITY'];
        $userPhoneNumber= $_COOKIE['LOGGED_USER_PHONE_NUMBER'];
        $userCountry = $_COOKIE['LOGGED_USER_COUNTRY'];
    }
    elseif(isset($_SESSION['LOGGED_USER_NAME'])){
        $userFirstname= $_SESSION['LOGGED_USER_FIRSTNAME'];
        $userName= $_SESSION['LOGGED_USER_NAME'];
        $userEmail= $_SESSION['LOGGED_USER_EMAIL'];
        $userAddress= $_SESSION['LOGGED_USER_ADDRESS'];
        $userPostalCode= $_SESSION['LOGGED_USER_POSTAL_CODE'];
        $userCity= $_SESSION['LOGGED_USER_CITY'];
        $userPhoneNumber= $_SESSION['LOGGED_USER_PHONE_NUMBER'];
        $userCountry = $_SESSION['LOGGED_USER_COUNTRY'];
    }
    else{
        $userFirstname= '';
        $userName= '';
        $userEmail=  '';
        $userAddress=  "";
        $userPostalCode= '';
        $userCity=  '';
        $userPhoneNumber= '';
        $userCountry ='';
    }

	require('view/billingview.php'); 
}
