<div class="deals-box">


<div class="deals-header-text">Deals of the week</div>

<?php
$query = "SELECT * FROM product WHERE ((cost_price-selling_price)/cost_price)*100 > 15";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){

$name = $row['name'];
$cat = $row['category'];
$photo = $row['photo'];
$cp = $row['cost_price'];
$sp = $row['selling_price'];
$stl = $row['stock'];
$desc = $row['details'];
$id = $row['id'];
$sd = $row['sold'];
$date = $row['date_id'];

if($stl < 1){
$stl = 1;
}
$beaker = ($sd/$stl)*100;



$col = "";
$star = "";
if($beaker >= 0 && $beaker <= 50){
$star = "fs3.png";
}
elseif($beaker > 50  && $beaker <= 70){
$col = "#f39c12";
$star = "fs4.png";
}
elseif($beaker > 70){
  $col = "#d33724";
$beaker = "88";
$star = "fs5.png";
}


  $discount = ($cp - $sp)/$cp;
  $percentage = round($discount * 100, 1);

if($percentage>=0 && $percentage <= 10){
$discount_color = "#357ca5";
}
elseif($percentage > 10 && $percentage <= 20){
$discount_color = "#008d4c";
}
elseif($percentage > 20 && $percentage <= 30){
$discount_color = "#ca195a";
}
elseif($percentage > 30 && $percentage <= 40){
$discount_color = "#001a35";
}
elseif ($percentage > 40 && $percentage <= 50) {
$discount_color = "#555299";
}
elseif($percentage > 50){
  $discount_color = "#d81b60";
}
$date = substr($date, 0, 10);

}
}

?>

<div class="deals-img">
<a data-toggle="modal" data-target="#productModal" title="Click to view details" href="#" onclick="butProduct(<?php echo $id?>)">
    <img src="images/<?php echo $photo?>" style="width: 250px; height: 270px"></a>
</div>


<div class="deals-product-name">
    <?php echo $name; ?> <span>&#8358;<?php echo number_format($sp) ?></span><span><strike>&#8358;<?php echo number_format($cp) ?></strike></span>
</div>



<div class="ap">
  <div class="deals-available-title">available <?php echo $stl ?> <span>Already Sold <?php echo $sd ?></span></div>
  <div class="deals-progress-bar">
<div style="width: <?php echo $beaker."%" ?>"></div>
  </div>
</div>


<div class="countdown">
Hurry Up Before Offers End
</div>


</div>