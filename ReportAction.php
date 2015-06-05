<?php
include("Include.php");
IsLoggedIn();
$Action=$_POST['Action'];
if($Action=="")
header("Location:LogIn");
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="SetPermission")
{
	$UserType=$_POST['UserType'];
	header("Location:Permission/SetPermission/$UserType");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="ExamReport")
{
	$StudentId=$_POST['StudentId'];
	header("Location:PrintExamReport/$StudentId");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="PaymentSelectStudent")
{
	$AdmissionId=$_POST['AdmissionId'];
	header("Location:Payment/$AdmissionId");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="SCMarksSetup")
{
	$ExamIdSectionId=explode("-",$_POST['ExamId']);
	$ExamId=$ExamIdSectionId[0];
	$SectionId=$ExamIdSectionId[1];
	$SCAreaId=$_POST['SCAreaId'];
	header("Location:SCMarksSetup/$ExamId/$SCAreaId");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="MarksSetupReportAction")
{
	$ExamIdSectionId=explode("-",$_POST['ExamId']);
	$ExamId=$ExamIdSectionId[0];
	$SectionId=$ExamIdSectionId[1];
	$SubjectId=$_POST['SubjectId'];
	header("Location:MarksSetup/$ExamId/$SubjectId");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="StudentAttendance")
{
	$SectionId=$_POST['SectionId'];
	header("Location:StudentAttendance/$SectionId");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="AdmissionReport")
{
	$SectionId=$_POST['SectionId'];
	$StudentStatus=$_POST['StudentStatus'];
	$_SESSION['StudentStatus']=$StudentStatus;
	$LoginDetail=$_POST['LoginDetail'];
	$_SESSION['LoginDetail']=$LoginDetail;
	header("Location:AdmissionReport/$SectionId");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="UpdateFee")
{
	$CurrentSectionId=$_POST['CurrentSectionId'];
	$Student=$_POST['Student'];
	header("Location:UpdateFee/$CurrentSectionId/$Student");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="StockTransfer")
{
	$StockType=$_POST['StockType'];
	$StockId=$_POST['StockId'];
	header("Location:StockTransfer/$StockType/$StockId");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="IssueSchoolMaterial")
{
	$MaterialType=$_POST['MaterialType'];
	$AdmissionId=$_POST['AdmissionId'];
	header("Location:IssueSchoolMaterial/$MaterialType/$AdmissionId");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="StockReport")
{
	$AssignTo=$_POST['AssignTo'];
	$AssignToDetail=$_POST['AssignToDetail'];
	$StockDate=$_POST['StockDate'];
	header("Location:StockReport/$AssignTo/$StockDate/$AssignToDetail");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="SchoolMaterialReport")
{
	$MaterialType=$_POST['MaterialType'];
	$D=$_POST['D'];
	header("Location:SchoolMaterialReport/$MaterialType/$D");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="IssueReport")
{
	$FromDate=$_POST['FromDate'];
	$MaterialType=$_POST['MaterialType'];
	$ToDate=$_POST['ToDate'];
	header("Location:IssueReport/$MaterialType/$FromDate/$ToDate");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="PurchaseReport")
{
	$FromDate=$_POST['FromDate'];
	$ToDate=$_POST['ToDate'];
	header("Location:PurchaseReport/$FromDate/$ToDate");	
}
///////////////////////////////////////////////////////////////////////////////////////////
elseif($Action=="DashBoardReport")
{
	$REPORTDAYS=Escape($_POST['REPORTDAYS']);
	if($REPORTDAYS<=0 || !is_numeric($REPORTDAYS))
	{
		$Message="Day(s) should be numeric & greater than 1!!";
		$Type=error;
		SetNotification($Message,$Type);
	}
	else
	$_SESSION['REPORTDAYS']=$REPORTDAYS;
	header("Location:DashBoard");	
}
///////////////////////////////////////////////////////////////////////////////////////////
else
header("location:DashBoard");
?>