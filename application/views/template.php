<?php
//    $ua = getbrowser::getInfo();
//    $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta charset="utf-8">
            <title>'.$title.'</title>
            <link type="text/css" rel="stylesheet" media="screen" href="http://kohanarsrc.fredmadeit.com/css/style.css">';
/*
    if($ua['name'] == 'Mozilla Firefox') {
//        foreach($styles as $file => $type) {
        $style = Assets_Css_Style::render();
        $body .= '<style>' . $style . '</style>';
//        }
    }
    else {
    	$body .=  '<link type="text/css" rel="stylesheet" media="screen" href="/asset/css/style.css">';
    }
//    else {
//        foreach($styles as $file => $type) {
//            $body .= HTML::style($file, array('media' => $type));
//        }
//    }
*/
    foreach($scripts as $file) {
        $body .= HTML::script($file);
    }
/*
$string = '';
$default = Database::instance();
$rand = rand(0, 1000);
$query = DB::query(Database::INSERT, 'INSERT INTO hockeygame.user (user_name) VALUES (:user_name)');
 
$query->parameters(array(
    ':user_name' => $rand,
));

$query->execute();

$query = DB::query(Database::SELECT, 'SELECT * FROM hockeygame.user');
$result = $query->execute();
foreach ($result as $user){
	$string .= $user['id'];
}
unset($default);
*/
    $body .= '</head>
        <body>
            <div id="main_container">
                <ul id="main_nav">
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/portfolio">Portfolio</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/home">Home</a></li>
                    <li id="nav_logo">
						<a href="/home">fredmadeit.com</a>
					</li>
                </ul>'
                .$content.
			'</div>
        </body>
    </html>';
    echo $body;
?>
