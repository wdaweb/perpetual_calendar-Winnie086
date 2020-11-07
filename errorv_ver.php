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


$thisYear=date("Y");
$thisMonth=date("m");
// echo "這個月：".$thisMonth."月";
// echo "<br>";
$monthDays=date("t");
// echo "此月天數：".$monthDays."天";
// echo "<br>";
$firstDate=strtotime(date('Y-m-').'1');
$startDayWeek=date('w',$firstDate);
// echo "第一天星期：";
// switch ($startDayWeek){
//   case '0':echo"日";break;
//   case '1':echo"一";break;
//   case '2':echo "二";break;
//   case '3':echo "三";break;
//   case '4':echo"四";break;
//   case '5':echo"五";break;
//   case '6':echo "六";break;
// }

if(isset($_GET['thisMonth'])){

for($thisMonth=1;$thisMonth<13;$thisMonth++){

  if($thisMonth>1 && $thisMonth<12){
    $lastMonth=$thisMonth-1;
    $nextMonth=$thisMonth+1;
  }else if($thisMonth==1){

      $lastYear=$thisYear-1;
      $lastMonth=12;

    }else if($thisMonth==12){
      $nextYear=$thisYear+1;
      $nextMonth=1;
    }

    echo <a href='mycalendar.php?thisMonth=<?$_GET['lastMonth'];?>'>上個月</a>;
    echo <a href='mycalendar.php?thisMonth=<?$_GET['nextMonth'];?>'>下個月</a>;
  }


}