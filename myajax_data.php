<?php
$data=array();
  $user = array(
  	"akash"=>array("user"=>"AKASH KUMAR","age"=>21,"work"=>"Web Design","img"=>"a2.jpg"),
  	"akshay"=>array("user"=>"AKSHAY KUMAR","age"=>22,"work"=>"Graphic Design","img"=>"b.jpg"),
  	"sumit"=>array("user"=>"SUMIT KUMAR","age"=>26,"work"=>"Java Developer","img"=>"a1.jpg"),
  	"piyush"=>array("user"=>"PIYUSH KUMAR","age"=>27,"work"=>"Human Resource","img"=>"a3.jpg"),

  );

  $opr=$_POST['opr'];
 
   if(array_key_exists($opr,$user))
	{
		$data=$user[$opr];
		
	}
	else
		{
			$data="No record found";
		}
echo json_encode($data);

/*	foreach ($user as $key => $value) {
		if($key==$opr)
		{
			$data=$value;
			echo json_encode($data);	
		}
	}
	*/
?>
