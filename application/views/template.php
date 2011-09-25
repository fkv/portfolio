<?php
    $ua = getbrowser::getInfo();
    $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
    $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta charset="utf-8">
            <title>'.$title.'</title>';
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

    foreach($scripts as $file) {
        $body .= HTML::script($file);
    }
$string = '';
$default = Database::instance();
$rand = rand(0, 100);
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
    $body .= '</head>
        <body>
            <div id="main_container">
                <ul id="main_nav">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/about_us">About Us</a></li>
                    <li><a href="/lion_dance">Lion Dance</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/join_us">Join Us</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/photos">Photos</a></li>
                    <li><a href="/videos">Videos</a></li>
                </ul>'.'<h2>'.$string.'</h2>'.
                $content.
$yourbrowser
            .'</div>
        </body>
    </html>';
    echo $body;
?>
