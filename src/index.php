<?php

require __DIR__ . '../../vendor/autoload.php';

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => 'redis',
    'port'   => 6379,
]);
$client->set('foo', 'works!');
$value = $client->get('foo');

echo $value;

// require_once(realpath(dirname(__FILE__) . "/../resources/config.php"));
 
// require_once(LIBRARY_PATH . "/templateFunctions.php");

// /*
//     Now you can handle all your php logic outside of the template
//     file which makes for very clean code!
// */
 
// $setInIndexDotPhp = "Hey! I was set in the index.php file.";
 
// // Must pass in variables (as an array) to use in template
// $variables = array(
//     'setInIndexDotPhp' => $setInIndexDotPhp
// );
 
// renderLayoutWithContentFile("home.php", $variables);



?>

<?php
    // require_once(realpath(dirname(__FILE__) . "/../config.php"));
 
    // function renderLayoutWithContentFile($contentFile, $variables = array())
    // {
    //     $contentFileFullPath = TEMPLATES_PATH . "/" . $contentFile;
     
    //     // making sure passed in variables are in scope of the template
    //     // each key in the $variables array will become a variable
    //     if (count($variables) > 0) {
    //         foreach ($variables as $key => $value) {
    //             if (strlen($key) > 0) {
    //                 ${$key} = $value;
    //             }
    //         }
    //     }
     
    //     require_once(TEMPLATES_PATH . "/header.php");
     
    //     echo "<div id=\"container\">\n"
    //        . "\t<div id=\"content\">\n";
     
    //     if (file_exists($contentFileFullPath)) {
    //         require_once($contentFileFullPath);
    //     } else {
    //         /*
    //             If the file isn't found the error can be handled in lots of ways.
    //             In this case we will just include an error template.
    //         */
    //         require_once(TEMPLATES_PATH . "/error.php");
    //     }
     
    //     // close content div
    //     echo "\t</div>\n";
     
    //     require_once(TEMPLATES_PATH . "/rightPanel.php");
     
    //     // close container div
    //     echo "</div>\n";
     
    //     require_once(TEMPLATES_PATH . "/footer.php");
    // }
?>