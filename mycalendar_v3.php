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
<link rel="icon" href="image/tag.ico" type="image/x-icon">
<link rel="shortcut icon" href="mage/tag.ico" type="image/x-icon">

</head>

<body>


<div class="container p-0">

<div class="header col-12 justify-content-center align-items-center d-flex shadow rounded"><h1 class="display-1">Der Kalender</h1></div>


<div class="row m-0">
<div class="left col-6 justify-content-center shadow rounded">
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

<!-- 查詢年月的 -->
<div class="container-fluid m-0">
    <form class="d-flex justify-content-center align-items-center" action="mycalendar_v3.php" method="$_GET">
      <div class="col-4 ml-4"><input type="number" name="year" placeholder="Jahre" min="0" required></div>
      <div class="col-4 mb-12"><input type="number" name="month" placeholder="Monat" min="1" max="12" required></div>
      <div class="col-4 mr-4"><input type="submit" class="btn btn-dark " value="suchen"></div>
    </form>
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



<div class="right col-6 shadow rounded">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
  </ol>

  <div class="carousel-inner">

   <div class="carousel-item btn btn-dark active">
   <img src="https://image.shutterstock.com/image-vector/capricorn-sign-zodiac-artistic-color-600w-1674118798.jpg" class="d-block w-100 shadow rounded" alt="Der Steinbock" width="500" height="520">
   <h1 class="display-5 carousel-caption black">Der Steinbock</h1>
   <div class="display-5">21.12-20.01</div> 
   </div>

    <div class="carousel-item btn btn-dark">
    <img src="https://image.shutterstock.com/image-vector/aquarius-sign-zodiac-artistic-color-600w-1674125167.jpg" class="d-block w-100 shadow rounded" alt="Der Wassermann" width="500" height="520">
    <h1 class="display-5 carousel-caption black">Der Wassermann</h1>
    <div class="display-5">21.01-19.02</div> 
    </div>
    
    <div class="carousel-item btn btn-dark">
     <img src="https://image.shutterstock.com/image-vector/pisces-sign-zodiac-artistic-color-600w-1674132709.jpg" class="d-block w-100  shadow rounded" alt="Die Fische" width="500" height="520">
    <h1 class="display-5 carousel-caption black">Die Fische</h1>
    <div class="display-5">20.02-20.03</div> 
    </div>

    <div class="carousel-item btn btn-dark">
      <img src="https://image.shutterstock.com/image-vector/aries-sign-zodiac-artistic-color-600w-1673935615.jpg" class="d-block w-100 shadow rounded" alt="Der Widder" width="500" height="520">
      <h1 class="display-5 carousel-caption black">Der Widder</h1>
      <div class="display-5">21.03-19.04</div> 
    </div>

    <div class="carousel-item btn btn-dark">
      <img src="https://image.shutterstock.com/image-vector/taurus-sign-zodiac-artistic-color-600w-1673935765.jpg" class="d-block w-100 shadow rounded" alt="Der Stier" width="500" height="520">
      <h1 class="display-5 carousel-caption black">Der Stier</h1>
      <div class="display-5">20.04-20.05</div> 
    </div>

    <div class="carousel-item btn btn-dark">
      <img src="https://image.shutterstock.com/image-vector/gemini-sign-zodiac-artistic-color-600w-1673990944.jpg" class="d-block w-100 shadow rounded" alt="Die Zwillinge" width="500" height="520">
      <h1 class="display-5 carousel-caption black">Die Zwillinge</h1>
      <div class="display-5">21.05-21.06</div> 
    </div>
   
    <div class="carousel-item btn btn-dark">
      <img src="https://image.shutterstock.com/image-vector/cancer-sign-zodiac-artistic-color-600w-1674051217.jpg" class="d-block w-100 shadow rounded" alt="Der Krebs" width="500" height="520">
      <h1 class="display-5 carousel-caption black">Der Krebs</h1>
      <div class="display-5">22.06-22.07</div> 
    </div>
    

    <div class="carousel-item btn btn-dark">
      <img src="https://image.shutterstock.com/image-vector/leo-sign-zodiac-artistic-color-600w-1674028624.jpg" class="d-block w-100 shadow rounded" alt="Der Löwe" width="500" height="520">
      <h1 class="display-5 carousel-caption black">Der Löwe</h1>
      <div class="display-5">23.07-22.08</div> 
    </div>

    <div class="carousel-item btn btn-dark btn btn-dark">
      <img src="https://image.shutterstock.com/image-vector/virgo-sign-zodiac-artistic-color-600w-1674067552.jpg" class="d-block w-100 shadow rounded" alt="Die Jungfrau" width="500" height="520">
      <h1 class="display-5 carousel-caption black carousel-caption black">Die Jungfrau</h1>
      <div class="display-5">23.08-22.09</div> 
    </div>
  
    <div class="carousel-item btn btn-dark">
      <img src="https://image.shutterstock.com/image-vector/libra-sign-zodiac-artistic-color-600w-1674091282.jpg" class="d-block w-100 shadow rounded" alt="Die Waage" width="500" height="520">
      <h1 class="display-5 carousel-caption black">Die Waage</h1>
      <div class="display-5">23.09-23.10</div> 
    </div>

    <div class="carousel-item btn btn-dark">
      <img src="https://image.shutterstock.com/image-vector/scorpio-sign-zodiac-artistic-color-600w-1674101791.jpg" class="d-block w-100 shadow rounded" alt="Der Skorpion" width="500" height="520">
      <h1 class="display-5 carousel-caption black">Der Skorpion</h1>
      <div class="display-5">24.10-21.11</div> 
    </div>

    <div class="carousel-item btn btn-dark">
      <img src="https://image.shutterstock.com/image-vector/sagittarius-sign-zodiac-artistic-color-600w-1674110653.jpg" class="d-block w-100 shadow rounded" alt="Der Schütze" width="500" height="520">
      <h1 class="display-5 carousel-caption black">Der Schütze</h1>
      <div class="display-5">22.11-20.12</div> 
    </div>
 
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon btn btn-danger btn-lg active"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon btn btn-danger btn-lg active"></span>
    <span class="sr-only">Next</span>
  </a>

</div>


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
    <div class="layer29"></div>
    <div class="layer30"></div>
  </div>







</body>
</html>

11.11.20 16.34 _v4