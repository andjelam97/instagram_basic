<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Instagram Basic Display Api</h1>
    
    <?php
	require_once( 'instagram_basic_display_api.php' );

	

	$params = array(
		'get_code' => isset( $_GET['code'] ) ? $_GET['code'] : '',
		
	);
	$ig = new instagram_basic_display_api( $params );
     
    ?>
    
    <a href="<?php echo $ig->authorizationUrl; ?>">
		Authorize w/Instagram
	</a>

</body>
</html>
