<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalender</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="mycalendar.css">
<script src="https://kit.fontawesome.com/4233378c09.js"></script>
</head>

<body>


<div class="container p-0">

<div class="header col-12 justify-content-center align-items-center d-flex"><h1 class="display-2">Der Kalender</h1></div>


<div class="row m-0">
<div class="left col-6">
<?php
if(!isset($_GET['month'])){
      $thisMonth=date("m");
}else{
      $thisMonth= $_GET['month'];
}

if(!isset($_GET['year'])){
      $thisYear=date("Y");
}else{
      $thisYear= $_GET["year"];
}

// 站在下個月的角度去思考
if(($thisMonth+1)>=13){
 $nextMonth=1;
  $nextYear=$thisYear+1;
}else{
   $nextMonth=$thisMonth+1;
  $nextYear=$thisYear;
}

// 站在上個月的角度去思考
if(($thisMonth-1)<=0){
   $lastMonth=12;
   $lastYear=$thisYear-1;
}else{
   $lastMonth=$thisMonth-1;
   $lastYear=$thisYear;
}


$firstDate=strtotime("$thisYear-$thisMonth",'1');
$monthDays=date("t",$firstDate);
$startDayWeek=date('w',$firstDate);
$year
?>

<div class='justify-content-center d-flex m-auto'style="width:512px">
<h1 class='justify-content-center d-flex m-auto display-4'><?=$thisMonth;?>-<?=$thisYear;?></h1>

<!-- 顯示此年、此月的 -->
</div>

<table>
<tr>
  <td>So,</td>
  <td>Mo,</td>
  <td>Di, </td>
  <td>Mi,</td>
  <td>Do,</td>
  <td>Fr,</td>
  <td>Sa,</td>
</tr>
<?php
for($i=0;$i<6;$i++){
  echo "<tr>";
  for($j=0;$j<7;$j++){
    echo "<td>";
    if($i==0 && $j<$startDayWeek){
      echo "&nbsp";
    }else if((($i*7)+($j+1)-$startDayWeek)>$monthDays){
      echo "&nbsp";
    }else{
      echo ($i*7)+($j+1)-$startDayWeek;
    }
  }
}

?>
</table>


<div class='justify-content-around d-flex m-auto' style="width:512px">
<a href="?year=<?=$lastYear;?>&month=<?=$lastMonth;?>" class="btn btn-dark btn-lg active"><i class="fas fa-angle-double-left"></i></a>
<a href="?year=<?=$nextYear;?>&month=<?=$nextMonth;?>" class="btn btn-dark btn-lg active"><i class="fas fa-angle-double-right"></i></a>

<!-- a href的 -->
</div>


<!--div left的 -->
</div>



<div class="right col-6">
<img src="https://obs.line-scdn.net/0hDNXEyGyNG2FlPDCNJ_1kNl9qGA5WUAhiAQpKYiZSRVUdBQ8yDlJTVElpTQFMClw_CwpXBUE6AFAYXloxXlNT/w644" width="490" height="490" class="figure-img rounded" alt="Ill">

<!--div right的 -->
</div>


<!-- div row的 -->
</div>

<!-- div container的 -->
</div>


<!-- 背景動畫 -->
<div class="bb">
    <div class="layer1"></div>
    <div class="layer2"></div>
    <div class="layer3"></div>
    <div class="layer4"></div>
    <div class="layer5"></div>
    <div class="layer6"></div>
    <div class="layer7"></div>
    <div class="layer8"></div>
    <div class="layer9"></div>
    <div class="layer10"></div>
    <div class="layer11"></div>
    <div class="layer12"></div>
    <div class="layer13"></div>
    <div class="layer14"></div>
    <div class="layer15"></div>
    <div class="layer16"></div>
    <div class="layer17"></div>
    <div class="layer18"></div>
    <div class="layer19"></div>
    <div class="layer20"></div>
    <div class="layer21"></div>
    <div class="layer22"></div>
    <div class="layer23"></div>
    <div class="layer24"></div>
    <div class="layer25"></div>
    <div class="layer26"></div>
    <div class="layer27"></div>
    <div class="layer28"></div>
    <div class="layer29">唯有當你注意到我，我才有意義</div>
    <div class="layer30"></div>
  </div>







</body>
</html>