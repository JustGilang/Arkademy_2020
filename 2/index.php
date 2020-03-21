<?php
	 function isAcceptedUsername($username) {
		  return preg_match('/^[a-z0-9]{5,7}$/i',$username) ;
	 }
	 if (isAcceptedUsername("diandra")) {
		 echo "Username Is Valid" ;
	 } else {
		 echo "Username Is Invalid" ;
     }
    function isAcceptedPass($password) {
       return preg_match('/^[a-zA-Z0-9@]{9}$/i',$password) ;
    }
    if (isAcceptedPass("Kint4m@ni")) {
        echo "Password Is Valid" ;
    } else {
        echo "Password Is Invalid" ;
    }
?>