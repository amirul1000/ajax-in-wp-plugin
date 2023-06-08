<?php
      
       $cmd = isset($_REQUEST['cmd'])?$_REQUEST['cmd']:'';
	  
	   switch($cmd)
	   { 
	       case "read":
		              $arr[0] = $_POST['param1']+$_POST['param2']; 
					  echo json_encode($arr);  
				break;	
	   }
?>