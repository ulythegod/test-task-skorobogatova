<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?$APPLICATION->ShowHead()?>
<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div id="header"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.jpg" id="header_logo" height="105" alt="" width="508" border="0"/>
	<div id="header_text">
		<?$APPLICATION->IncludeFile(
				$APPLICATION->GetTemplatePath("include_areas/company_name.php"),
				Array(),
				Array("MODE"=>"html")
			);?> 
		</div>
		<a href="/" title="Главная" id="company_logo"></a>
	</div>
	<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false)?></h1>
      