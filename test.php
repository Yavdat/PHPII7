<?php

require __DIR__.'/autoload.php';

$a=new \App\Collection();
$a[]=1;
$a[1]=11;
$a[2]=234;

var_dump($a);

foreach ($a as $el){
    echo $el;
}

//$ex=new Exception('Kukushka');
//var_dump($ex->getMessage());
//var_dump($ex);

//object(Exception)#1 (7) {
//["message":protected]=>
//  string(0) ""
//["string":"Exception":private]=>
//  string(0) ""
//["code":protected]=>
//  int(0)
//  ["file":protected]=>
//  string(52) "C:\DevTools\OpenServer\domains\phpii5.local\test.php"
//["line":protected]=>
//  int(5)
//  ["trace":"Exception":private]=>
//  array(0) {
//}
//  ["previous":"Exception":private]=>
//  NULL