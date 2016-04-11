<?php
function DisplayMasterTableInfoForPrint_public_users($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "public.users";
	$xt->eventsObject = getEventObject($tName);

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "public.donation" )
	{
		$keysAssoc["username"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("username", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("username", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("username", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("public_users","username").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( !$where )
		return;

	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["username"]));
	
	$xt->assign("username_mastervalue", $viewControls->showDBValue("username", $data, $keylink));
	$format = $settings->getViewFormat("username");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("username")))
		$class = ' rnr-field-number';
		
	$xt->assign("username_class", $class); // add class for field header as field value
	$xt->assign("password_mastervalue", $viewControls->showDBValue("password", $data, $keylink));
	$format = $settings->getViewFormat("password");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("password")))
		$class = ' rnr-field-number';
		
	$xt->assign("password_class", $class); // add class for field header as field value
	$xt->assign("name_mastervalue", $viewControls->showDBValue("name", $data, $keylink));
	$format = $settings->getViewFormat("name");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("name")))
		$class = ' rnr-field-number';
		
	$xt->assign("name_class", $class); // add class for field header as field value
	$xt->assign("email_mastervalue", $viewControls->showDBValue("email", $data, $keylink));
	$format = $settings->getViewFormat("email");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("email")))
		$class = ' rnr-field-number';
		
	$xt->assign("email_class", $class); // add class for field header as field value
	$xt->assign("gender_mastervalue", $viewControls->showDBValue("gender", $data, $keylink));
	$format = $settings->getViewFormat("gender");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("gender")))
		$class = ' rnr-field-number';
		
	$xt->assign("gender_class", $class); // add class for field header as field value
	$xt->assign("address_mastervalue", $viewControls->showDBValue("address", $data, $keylink));
	$format = $settings->getViewFormat("address");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("address")))
		$class = ' rnr-field-number';
		
	$xt->assign("address_class", $class); // add class for field header as field value
	$xt->assign("dateofbirth_mastervalue", $viewControls->showDBValue("dateofbirth", $data, $keylink));
	$format = $settings->getViewFormat("dateofbirth");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("dateofbirth")))
		$class = ' rnr-field-number';
		
	$xt->assign("dateofbirth_class", $class); // add class for field header as field value
	$xt->assign("phone_mastervalue", $viewControls->showDBValue("phone", $data, $keylink));
	$format = $settings->getViewFormat("phone");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("phone")))
		$class = ' rnr-field-number';
		
	$xt->assign("phone_class", $class); // add class for field header as field value
	$xt->assign("admin_mastervalue", $viewControls->showDBValue("admin", $data, $keylink));
	$format = $settings->getViewFormat("admin");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("admin")))
		$class = ' rnr-field-number';
		
	$xt->assign("admin_class", $class); // add class for field header as field value

	$layout = GetPageLayout("public_users", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("public_users", "masterprint"));
}

?>