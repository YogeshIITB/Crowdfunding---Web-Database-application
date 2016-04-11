<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_donation = array();	
	$tdatapublic_donation[".truncateText"] = true;
	$tdatapublic_donation[".NumberOfChars"] = 80; 
	$tdatapublic_donation[".ShortName"] = "public_donation";
	$tdatapublic_donation[".OwnerID"] = "donor";
	$tdatapublic_donation[".OriginalTable"] = "public.donation";

//	field labels
$fieldLabelspublic_donation = array();
$fieldToolTipspublic_donation = array();
$pageTitlespublic_donation = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspublic_donation["English"] = array();
	$fieldToolTipspublic_donation["English"] = array();
	$pageTitlespublic_donation["English"] = array();
	$fieldLabelspublic_donation["English"]["time"] = "Time";
	$fieldToolTipspublic_donation["English"]["time"] = "";
	$fieldLabelspublic_donation["English"]["donor"] = "Donor";
	$fieldToolTipspublic_donation["English"]["donor"] = "";
	$fieldLabelspublic_donation["English"]["amount"] = "Amount";
	$fieldToolTipspublic_donation["English"]["amount"] = "";
	$fieldLabelspublic_donation["English"]["project"] = "Project";
	$fieldToolTipspublic_donation["English"]["project"] = "";
	if (count($fieldToolTipspublic_donation["English"]))
		$tdatapublic_donation[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_donation[""] = array();
	$fieldToolTipspublic_donation[""] = array();
	$pageTitlespublic_donation[""] = array();
	$fieldLabelspublic_donation[""]["time"] = "Time";
	$fieldToolTipspublic_donation[""]["time"] = "";
	$fieldLabelspublic_donation[""]["donor"] = "Donor";
	$fieldToolTipspublic_donation[""]["donor"] = "";
	$fieldLabelspublic_donation[""]["project"] = "Project";
	$fieldToolTipspublic_donation[""]["project"] = "";
	if (count($fieldToolTipspublic_donation[""]))
		$tdatapublic_donation[".isUseToolTips"] = true;
}
	
	
	$tdatapublic_donation[".NCSearch"] = true;



$tdatapublic_donation[".shortTableName"] = "public_donation";
$tdatapublic_donation[".nSecOptions"] = 2;
$tdatapublic_donation[".recsPerRowList"] = 1;
$tdatapublic_donation[".mainTableOwnerID"] = "donor";
$tdatapublic_donation[".moveNext"] = 1;
$tdatapublic_donation[".nType"] = 0;

$tdatapublic_donation[".strOriginalTableName"] = "public.donation";




$tdatapublic_donation[".showAddInPopup"] = false;

$tdatapublic_donation[".showEditInPopup"] = false;

$tdatapublic_donation[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_donation[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_donation[".fieldsForRegister"] = array();
	
$tdatapublic_donation[".listAjax"] = false;

	$tdatapublic_donation[".audit"] = false;

	$tdatapublic_donation[".locking"] = false;


$tdatapublic_donation[".list"] = true;

$tdatapublic_donation[".view"] = true;





$tdatapublic_donation[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapublic_donation[".searchSaving"] = false;
//

$tdatapublic_donation[".showSearchPanel"] = true;
		$tdatapublic_donation[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapublic_donation[".isUseAjaxSuggest"] = false;
else 
	$tdatapublic_donation[".isUseAjaxSuggest"] = true;

$tdatapublic_donation[".rowHighlite"] = true;



$tdatapublic_donation[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_donation[".isUseTimeForSearch"] = false;





$tdatapublic_donation[".allSearchFields"] = array();
$tdatapublic_donation[".filterFields"] = array();
$tdatapublic_donation[".requiredSearchFields"] = array();

$tdatapublic_donation[".allSearchFields"][] = "time";
	$tdatapublic_donation[".allSearchFields"][] = "donor";
	$tdatapublic_donation[".allSearchFields"][] = "amount";
	$tdatapublic_donation[".allSearchFields"][] = "project";
	

$tdatapublic_donation[".googleLikeFields"] = array();
$tdatapublic_donation[".googleLikeFields"][] = "time";
$tdatapublic_donation[".googleLikeFields"][] = "donor";
$tdatapublic_donation[".googleLikeFields"][] = "amount";
$tdatapublic_donation[".googleLikeFields"][] = "project";


$tdatapublic_donation[".advSearchFields"] = array();
$tdatapublic_donation[".advSearchFields"][] = "time";
$tdatapublic_donation[".advSearchFields"][] = "donor";
$tdatapublic_donation[".advSearchFields"][] = "amount";
$tdatapublic_donation[".advSearchFields"][] = "project";

$tdatapublic_donation[".tableType"] = "list";

$tdatapublic_donation[".printerPageOrientation"] = 0;
$tdatapublic_donation[".nPrinterPageScale"] = 100;

$tdatapublic_donation[".nPrinterSplitRecords"] = 40;

$tdatapublic_donation[".nPrinterPDFSplitRecords"] = 40;





	

$tdatapublic_donation[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatapublic_donation[".pageSize"] = 20;

$tdatapublic_donation[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_donation[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_donation[".orderindexes"] = array();

$tdatapublic_donation[".sqlHead"] = "SELECT \"time\",  	donor,  	amount,  	project";
$tdatapublic_donation[".sqlFrom"] = "FROM \"public\".donation";
$tdatapublic_donation[".sqlWhereExpr"] = "";
$tdatapublic_donation[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_donation[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_donation[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_donation[".highlightSearchResults"] = true;

$tableKeyspublic_donation = array();
$tableKeyspublic_donation[] = "time";
$tableKeyspublic_donation[] = "donor";
$tableKeyspublic_donation[] = "project";
$tdatapublic_donation[".Keys"] = $tableKeyspublic_donation;

$tdatapublic_donation[".listFields"] = array();
$tdatapublic_donation[".listFields"][] = "time";
$tdatapublic_donation[".listFields"][] = "donor";
$tdatapublic_donation[".listFields"][] = "amount";
$tdatapublic_donation[".listFields"][] = "project";

$tdatapublic_donation[".hideMobileList"] = array();


$tdatapublic_donation[".viewFields"] = array();
$tdatapublic_donation[".viewFields"][] = "time";
$tdatapublic_donation[".viewFields"][] = "donor";
$tdatapublic_donation[".viewFields"][] = "amount";
$tdatapublic_donation[".viewFields"][] = "project";

$tdatapublic_donation[".addFields"] = array();
$tdatapublic_donation[".addFields"][] = "time";
$tdatapublic_donation[".addFields"][] = "amount";
$tdatapublic_donation[".addFields"][] = "project";

$tdatapublic_donation[".inlineAddFields"] = array();

$tdatapublic_donation[".editFields"] = array();

$tdatapublic_donation[".inlineEditFields"] = array();

$tdatapublic_donation[".exportFields"] = array();

$tdatapublic_donation[".importFields"] = array();

$tdatapublic_donation[".printFields"] = array();

//	time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "time";
	$fdata["GoodName"] = "time";
	$fdata["ownerTable"] = "public.donation";
	$fdata["Label"] = GetFieldLabel("public_donation","time"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "time"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"time\"";
	
		
		
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
	
		$edata["ShowTime"] = true; 
		
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapublic_donation["time"] = $fdata;
//	donor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "donor";
	$fdata["GoodName"] = "donor";
	$fdata["ownerTable"] = "public.donation";
	$fdata["Label"] = GetFieldLabel("public_donation","donor"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "donor"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "donor";
	
		
		
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
	$edata["DisplayField"] = "username";
	
		
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

	

	
	$tdatapublic_donation["donor"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "public.donation";
	$fdata["Label"] = GetFieldLabel("public_donation","amount"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "amount"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "amount";
	
		
		
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

	

	
	$tdatapublic_donation["amount"] = $fdata;
//	project
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "project";
	$fdata["GoodName"] = "project";
	$fdata["ownerTable"] = "public.donation";
	$fdata["Label"] = GetFieldLabel("public_donation","project"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "project"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "project";
	
		
		
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
	$edata["LookupTable"] = "public.project";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "title";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatapublic_donation["project"] = $fdata;

	
$tables_data["public.donation"]=&$tdatapublic_donation;
$field_labels["public_donation"] = &$fieldLabelspublic_donation;
$fieldToolTips["public.donation"] = &$fieldToolTipspublic_donation;
$page_titles["public_donation"] = &$pageTitlespublic_donation;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.donation"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["public.donation"] = array();


	
				$strOriginalDetailsTable="public.users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.donation"][0] = $masterParams;	
				$masterTablesData["public.donation"][0]["masterKeys"] = array();
	$masterTablesData["public.donation"][0]["masterKeys"][]="username";
				$masterTablesData["public.donation"][0]["detailKeys"] = array();
	$masterTablesData["public.donation"][0]["detailKeys"][]="donor";
		
	
				$strOriginalDetailsTable="public.project";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.project";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "public_project";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.donation"][1] = $masterParams;	
				$masterTablesData["public.donation"][1]["masterKeys"] = array();
	$masterTablesData["public.donation"][1]["masterKeys"][]="id";
				$masterTablesData["public.donation"][1]["detailKeys"] = array();
	$masterTablesData["public.donation"][1]["detailKeys"][]="project";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_donation()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"time\",  	donor,  	amount,  	project";
$proto0["m_strFrom"] = "FROM \"public\".donation";
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
	"m_strName" => "time",
	"m_strTable" => "public.donation",
	"m_srcTableName" => "public.donation"
));

$proto5["m_sql"] = "\"time\"";
$proto5["m_srcTableName"] = "public.donation";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "donor",
	"m_strTable" => "public.donation",
	"m_srcTableName" => "public.donation"
));

$proto7["m_sql"] = "donor";
$proto7["m_srcTableName"] = "public.donation";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "public.donation",
	"m_srcTableName" => "public.donation"
));

$proto9["m_sql"] = "amount";
$proto9["m_srcTableName"] = "public.donation";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "project",
	"m_strTable" => "public.donation",
	"m_srcTableName" => "public.donation"
));

$proto11["m_sql"] = "project";
$proto11["m_srcTableName"] = "public.donation";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "public.donation";
$proto14["m_srcTableName"] = "public.donation";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "time";
$proto14["m_columns"][] = "donor";
$proto14["m_columns"][] = "amount";
$proto14["m_columns"][] = "project";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "\"public\".donation";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "public.donation";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.donation";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_donation = createSqlQuery_public_donation();


	
				
	
$tdatapublic_donation[".sqlquery"] = $queryData_public_donation;

$tableEvents["public.donation"] = new eventsBase;
$tdatapublic_donation[".hasEvents"] = false;

?>