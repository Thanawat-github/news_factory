<?PHP
Function newformatdate($datetemp)
{
	$yeartemp=substr($datetemp,0,4);
	$temp="'".$yeartemp."'";
	$year=substr($temp,1,4);
	$monthtemp=substr($datetemp,5,2);
	switch ($monthtemp)
	   {
	         case '01';
		{ $month=' มกราคม ';   break; }
	         case '02';
		{ $month=' กุมภาพันธ์ ';   break; }
	         case '03';
		{ $month=' มีนาคม ';   break; }
	         case '04';
		{ $month=' เมษายน ';   break; }
	         case '05';
		{ $month=' พฤษภาคม ';   break; }
	         case '06';
		{ $month=' มิถุนายน ';   break; }
	         case '07';
		{ $month=' กรกฏาคม ';   break; }
	         case '08';
		{ $month=' สิงหาคม ';   break; }
	         case '09';
		{ $month=' กันยายน ';   break; }
	         case '10';
		{ $month=' ตุลาคม ';   break; }
	         case '11';
		{ $month=' พฤศจิกายน ';   break; }
	         case '12';
		{ $month=' ธันวาคม ';   break; }
	         default;
		{ $month='';}
	     }
	$day=substr($datetemp,8,2);
    $year=substr(substr($datetemp,0,4)+543,0,4);
	$temp=$day.$month.$year;

	if ($temp==543) {return '/';}
	else {return $temp;}
}

?>