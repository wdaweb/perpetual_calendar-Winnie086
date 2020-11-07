<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>月曆製作</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Permanent+Marker&display=swap');
* {
  font-family: 'Noto Sans TC', sans-serif;
  font-family: 'Permanent Marker', cursive;

}

table{
  width:1024px;
  margin:auto;
  border:1px solid #ccc;
}
table tr td{
  border:1px solid #ccc;
  text-align:center;
  padding:15px;
}


tr td:hover {
  background-color: lightgray;
}

.title{
  font-family: 'Noto Sans TC', sans-serif;
  font-family: 'Permanent Marker', cursive;
  text-align:center;
  font-size:3rem;
}

tr>td:first-child,tr>td:last-child{
        color:red;
}



</style>
</head>

<body>

<h1 style="text-align:center">Der Kalender</h1>
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

<div style="text-align:center">
<a href="?year=<?=$lastYear;?>&month=<?=$lastMonth;?>">Letzter monat</a>
<span><?=$thisMonth;?>-<?=$thisYear;?></span>
<a href="?year=<?=$nextYear;?>&month=<?=$nextMonth;?>">Nächster Monat</a>
</div>



<table>
<tr>
  <td>Sonntag</td>
  <td>Montag</td>
  <td>Dienstag</td>
  <td>Mittwoch</td>
  <td>Donnerstag</td>
  <td>Freitag</td>
  <td>Samstag</td>
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



	
</body>
</html>