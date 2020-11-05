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
table{
  font-family: 'Noto Sans TC', sans-serif;
  font-family: 'Permanent Marker', cursive;
  width:750px;
  margin:auto;
  border:1px solid #ccc;
}
table tr td{
  border:1px solid #ccc;
  text-align:center;
  padding:10px;
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

<h3 style="text-align:center">萬年曆</h3>
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

<div style="text-align:center">
<?php
$thisYear=date("Y");
$thisMonth=date("m");
echo "這個月：".$thisMonth."月";
echo "<br>";
$monthDays=date("t");
echo "此月天數：".$monthDays."天";
echo "<br>";
$firstDate=strtotime(date('Y-m-').'1');
$startDayWeek=date('w',$firstDate);
echo "第一天星期：";
switch ($startDayWeek){
  case '0':echo"日";break;
  case '1':echo"一";break;
  case '2':echo "二";break;
  case '3':echo "三";break;
  case '4':echo"四";break;
  case '5':echo"五";break;
  case '6':echo "六";break;
}

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
</div>









</body>
</html>



 }