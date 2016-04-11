<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapublic_users = array();	
	$tdatapublic_users[".truncateText"] = true;
	$tdatapublic_users[".NumberOfChars"] = 80; 
	$tdatapublic_users[".ShortName"] = "public_users";
	$tdatapublic_users[".OwnerID"] = "username";
	$tdatapublic_users[".OriginalTable"] = "public.users";

//	field labels
$fieldLabelspublic_users = array();
$fieldToolTipspublic_users = array();
$pageTitlespublic_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspublic_users["English"] = array();
	$fieldToolTipspublic_users["English"] = array();
	$pageTitlespublic_users["English"] = array();
	$fieldLabelspublic_users["English"]["username"] = "Username";
	$fieldToolTipspublic_users["English"]["username"] = "";
	$fieldLabelspublic_users["English"]["password"] = "Password";
	$fieldToolTipspublic_users["English"]["password"] = "";
	$fieldLabelspublic_users["English"]["name"] = "Name";
	$fieldToolTipspublic_users["English"]["name"] = "";
	$fieldLabelspublic_users["English"]["email"] = "Email";
	$fieldToolTipspublic_users["English"]["email"] = "";
	$fieldLabelspublic_users["English"]["address"] = "Address";
	$fieldToolTipspublic_users["English"]["address"] = "";
	$fieldLabelspublic_users["English"]["dateofbirth"] = "Dateofbirth";
	$fieldToolTipspublic_users["English"]["dateofbirth"] = "";
	$fieldLabelspublic_users["English"]["phone"] = "Phone";
	$fieldToolTipspublic_users["English"]["phone"] = "";
	$fieldLabelspublic_users["English"]["admin"] = "Admin";
	$fieldToolTipspublic_users["English"]["admin"] = "";
	$fieldLabelspublic_users["English"]["gender"] = "Gender";
	$fieldToolTipspublic_users["English"]["gender"] = "";
	if (count($fieldToolTipspublic_users["English"]))
		$tdatapublic_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspublic_users[""] = array();
	$fieldToolTipspublic_users[""] = array();
	$pageTitlespublic_users[""] = array();
	$fieldLabelspublic_users[""]["username"] = "Username";
	$fieldToolTipspublic_users[""]["username"] = "";
	$fieldLabelspublic_users[""]["gender"] = "Gender";
	$fieldToolTipspublic_users[""]["gender"] = "";
	if (count($fieldToolTipspublic_users[""]))
		$tdatapublic_users[".isUseToolTips"] = true;
}
	
	
	$tdatapublic_users[".NCSearch"] = true;



$tdatapublic_users[".shortTableName"] = "public_users";
$tdatapublic_users[".nSecOptions"] = 2;
$tdatapublic_users[".recsPerRowList"] = 1;
$tdatapublic_users[".mainTableOwnerID"] = "username";
$tdatapublic_users[".moveNext"] = 1;
$tdatapublic_users[".nType"] = 0;

$tdatapublic_users[".strOriginalTableName"] = "public.users";




$tdatapublic_users[".showAddInPopup"] = false;

$tdatapublic_users[".showEditInPopup"] = false;

$tdatapublic_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapublic_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapublic_users[".fieldsForRegister"] = array();
	//Begin register settings
			$tdatapublic_users[".fieldsForRegister"] = array();
$tdatapublic_users[".fieldsForRegister"][] = "username";
			$tdatapublic_users[".fieldsForRegister"][] = "password";
			$tdatapublic_users[".fieldsForRegister"][] = "email";
			$tdatapublic_users[".fieldsForRegister"][] = "name";
			$tdatapublic_users[".fieldsForRegister"][] = "dateofbirth";
			$tdatapublic_users[".fieldsForRegister"][] = "phone";
			$tdatapublic_users[".fieldsForRegister"][] = "address";
			$tdatapublic_users[".fieldsForRegister"][] = "gender";
/*
$tdatapublic_users[".PasswordField"] = "password";
$tdatapublic_users[".UserNameField"] = "username";	
*/
//End register settings	

$tdatapublic_users[".listAjax"] = false;

	$tdatapublic_users[".audit"] = false;

	$tdatapublic_users[".locking"] = false;

$tdatapublic_users[".edit"] = true;

$tdatapublic_users[".list"] = true;

$tdatapublic_users[".view"] = true;




$tdatapublic_users[".delete"] = true;

$tdatapublic_users[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapublic_users[".searchSaving"] = false;
//

$tdatapublic_users[".showSearchPanel"] = true;
		$tdatapublic_users[".flexibleSearch"] = true;		

if (isMobile())
	$tdatapublic_users[".isUseAjaxSuggest"] = false;
else 
	$tdatapublic_users[".isUseAjaxSuggest"] = true;

$tdatapublic_users[".rowHighlite"] = true;



$tdatapublic_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapublic_users[".isUseTimeForSearch"] = false;



$tdatapublic_users[".useDetailsPreview"] = true;


$tdatapublic_users[".allSearchFields"] = array();
$tdatapublic_users[".filterFields"] = array();
$tdatapublic_users[".requiredSearchFields"] = array();

$tdatapublic_users[".allSearchFields"][] = "username";
	$tdatapublic_users[".allSearchFields"][] = "password";
	$tdatapublic_users[".allSearchFields"][] = "name";
	$tdatapublic_users[".allSearchFields"][] = "email";
	$tdatapublic_users[".allSearchFields"][] = "gender";
	$tdatapublic_users[".allSearchFields"][] = "address";
	$tdatapublic_users[".allSearchFields"][] = "dateofbirth";
	$tdatapublic_users[".allSearchFields"][] = "phone";
	$tdatapublic_users[".allSearchFields"][] = "admin";
	

$tdatapublic_users[".googleLikeFields"] = array();
$tdatapublic_users[".googleLikeFields"][] = "username";
$tdatapublic_users[".googleLikeFields"][] = "password";
$tdatapublic_users[".googleLikeFields"][] = "name";
$tdatapublic_users[".googleLikeFields"][] = "email";
$tdatapublic_users[".googleLikeFields"][] = "gender";
$tdatapublic_users[".googleLikeFields"][] = "address";
$tdatapublic_users[".googleLikeFields"][] = "dateofbirth";
$tdatapublic_users[".googleLikeFields"][] = "phone";
$tdatapublic_users[".googleLikeFields"][] = "admin";


$tdatapublic_users[".advSearchFields"] = array();
$tdatapublic_users[".advSearchFields"][] = "username";
$tdatapublic_users[".advSearchFields"][] = "password";
$tdatapublic_users[".advSearchFields"][] = "name";
$tdatapublic_users[".advSearchFields"][] = "email";
$tdatapublic_users[".advSearchFields"][] = "gender";
$tdatapublic_users[".advSearchFields"][] = "address";
$tdatapublic_users[".advSearchFields"][] = "dateofbirth";
$tdatapublic_users[".advSearchFields"][] = "phone";
$tdatapublic_users[".advSearchFields"][] = "admin";

$tdatapublic_users[".tableType"] = "list";

$tdatapublic_users[".printerPageOrientation"] = 0;
$tdatapublic_users[".nPrinterPageScale"] = 100;

$tdatapublic_users[".nPrinterSplitRecords"] = 40;

$tdatapublic_users[".nPrinterPDFSplitRecords"] = 40;





	

$tdatapublic_users[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatapublic_users[".pageSize"] = 20;

$tdatapublic_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapublic_users[".strOrderBy"] = $tstrOrderBy;

$tdatapublic_users[".orderindexes"] = array();

$tdatapublic_users[".sqlHead"] = "SELECT username,  	password,  	name,  	email,  	gender,  	address,  	dateofbirth,  	phone,  	\"admin\"";
$tdatapublic_users[".sqlFrom"] = "FROM \"public\".users";
$tdatapublic_users[".sqlWhereExpr"] = "";
$tdatapublic_users[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapublic_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapublic_users[".arrGroupsPerPage"] = $arrGPP;

$tdatapublic_users[".highlightSearchResults"] = true;

$tableKeyspublic_users = array();
$tableKeyspublic_users[] = "username";
$tdatapublic_users[".Keys"] = $tableKeyspublic_users;

$tdatapublic_users[".listFields"] = array();
$tdatapublic_users[".listFields"][] = "username";
$tdatapublic_users[".listFields"][] = "password";
$tdatapublic_users[".listFields"][] = "name";
$tdatapublic_users[".listFields"][] = "email";
$tdatapublic_users[".listFields"][] = "gender";
$tdatapublic_users[".listFields"][] = "address";
$tdatapublic_users[".listFields"][] = "dateofbirth";
$tdatapublic_users[".listFields"][] = "phone";
$tdatapublic_users[".listFields"][] = "admin";

$tdatapublic_users[".hideMobileList"] = array();


$tdatapublic_users[".viewFields"] = array();
$tdatapublic_users[".viewFields"][] = "name";
$tdatapublic_users[".viewFields"][] = "email";
$tdatapublic_users[".viewFields"][] = "gender";
$tdatapublic_users[".viewFields"][] = "address";
$tdatapublic_users[".viewFields"][] = "dateofbirth";
$tdatapublic_users[".viewFields"][] = "phone";
$tdatapublic_users[".viewFields"][] = "admin";

$tdatapublic_users[".addFields"] = array();

$tdatapublic_users[".inlineAddFields"] = array();

$tdatapublic_users[".editFields"] = array();
$tdatapublic_users[".editFields"][] = "name";
$tdatapublic_users[".editFields"][] = "email";
$tdatapublic_users[".editFields"][] = "address";
$tdatapublic_users[".editFields"][] = "phone";

$tdatapublic_users[".inlineEditFields"] = array();

$tdatapublic_users[".exportFields"] = array();

$tdatapublic_users[".importFields"] = array();

$tdatapublic_users[".printFields"] = array();

//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("public_users","username"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "username"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";
	
		
		
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
		
		
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapublic_users["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("public_users","password"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";
	
		
		
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
		
		
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapublic_users["password"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("public_users","name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "name"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";
	
		
		
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
			$edata["EditParams"].= " maxlength=128";
	
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

	

	
	$tdatapublic_users["name"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("public_users","email"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=256";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatapublic_users["email"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("public_users","gender"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "gender"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender";
	
		
		
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
		$edata["LCType"] = 4;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Male";
	$edata["LookupValues"][] = "Female";

		
		
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

	

	
	$tdatapublic_users["gender"] = $fdata;
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("public_users","address"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "address"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address";
	
		
		
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
			$edata["EditParams"].= " maxlength=512";
	
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

	

	
	$tdatapublic_users["address"] = $fdata;
//	dateofbirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dateofbirth";
	$fdata["GoodName"] = "dateofbirth";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("public_users","dateofbirth"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "dateofbirth"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dateofbirth";
	
		
		
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

	

	
	$tdatapublic_users["dateofbirth"] = $fdata;
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("public_users","phone"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "phone"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";
	
		
		
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

	

	
	$tdatapublic_users["phone"] = $fdata;
//	admin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "admin";
	$fdata["GoodName"] = "admin";
	$fdata["ownerTable"] = "public.users";
	$fdata["Label"] = GetFieldLabel("public_users","admin"); 
	$fdata["FieldType"] = 13;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "admin"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"admin\"";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
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

	

	
	$tdatapublic_users["admin"] = $fdata;

	
$tables_data["public.users"]=&$tdatapublic_users;
$field_labels["public_users"] = &$fieldLabelspublic_users;
$fieldToolTips["public.users"] = &$fieldToolTipspublic_users;
$page_titles["public_users"] = &$pageTitlespublic_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["public.users"] = array();
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
			
	$detailsTablesData["public.users"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["public.users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.users"][$dIndex]["masterKeys"][]="username";

				$detailsTablesData["public.users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.users"][$dIndex]["detailKeys"][]="donor";
	
// tables which are master tables for current table (detail)
$masterTablesData["public.users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_public_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "username,  	password,  	name,  	email,  	gender,  	address,  	dateofbirth,  	phone,  	\"admin\"";
$proto0["m_strFrom"] = "FROM \"public\".users";
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
	"m_strName" => "username",
	"m_strTable" => "public.users",
	"m_srcTableName" => "public.users"
));

$proto5["m_sql"] = "username";
$proto5["m_srcTableName"] = "public.users";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "public.users",
	"m_srcTableName" => "public.users"
));

$proto7["m_sql"] = "password";
$proto7["m_srcTableName"] = "public.users";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "public.users",
	"m_srcTableName" => "public.users"
));

$proto9["m_sql"] = "name";
$proto9["m_srcTableName"] = "public.users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.users",
	"m_srcTableName" => "public.users"
));

$proto11["m_sql"] = "email";
$proto11["m_srcTableName"] = "public.users";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "public.users",
	"m_srcTableName" => "public.users"
));

$proto13["m_sql"] = "gender";
$proto13["m_srcTableName"] = "public.users";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "address",
	"m_strTable" => "public.users",
	"m_srcTableName" => "public.users"
));

$proto15["m_sql"] = "address";
$proto15["m_srcTableName"] = "public.users";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "dateofbirth",
	"m_strTable" => "public.users",
	"m_srcTableName" => "public.users"
));

$proto17["m_sql"] = "dateofbirth";
$proto17["m_srcTableName"] = "public.users";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "public.users",
	"m_srcTableName" => "public.users"
));

$proto19["m_sql"] = "phone";
$proto19["m_srcTableName"] = "public.users";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "admin",
	"m_strTable" => "public.users",
	"m_srcTableName" => "public.users"
));

$proto21["m_sql"] = "\"admin\"";
$proto21["m_srcTableName"] = "public.users";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "public.users";
$proto24["m_srcTableName"] = "public.users";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "username";
$proto24["m_columns"][] = "password";
$proto24["m_columns"][] = "name";
$proto24["m_columns"][] = "email";
$proto24["m_columns"][] = "gender";
$proto24["m_columns"][] = "address";
$proto24["m_columns"][] = "dateofbirth";
$proto24["m_columns"][] = "phone";
$proto24["m_columns"][] = "admin";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "\"public\".users";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "public.users";
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
$proto0["m_srcTableName"]="public.users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_public_users = createSqlQuery_public_users();


	
									
	
$tdatapublic_users[".sqlquery"] = $queryData_public_users;

$tableEvents["public.users"] = new eventsBase;
$tdatapublic_users[".hasEvents"] = false;

?>