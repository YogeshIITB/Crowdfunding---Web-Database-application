<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_project = array();	
	$tdatapublic_project[".truncateText"] = true;
	$tdatapublic_project[".NumberOfChars"] = 80; 
	$tdatapublic_project[".ShortName"] = "public_project";
	$tdatapublic_project[".OwnerID"] = "owner";
	$tdatapublic_project[".OriginalTable"] = "public.project";

//	field labels
$fieldLabelspublic_project = array();
$fieldToolTipspublic_project = array();
$pageTitlespublic_project = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspublic_project["English"] = array();
	$fieldToolTipspublic_project["English"] = array();
	$pageTitlespublic_project["English"] = array();
	$fieldLabelspublic_project["English"]["id"] = "Id";
	$fieldToolTipspublic_project["English"]["id"] = "";
	$fieldLabelspublic_project["English"]["title"] = "Title";
	$fieldToolTipspublic_project["English"]["title"] = "";
	$fieldLabelspublic_project["English"]["description"] = "Description";
	$fieldToolTipspublic_project["English"]["description"] = "";
	$fieldLabelspublic_project["English"]["country"] = "Country";
	$fieldToolTipspublic_project["English"]["country"] = "";
	$fieldLabelspublic_project["English"]["target"] = "Target";
	$fieldToolTipspublic_project["English"]["target"] = "";
	$fieldLabelspublic_project["English"]["status"] = "Status";
	$fieldToolTipspublic_project["English"]["status"] = "";
	$fieldLabelspublic_project["English"]["owner"] = "Owner";
	$fieldToolTipspublic_project["English"]["owner"] = "";
	$fieldLabelspublic_project["English"]["startdate"] = "Startdate";
	$fieldToolTipspublic_project["English"]["startdate"] = "";
	$fieldLabelspublic_project["English"]["expirydate"] = "Expirydate";
	$fieldToolTipspublic_project["English"]["expirydate"] = "";
	if (count($fieldToolTipspublic_project["English"]))
		$tdatapublic_project[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_project[""] = array();
	$fieldToolTipspublic_project[""] = array();
	$pageTitlespublic_project[""] = array();
	$fieldLabelspublic_project[""]["owner"] = "Owner";
	$fieldToolTipspublic_project[""]["owner"] = "";
	$fieldLabelspublic_project[""]["startdate"] = "Startdate";
	$fieldToolTipspublic_project[""]["startdate"] = "";
	$fieldLabelspublic_project[""]["expirydate"] = "Expirydate";
	$fieldToolTipspublic_project[""]["expirydate"] = "";
	$fieldLabelspublic_project[""]["id"] = "Id";
	$fieldToolTipspublic_project[""]["id"] = "";
	if (count($fieldToolTipspublic_project[""]))
		$tdatapublic_project[".isUseToolTips"] = true;
}
	
	
	$tdatapublic_project[".NCSearch"] = true;



$tdatapublic_project[".shortTableName"] = "public_project";
$tdatapublic_project[".nSecOptions"] = 2;
$tdatapublic_project[".recsPerRowList"] = 1;
$tdatapublic_project[".mainTableOwnerID"] = "owner";
$tdatapublic_project[".moveNext"] = 1;
$tdatapublic_project[".nType"] = 0;

$tdatapublic_project[".strOriginalTableName"] = "public.project";




$tdatapublic_project[".showAddInPopup"] = false;

$tdatapublic_project[".showEditInPopup"] = false;

$tdatapublic_project[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_project[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_project[".fieldsForRegister"] = array();
	
$tdatapublic_project[".listAjax"] = false;

	$tdatapublic_project[".audit"] = false;

	$tdatapublic_project[".locking"] = false;

$tdatapublic_project[".edit"] = true;

$tdatapublic_project[".list"] = true;

$tdatapublic_project[".view"] = true;




$tdatapublic_project[".delete"] = true;

$tdatapublic_project[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapublic_project[".searchSaving"] = false;
//

$tdatapublic_project[".showSearchPanel"] = true;
		$tdatapublic_project[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapublic_project[".isUseAjaxSuggest"] = false;
else 
	$tdatapublic_project[".isUseAjaxSuggest"] = true;

$tdatapublic_project[".rowHighlite"] = true;



$tdatapublic_project[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_project[".isUseTimeForSearch"] = false;



$tdatapublic_project[".useDetailsPreview"] = true;


$tdatapublic_project[".allSearchFields"] = array();
$tdatapublic_project[".filterFields"] = array();
$tdatapublic_project[".requiredSearchFields"] = array();

$tdatapublic_project[".allSearchFields"][] = "id";
	$tdatapublic_project[".allSearchFields"][] = "owner";
	$tdatapublic_project[".allSearchFields"][] = "title";
	$tdatapublic_project[".allSearchFields"][] = "description";
	$tdatapublic_project[".allSearchFields"][] = "startdate";
	$tdatapublic_project[".allSearchFields"][] = "expirydate";
	$tdatapublic_project[".allSearchFields"][] = "country";
	$tdatapublic_project[".allSearchFields"][] = "target";
	$tdatapublic_project[".allSearchFields"][] = "status";
	

$tdatapublic_project[".googleLikeFields"] = array();
$tdatapublic_project[".googleLikeFields"][] = "id";
$tdatapublic_project[".googleLikeFields"][] = "owner";
$tdatapublic_project[".googleLikeFields"][] = "title";
$tdatapublic_project[".googleLikeFields"][] = "description";
$tdatapublic_project[".googleLikeFields"][] = "startdate";
$tdatapublic_project[".googleLikeFields"][] = "expirydate";
$tdatapublic_project[".googleLikeFields"][] = "country";
$tdatapublic_project[".googleLikeFields"][] = "target";
$tdatapublic_project[".googleLikeFields"][] = "status";


$tdatapublic_project[".advSearchFields"] = array();
$tdatapublic_project[".advSearchFields"][] = "id";
$tdatapublic_project[".advSearchFields"][] = "owner";
$tdatapublic_project[".advSearchFields"][] = "title";
$tdatapublic_project[".advSearchFields"][] = "description";
$tdatapublic_project[".advSearchFields"][] = "startdate";
$tdatapublic_project[".advSearchFields"][] = "expirydate";
$tdatapublic_project[".advSearchFields"][] = "country";
$tdatapublic_project[".advSearchFields"][] = "target";
$tdatapublic_project[".advSearchFields"][] = "status";

$tdatapublic_project[".tableType"] = "list";

$tdatapublic_project[".printerPageOrientation"] = 0;
$tdatapublic_project[".nPrinterPageScale"] = 100;

$tdatapublic_project[".nPrinterSplitRecords"] = 40;

$tdatapublic_project[".nPrinterPDFSplitRecords"] = 40;





	

$tdatapublic_project[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatapublic_project[".pageSize"] = 20;

$tdatapublic_project[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_project[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_project[".orderindexes"] = array();

$tdatapublic_project[".sqlHead"] = "SELECT id,  	owner,  	title,  	description,  	startdate,  	expirydate,  	country,  	target,  	status";
$tdatapublic_project[".sqlFrom"] = "FROM \"public\".project";
$tdatapublic_project[".sqlWhereExpr"] = "";
$tdatapublic_project[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_project[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_project[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_project[".highlightSearchResults"] = true;

$tableKeyspublic_project = array();
$tableKeyspublic_project[] = "id";
$tdatapublic_project[".Keys"] = $tableKeyspublic_project;

$tdatapublic_project[".listFields"] = array();
$tdatapublic_project[".listFields"][] = "owner";
$tdatapublic_project[".listFields"][] = "startdate";
$tdatapublic_project[".listFields"][] = "expirydate";
$tdatapublic_project[".listFields"][] = "id";
$tdatapublic_project[".listFields"][] = "title";
$tdatapublic_project[".listFields"][] = "description";
$tdatapublic_project[".listFields"][] = "country";
$tdatapublic_project[".listFields"][] = "target";
$tdatapublic_project[".listFields"][] = "status";

$tdatapublic_project[".hideMobileList"] = array();


$tdatapublic_project[".viewFields"] = array();
$tdatapublic_project[".viewFields"][] = "id";
$tdatapublic_project[".viewFields"][] = "owner";
$tdatapublic_project[".viewFields"][] = "title";
$tdatapublic_project[".viewFields"][] = "description";
$tdatapublic_project[".viewFields"][] = "startdate";
$tdatapublic_project[".viewFields"][] = "expirydate";
$tdatapublic_project[".viewFields"][] = "country";
$tdatapublic_project[".viewFields"][] = "target";
$tdatapublic_project[".viewFields"][] = "status";

$tdatapublic_project[".addFields"] = array();
$tdatapublic_project[".addFields"][] = "title";
$tdatapublic_project[".addFields"][] = "description";
$tdatapublic_project[".addFields"][] = "startdate";
$tdatapublic_project[".addFields"][] = "expirydate";
$tdatapublic_project[".addFields"][] = "country";
$tdatapublic_project[".addFields"][] = "target";

$tdatapublic_project[".inlineAddFields"] = array();

$tdatapublic_project[".editFields"] = array();
$tdatapublic_project[".editFields"][] = "title";
$tdatapublic_project[".editFields"][] = "description";
$tdatapublic_project[".editFields"][] = "expirydate";
$tdatapublic_project[".editFields"][] = "country";
$tdatapublic_project[".editFields"][] = "target";
$tdatapublic_project[".editFields"][] = "status";

$tdatapublic_project[".inlineEditFields"] = array();

$tdatapublic_project[".exportFields"] = array();

$tdatapublic_project[".importFields"] = array();

$tdatapublic_project[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.project";
	$fdata["Label"] = GetFieldLabel("public_project","id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapublic_project["id"] = $fdata;
//	owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "owner";
	$fdata["GoodName"] = "owner";
	$fdata["ownerTable"] = "public.project";
	$fdata["Label"] = GetFieldLabel("public_project","owner"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "owner"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "owner";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "name";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapublic_project["owner"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "public.project";
	$fdata["Label"] = GetFieldLabel("public_project","title"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "title"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=256";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapublic_project["title"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.project";
	$fdata["Label"] = GetFieldLabel("public_project","description"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "description"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2048";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapublic_project["description"] = $fdata;
//	startdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "startdate";
	$fdata["GoodName"] = "startdate";
	$fdata["ownerTable"] = "public.project";
	$fdata["Label"] = GetFieldLabel("public_project","startdate"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "startdate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "startdate";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapublic_project["startdate"] = $fdata;
//	expirydate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "expirydate";
	$fdata["GoodName"] = "expirydate";
	$fdata["ownerTable"] = "public.project";
	$fdata["Label"] = GetFieldLabel("public_project","expirydate"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "expirydate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "expirydate";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapublic_project["expirydate"] = $fdata;
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "public.project";
	$fdata["Label"] = GetFieldLabel("public_project","country"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "country"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Singapore";
	$edata["LookupValues"][] = "China";
	$edata["LookupValues"][] = "Malaysia";
	$edata["LookupValues"][] = "USA";
	$edata["LookupValues"][] = "UK";
	$edata["LookupValues"][] = "India";
	$edata["LookupValues"][] = "Thailand";
	$edata["LookupValues"][] = "Cambodia";
	$edata["LookupValues"][] = "Brunei";
	$edata["LookupValues"][] = "Israel";
	$edata["LookupValues"][] = "Pakistan";
	$edata["LookupValues"][] = "Brazil";
	$edata["LookupValues"][] = "Africa";
	$edata["LookupValues"][] = "Mexico";
	$edata["LookupValues"][] = "Canada";
	$edata["LookupValues"][] = "Ireland";
	$edata["LookupValues"][] = "Greenland";
	$edata["LookupValues"][] = "Finland";
	$edata["LookupValues"][] = "Holland";
	$edata["LookupValues"][] = "Germany";
	$edata["LookupValues"][] = "Poland";
	$edata["LookupValues"][] = "Russia";
	$edata["LookupValues"][] = "Ukraine";
	$edata["LookupValues"][] = "Bulgaria";
	$edata["LookupValues"][] = "Japan";
	$edata["LookupValues"][] = "Indonesia";
	$edata["LookupValues"][] = "Australia";
	$edata["LookupValues"][] = "Others";

		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapublic_project["country"] = $fdata;
//	target
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "target";
	$fdata["GoodName"] = "target";
	$fdata["ownerTable"] = "public.project";
	$fdata["Label"] = GetFieldLabel("public_project","target"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "target"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "target";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapublic_project["target"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "public.project";
	$fdata["Label"] = GetFieldLabel("public_project","status"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "status"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Current";
	$edata["LookupValues"][] = "Expired";

		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapublic_project["status"] = $fdata;

	
$tables_data["public.project"]=&$tdatapublic_project;
$field_labels["public_project"] = &$fieldLabelspublic_project;
$fieldToolTips["public.project"] = &$fieldToolTipspublic_project;
$page_titles["public_project"] = &$pageTitlespublic_project;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.project"] = array();
//	public.donation
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.donation";
		$detailsParam["dOriginalTable"] = "public.donation";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "public_donation";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_donation");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["public.project"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["public.project"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.project"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["public.project"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.project"][$dIndex]["detailKeys"][]="project";
	
// tables which are master tables for current table (detail)
$masterTablesData["public.project"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_project()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	owner,  	title,  	description,  	startdate,  	expirydate,  	country,  	target,  	status";
$proto0["m_strFrom"] = "FROM \"public\".project";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "public.project",
	"m_srcTableName" => "public.project"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "public.project";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "owner",
	"m_strTable" => "public.project",
	"m_srcTableName" => "public.project"
));

$proto7["m_sql"] = "owner";
$proto7["m_srcTableName"] = "public.project";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "public.project",
	"m_srcTableName" => "public.project"
));

$proto9["m_sql"] = "title";
$proto9["m_srcTableName"] = "public.project";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.project",
	"m_srcTableName" => "public.project"
));

$proto11["m_sql"] = "description";
$proto11["m_srcTableName"] = "public.project";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "startdate",
	"m_strTable" => "public.project",
	"m_srcTableName" => "public.project"
));

$proto13["m_sql"] = "startdate";
$proto13["m_srcTableName"] = "public.project";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "expirydate",
	"m_strTable" => "public.project",
	"m_srcTableName" => "public.project"
));

$proto15["m_sql"] = "expirydate";
$proto15["m_srcTableName"] = "public.project";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "public.project",
	"m_srcTableName" => "public.project"
));

$proto17["m_sql"] = "country";
$proto17["m_srcTableName"] = "public.project";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "target",
	"m_strTable" => "public.project",
	"m_srcTableName" => "public.project"
));

$proto19["m_sql"] = "target";
$proto19["m_srcTableName"] = "public.project";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "public.project",
	"m_srcTableName" => "public.project"
));

$proto21["m_sql"] = "status";
$proto21["m_srcTableName"] = "public.project";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "public.project";
$proto24["m_srcTableName"] = "public.project";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "owner";
$proto24["m_columns"][] = "title";
$proto24["m_columns"][] = "description";
$proto24["m_columns"][] = "startdate";
$proto24["m_columns"][] = "expirydate";
$proto24["m_columns"][] = "country";
$proto24["m_columns"][] = "target";
$proto24["m_columns"][] = "status";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "\"public\".project";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "public.project";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.project";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_project = createSqlQuery_public_project();


	
									
	
$tdatapublic_project[".sqlquery"] = $queryData_public_project;

$tableEvents["public.project"] = new eventsBase;
$tdatapublic_project[".hasEvents"] = false;

?>