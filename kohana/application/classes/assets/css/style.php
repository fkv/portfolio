<?php
class Assets_Css_Style
{
    public static function render()
    {
        return '
@CHARSET "UTF-8";
#main_container{
    width: 900px;
    margin: 0 auto;
    background-color: purple;
}
#main_nav{
    list-style-type: none;
}
#main_nav li{
    float: right;
    text-decoration: none;
}';
    }
}
?>
