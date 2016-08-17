<?php

//require __DIR__.'/autoload.php';
//
//$a=new \App\Collection();
//$a[]=1;
//$a[1]=11;
//$a[2]=234;
//
//var_dump($a);
//
//foreach ($a as $el){
//    echo $el;
//}
function getVar($var){
    return '<pre>'.print_r($var,1).'<pre>';
}

function getFilter($type){
    switch($type) {
        case 'email':
            return function ($x){
                return trim($x);
            };
            break;
        case 'username':
            return function ($x){
                return str_replace(' ','',$x);
            };
            break;
    }
    return '';
};

$filter=getFilter('username');
echo $filter(' hjdkfgld dfjkg sd s df ');
echo getFilter('email')('      sdfjskd sdk s dklfs ');

$f=function ($x){
  return $x*2;
};
echo $f(2);
echo "<br>Array_map<br>";

$am=array_map(function($x){
    return $x*2;
},[1,2,3]);
echo getVar($am);

$aw=[1,2,3];
array_walk($aw,function(&$x){
    $x*=2;
});
getVar($aw);
echo '<br>'.'Closure'.'<br>';

$prefix='project';
$f=function ($name) use ($prefix){
    return $prefix.'_'.$name;
};
echo $f('users');
function gen()
{
    for($x=1;$x<10;$x++){
        yield $x=>$x*100;
    }
};
$u=gen();
echo '<br>';
foreach (gen() as $i=>$v)
{
    echo $i.'=>'.$v.'<br>';
}

function sum(...$nums)
{
    var_dump($nums);
    return array_sum($nums);
};
echo sum(1,2,3);
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