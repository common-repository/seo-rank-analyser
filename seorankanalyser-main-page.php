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

	wp_enqueue_script( 'jquery');

	wp_register_style( 'seorankanalyserstyle', plugin_dir_url( __FILE__ ) .'assets/css/style.css' );
	wp_enqueue_style('seorankanalyserstyle');
	wp_register_style( 'seorankanalysericons', plugin_dir_url( __FILE__ ) .'assets/css/icons.css' );
	wp_enqueue_style('seorankanalysericons');
	
?>
<script>
$j=jQuery.noConflict();
$j(document).ready(function(){
    $j("#getKeywordReport").click(function(){
		
     
	  var url = '<?PHP echo get_site_url();?>';
	  
	  $j('.loadingimg').show();
		 $j.ajax({
      url:'http://seorankanalyser.com/Reports/genAPIReport/',
      data: "url=" + url,
	  
      type: "GET",
      success: function(data){
		 $j(".loadingimg").hide();
           $j("#seorankanalyserresult").html(data);
		  
		   
		   $j(".loadingimg").hide();
      }
});
    });
});

</script>


</head>

<body class="seorankanalyserbody">
<div style="clear:both;"></div>
<div class="seorankanalysercontents" >

<?php

	
	echo '<h1 id="seorankanalysertitle"> SEO Rank <span id="panda">Analyser</span></h1>';
	?>
    
    <div class="seorankanalyserinfo"><a href="http://seorankanalyser.com/" target="_blank">Signup for Detail Analysis</a> <br />For Support:  support@seorankanalyser.com <br />A product of <a href="http://seorankanalyser.com/" target="_blank">SEO Rank Analyser</a>
<br /><strong style="color:red;">DO NOT run in localhost. It may not return results </strong>
	</div>
<?PHP
	echo '<h2 id="seorankanalysersiteinfo">Your Website: ' . get_site_url() .' <br /> '
	?>
    <img src="<?php echo plugin_dir_url( __FILE__ ) ;?>assets/images/loading.gif" class="loadingimg" />

<?PHP
if($_SERVER['REMOTE_ADDR'] =='127.0.0.1'){
	echo 'Plugin can not work in localhost. Please host in server.';
}
else{
	echo '<span id="getKeywordReport"> Analyze Your Website</span></h2> <br />';
}

	
?>

<div id="seorankanalyserresult"></div>


