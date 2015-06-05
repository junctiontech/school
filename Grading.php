<?php
function Grade($MM,$OB)
{
	if($MM!=30 && $MM!=100 && $MM!=50 && $MM!=0)
	{
		if($MM!=0)
		{
		$OB=($OB/$MM)*100;
		$MM=100;
		}
	}
	
	if($MM==30)
	{
		if($OB>27)
		return("A1");
		elseif($OB>24)
		return("A2");
		elseif($OB>21)
		return("B1");
		elseif($OB>18)
		return("B2");
		elseif($OB>15)
		return("C1");
		elseif($OB>12)
		return("C2");
		elseif($OB>9)
		return("D");
		elseif($OB>5)
		return("E1");
		elseif($OB>=0)
		return("E2");
	}
	elseif($MM==100)
	{
		if($OB>90)
		return("A1");
		elseif($OB>80)
		return("A2");
		elseif($OB>70)
		return("B1");
		elseif($OB>60)
		return("B2");
		elseif($OB>50)
		return("C1");
		elseif($OB>40)
		return("C2");
		elseif($OB>32)
		return("D");
		elseif($OB>20)
		return("E1");
		elseif($OB>=0)
		return("E2");	
	}
	elseif($MM==50)
	{
		if($OB>45)
		return("A1");
		elseif($OB>40)
		return("A2");
		elseif($OB>35)
		return("B1");
		elseif($OB>30)
		return("B2");
		elseif($OB>25)
		return("C1");
		elseif($OB>20)
		return("C2");
		elseif($OB>15)
		return("D");
		elseif($OB>10)
		return("E1");
		elseif($OB>=0)
		return("E2");		
	}
	else
		return("-");
}


function GradeIndicator($PointIndicator,$MI,$OI)
{
	if($MI==0 || $MI=="")
	return("-");
	elseif($PointIndicator=="3")
	{
		$a=round((($OI/$MI)*100),2);
		if($a==0)
		return("-");
		elseif($a<33.33)
		return("B+");
		elseif($a<=66.66)
		return("A");
		else
		return("A+");
	}
	elseif($PointIndicator==="5")
	{
		$a=round((($OI/$MI)*100),2);
		if($a==0)
		return("-");
		elseif($a<=20)
		return("C");
		elseif($a<=40)
		return("B");
		elseif($a<=60)
		return("B+");
		elseif($a<=80)
		return("A");
		else
		return("A+");
	}
	else
	return("-");
}

function CGPA($Grade)
{
	if($Grade=="A1")
	return(10);
	elseif($Grade=="A2")
	return(9);
	elseif($Grade=="B1")
	return(8);
	elseif($Grade=="B2")
	return(7);
	elseif($Grade=="C1")
	return(6);
	elseif($Grade=="C2")
	return(5);
	elseif($Grade=="D")
	return(4);
	else
	return("-");
}

?>