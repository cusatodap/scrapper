<?php
include "class.ahoroscope.php";
$sign=$_GET['s'];
$type=$_GET['type'];
if($sign&&$type){
	$hs=new ahoroscope();
	switch($type){
		case "daily":
		//echo "1";
		$h=$hs->getHoroscope_daily($sign);
		break;
		case "single":
		//echo "2";
		$h=$hs->getHoroscope_single($sign);
		break;
		case "couple":
		//echo "3";
		$h=$hs->getHoroscope_couple($sign);
		break;
		case "monthly":
		//echo "3";
		$h=$hs->getHoroscope_monthly($sign);
		break;
		case "romance":
		//echo "3";
		$h=$hs->getHoroscope_romance($sign);
		break;
		case "wromance":
		//echo "3";
		$h=$hs->getHoroscope_wromance($sign);
		break;
		case "career":
		//echo "3";
		$h=$hs->getHoroscope_career($sign);
		break;
		case "fitness":
		//echo "3";
		$h=$hs->getHoroscope_fitness($sign);
		break;
		case "teen":
		//echo "3";
		$h=$hs->getHoroscope_teen($sign);
		break;
		case "tech":
		//echo "3";
		$h=$hs->getHoroscope_tech($sign);
		break;
		case "flirt":
		//echo "3";
		$h=$hs->getHoroscope_flirt($sign);
		break;
		case "beauty":
		//echo "3";
		$h=$hs->getHoroscope_beauty($sign);
		break;
		case "slam":
		//echo "3";
		$h=$hs->getHoroscope_slam($sign);
		break;
		case "baby":
		//echo "3";
		$h=$hs->getHoroscope_baby($sign);
		break;
		case "cat":
		//echo "3";
		$h=$hs->getHoroscope_cat($sign);
		break;
		case "dog":
		//echo "3";
		$h=$hs->getHoroscope_dog($sign);
		break;
		case "h_g":
		//echo "3";
		$h=$hs->getHoroscope_h_g($sign);
		break;
		case "weekly":
		//echo "3";
		$h=$hs->getHoroscope_weekly($sign);
		break;
		case "bus":
		//echo "3";
		$h=$hs->getHoroscope_bus($sign);
		break;
		case "travel":
		//echo "3";
		$h=$hs->getHoroscope_travel($sign);
		break;
		case "wflirt":
		//echo "3";
		$h=$hs->getHoroscope_wflirt($sign);
		break;
		case "year":
		//echo "3";
		$h=$hs->getHoroscope_year($sign);
		break;
	}
	$h1 = wordwrap($h, 50, "<br />\n");
	print "<b>Horoscope for ".ucfirst(strtolower($sign)).":</b><br>$h1";
}
?>