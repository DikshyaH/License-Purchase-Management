<?PHP
  $address1=$_COOKIE['address'];
  $expiry= $_COOKIE['expiry'];
  echo $expiry;
  $name1= $_COOKIE['name'];
  $price ="3";
  $days ="0";
  $today=date("Ymd");

  $expdate=substr($expiry,6);
  $expmnth=substr($expiry,4,2);
  $expyear=substr($expiry,0,4);

  $tdate=date("d");
  $tmnth=date("m");
  $tyear=date("Y");

  $ydiff = (int)$expyear - (int)$tyear;
  $mdiff = (int)$expmnth - (int)$tmnth;
  $ddiff = (int)$expdate - (int)$tdate;
  echo "!!!!!!!!!!!!!!!!!";
  echo $ddiff;
  echo "!!!!!!!!!!!!!!!!!";

  if($ddiff){
    $day = 0;
    if($mdiff > 1){
      $mnths = $mdiff - 1;
      $day = $mnths * 30;
      $bef = 30 - $tdate;
      $after = $expdate;
      $days = $day + $bef + $after;
      echo "!!!!!!!!!!!!!!!!!"; 
      echo $days;
    }
  }

  echo " ...... ";
  echo $ydiff;
  echo " ...... ";
  echo $mdiff;
  echo " ...... ";
  echo $ddiff;


  

  $servername= "localhost";
  $username="root";
  $password="";
  $dbname="lictrack";

  $conn = new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
      echo "dffaf";
  }else{echo "Successful";}
echo $expiry;
$sql = "INSERT INTO purdetails (address,expiry,purchased,name,ether,days_left) VALUES ('$address1','$expiry','$today','$name1','$price','$days')";
if($conn->query($sql) === TRUE){
    echo "done";
}else{
    echo $conn->error;
}

  $conn->close();


?>