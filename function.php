<?php 
function split_words($string = '',$num = 500)
{
    $string = strip_tags($string);
    if (strlen($string) > 100) {
    
        // truncate string
        $stringCut = substr($string, 0, $num);
        $endPoint = strrpos($stringCut, ' ');
    
        //if the string doesn't contain any space then it will cut without word basis.
        $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
        $string .= '...';
    }
    return $string;
}
?>