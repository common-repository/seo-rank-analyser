<?PHP
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SEO Rank Analyser Main Page</title>
<?PHP

	wp_register_style( 'seorankanalyserstyle', plugin_dir_url( __FILE__ ) .'assets/css/style.css' );
	wp_enqueue_style('seorankanalyserstyle');
	wp_register_style( 'seorankanalysericons', plugin_dir_url( __FILE__ ) .'assets/css/icons.css' );
	wp_enqueue_style('seorankanalysericons');
			
?>


</head>

<body class="seorankanalyserbody" >
<div style="clear:both;"></div>
<div class="seorankanalysercontents" >

<?php

	
	echo '<h1 id="seorankanalysertitle"> SEO Rank <span id="panda">Analyser</span></h1>';
	?>
    <div class="seorankanalyserinfo"> <a href="http://seorankanalyser.com/" target="_blank">Signup for Detail Analysis</a><br />For Support:  support@seorankanalyser.com <br />A product of <a href="http://seorankanalyser.com/" target="_blank">SEO Rank Analyser</a>
</div>
<?PHP
	
	echo '<h2 id="seorankanalysersiteinfo">Your Website: ' . get_site_url() .'</h2> ';
	
	
?>
<h3 id="posttitle">Click on individual title below to get Keyword Analysis report</h3>
<div id="seorankanalyserpagelist">

<div id="seorankanalyserpages">
<h3 id="h3subtitle">Pages</h3>
<?PHP
$arr = get_pages();
foreach($arr as $arr1){
	if(isset($arr1->post_title)){
echo "<div class='keywordpandasitelist'><i class='icon-arrow-right'></i> <a href='http://seorankanalyser.com/Reports/genAPIReport?type=api&url=" . get_page_link( $arr1->ID )  . "' target='_blank'>" .  $arr1->post_title . "</a></div>";
	}
}


?>
</div>
<div id="seorankanalyserposts">
<h3 id="h3subtitle">Posts</h3>

<?PHP
$arr = get_posts();
foreach($arr as $arr1){
	if(isset($arr1->post_title)){
echo "<div class='keywordpandasitelist'><i class='icon-arrow-right'></i> <a href='http://seorankanalyser.com/Reports/genAPIReport?type=api&url=" . get_page_link( $arr1->ID )  . "' target='_blank'>" .  $arr1->post_title . "</a></div>";
	}
}


?>
</div>
</div>


