<?php

function tag_contents($string, $tag_open, $tag_close){
   foreach (explode($tag_open, $string) as $key => $value) {
       if(strpos($value, $tag_close) !== FALSE){
            $result[] = substr($value, 0, strpos($value, $tag_close));;
       }
   }
   return $result;
}

function after($delimiter, $full_string) {
    // e.g. :
    // after ('@', 'biohazard@online.ge')
    if (!is_bool(strpos($full_string, $delimiter)))
    return substr($full_string, strpos($full_string,$delimiter)+strlen($delimiter));
};

function before($delimiter, $full_string) {
    // e.g. : 
    // before ('@', 'biohazard@online.ge');
    return substr($full_string, 0, strpos($full_string, $delimiter));
};

/*
$string = "i love cute animals, like [animal]cat[/animal],
           [animal]dog[/animal] and [animal]panda[/animal]!!!";

echo "<pre>";
print_r(tag_contents($string , "[animal]" , "[/animal]"));
echo "</pre>";
 * 
 */


/*
 * 
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

$fullstring = 'this is my [tag]dog[/tag]';
$parsed = get_string_between($fullstring, '[tag]', '[/tag]');

echo $parsed; 
 * 
 */

function renderPage($template_name, $content){
    $tag_start  = "[dsg]";
    $tag_end    = "[/dsg]";
    
    
    $template_content =  file_get_contents("./theme/$template_name");
    $tags = tag_contents($template_content , $tag_start , $tag_end);
    foreach ($tags as $tag) {
        $object_name = before('.', $tag); 
        $attribute_name = after('.', $tag); 
        
        if (array_key_exists($object_name, $content)) {
            $object = $content[$object_name];
            if (array_key_exists($attribute_name, $object)) {
                $template_content = str_replace($tag_start.$tag.$tag_end, $object[$attribute_name], $template_content);
            }            
        } else {
            //
        }       
    }
    
    echo $template_content;
    
    /*
    echo "<pre>";
    print_r($tags);
    echo "</pre>";
     * 
     */
    
}