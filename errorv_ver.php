<?php
$year=2020;
$month=1;

for($month=1;$month<13;$month++){

if(!empty($_GET['month'])<13){
     
     if(isset($month)){
       <a href="<?php echo ($month-1);?>"> 上個月 </a>;
     }else{
       <a href="<?php echo ($month+1);?>"> 下個月 </a>;
     }

   }else{
     echo $nextyear=$year+1;
   }

 }else{

 }

2020/11/05




 $thisYear=date("Y");
 $thisMonth=date("m");
 if(!empty($_GET['thisMonth'])){
   if($_GET['thisMonth']==12){
   echo $nextYear=date("Y")+1;
 }else if(isset($thisMonth)){
 }else{
 }
 }else{
 }
 <a href="<?php echo $link_address;?>"> Link </a>
 echo "<a href=".'"mycalendar.php?thisMonth=".$thisMonth=date("m")-1."'.上個月."</a>;";
 echo "<a href=".'"mycalendar.php?thisMonth=".$thisMonth=date("m")+1."'.下個月."</a>;";

?>