<?php
class ahoroscope
{
	function getHoroscope_daily($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailylong".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,"iTxt")!==false)
		{
			$ii=strpos($pg,"iTxt")+6;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_single($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailysingles".$sign.".html";
		//echo $lnk;
		$pg=file_get_contents($lnk);
		if(strpos($pg,"iTxt")!==false)
		{
			$ii=strpos($pg,"iTxt")+6;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_couple($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailyrom".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_monthly($sign)
	{
		$lnk="http://horoscopes.astrology.com/monthly".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_romance($sign)
	{
		$lnk="http://horoscopes.astrology.com/monthlyrom".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_wromance($sign)
	{
		$lnk="http://horoscopes.astrology.com/weeklyrom".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_career($sign)
	{
		$lnk="http://horoscopes.astrology.com/monthlycar".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_fitness($sign)
	{
		$lnk="http://horoscopes.astrology.com/monthlyfit".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_teen($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailyteen".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_tech($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailytech".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_flirt($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailyfunflirty".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_beauty($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailybeauty".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_slam($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailyslam".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_baby($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailybabyscope".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_cat($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailycatscope".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_dog($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailydogscope".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_h_g($sign)
	{
		$lnk="http://horoscopes.astrology.com/dailyhomeandgarden".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_weekly($sign)
	{
		$lnk="http://horoscopes.astrology.com/weekly".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_bus($sign)
	{
		$lnk="http://horoscopes.astrology.com/weeklybus".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_travel($sign)
	{
		$lnk="http://horoscopes.astrology.com/weeklytravel".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_wflirt($sign)
	{
		$lnk="http://horoscopes.astrology.com/weeklyfunflirty".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'id="intelliTxt"')!==false)
		{
			$ii=strpos($pg,'id="intelliTxt"')+16;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
	function getHoroscope_year($sign)
	{
		$lnk="http://www.astrology.com/year/overview/".$sign.".html";
		$pg=file_get_contents($lnk);
		if(strpos($pg,'OVERVIEW:</b>')!==false)
		{
			$ii=strpos($pg,'OVERVIEW:</b>')+13;
			$ij=strpos($pg,'<',$ii);
			$hor=substr($pg,$ii,$ij-$ii);
		}else{
			$hor="Not found";
		}
		return $hor;
	}
}
?>