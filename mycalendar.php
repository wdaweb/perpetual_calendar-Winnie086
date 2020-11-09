<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalender</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>


<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC&family=Permanent+Marker&display=swap');

.container{
  z-index:1;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  font-family:'Permanent Marker','Noto Sans TC';
  width: 1024px;
  height: 768px;
  /* border: 1px solid #000; */
  text-align: center;
}

.header {
  background:black;
  color:white;
  /* border: 1px solid #000; */
  width: 994px;
  height: 192px;
}

.left {
  background:yellow;
  color:black;
  width: 512px;
  height: 576px;
  /* border: 1px solid #000; */
  float: left;
  font-size:1rem;
}

.right {
  background:red;
  width: 480px;
  height: 576px;
  /* border: 1px solid #000; */
  float: right;
}



table{
  width:512px;
  margin:auto;
  border:1px solid #ccc;
}
table tr td{
  border:1px solid #ccc;
  text-align:center;
  padding:10px;
}


tr td:hover {
  background-color: white;
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

.bb{  z-index:2;
      display: flex;
      justify-content:center;
      align-items: center;
      height: 100vh;
    }
    .bg{
      display:block;
      position: relative;
      width:100vw;
      height:100vh;
    }
    

    .layer1 {
      width: 2000px;
      height: 2000px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer1 1s infinite;
    }

    .layer2 {
      width: 1960px;
      height: 1960px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer2 1s infinite;
    }
    .layer3 {
      width: 1920px;
      height: 1920px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer3 1s infinite;
    }
    .layer4 {
      width: 1880px;
      height: 1880px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer4 1s infinite;
    }
    .layer5 {
      width: 1840px;
      height: 1840px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer5 1s infinite;
    }
    .layer6 {
      width: 1800px;
      height: 1800px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer6 1s infinite;
    }
    .layer7 {
      width: 1760px;
      height: 1760px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer7 1s infinite;
    }
    .layer8 {
      width: 1720px;
      height: 1720px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer8 1s infinite;
    }
    .layer9 {
      width: 1680px;
      height: 1680px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer9 1s infinite;
    }
    .layer10 {
      width: 1640px;
      height: 1640px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer10 1s infinite;
    }
    .layer11 {
      width: 1600px;
      height: 1600px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer11 1s infinite;
    }
    .layer12 {
      width: 1560px;
      height: 1560px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer12 1s infinite;
    }
    .layer13 {
      width: 1520px;
      height: 1520px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer13 1s infinite;
    }
    .layer14 {
      width: 1480px;
      height: 1480px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer14 1s infinite;
    }
    .layer15 {
      width: 1440px;
      height: 1440px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer15 1s infinite;
    }
    .layer16 {
      width: 1400px;
      height: 1400px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer14 1s infinite;
    }
    .layer17 {
      width: 1360px;
      height: 1360px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer15 1s infinite;
    }
    .layer18 {
      width: 1320px;
      height: 1320px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer14 1s infinite;
    }
    .layer19 {
      width: 1280px;
      height: 1280px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer15 1s infinite;
    }
    .layer20 {
      width: 1240px;
      height: 1240px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer14 1s infinite;
    }
    .layer21 {
      width: 1200px;
      height: 1200px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer15 1s infinite;
    }
    .layer22 {
      width: 1160px;
      height: 1160px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer14 1s infinite;
    }
    .layer23 {
      width: 1120px;
      height: 1120px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer15 1s infinite;
    }
    .layer24 {
      width: 1080px;
      height: 1080px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer14 1s infinite;
    }
    .layer25 {
      width: 1040px;
      height: 1040px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer15 1s infinite;
    }
    .layer26 {
      width: 1000px;
      height: 1000px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer14 1s infinite;
    }
    .layer27 {
      width: 960px;
      height: 960px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer15 1s infinite;
    }
    .layer28 {
      width: 920px;
      height: 920px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer14 1s infinite;
    }
    .layer29 {
      text-align:center;
      width: 880px;
      height: 880px;
      background:black;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer15 1s infinite;
    }
    .layer30 {
      width: 840px;
      height: 840px;
      background:white;
      border-radius:50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      animation: layer14 1s infinite;
    }
    @keyframes layer1{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer3{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer5{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer7{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer9{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer11{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer13{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer15{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer17{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer19{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer21{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer23{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer25{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer27{
      from{background:white;}
      to{background:black;}
    }
    @keyframes layer29{
      from{background:white;}
      to{background:black;}
    }

    @keyframes layer2{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer4{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer6{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer8{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer10{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer12{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer14{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer16{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer18{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer20{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer22{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer24{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer26{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer28{
      from{background:black;}
      to{background:white;}
    }
    @keyframes layer30{
      from{background:black;}
      to{background:white;}
    }
</style>
</head>

<body>


<div class="container">

  <div class="header"><h1 class='justify-content-center d-flex m-auto display-2'>Der Kalender</h1></div>

<div class="left">
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

<div class='justify-content-center d-flex m-auto' style="width:512px">
<h1 class='justify-content-center d-flex m-auto display-4'><?=$thisMonth;?>-<?=$thisYear;?></h1>
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


<div class='justify-content-between d-flex m-auto' style="width:512px">
<a href="?year=<?=$lastYear;?>&month=<?=$lastMonth;?>" class="btn btn-dark btn-lg active">Letzter monat</a>
<a href="?year=<?=$nextYear;?>&month=<?=$nextMonth;?>" class="btn btn-dark btn-lg active">Nächster Monat</a>
</div>
</div>


<div class="right">

<img src="https://obs.line-scdn.net/0hDNXEyGyNG2FlPDCNJ_1kNl9qGA5WUAhiAQpKYiZSRVUdBQ8yDlJTVElpTQFMClw_CwpXBUE6AFAYXloxXlNT/w644" width="490" height="490" class="figure-img img-fluid rounded" alt="Ill">

</div>


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