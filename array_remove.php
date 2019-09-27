//array_slice can be used to remove elements from an array but it's pretty simple to use a custom function.

//One day array_remove() might become part of PHP and will likely be a reserved function name, hence the unobvious choice for this function's names.

<?
function arem($array,$value){
    $holding=array();
    foreach($array as $k => $v){
        if($value!=$v){
            $holding[$k]=$v;
        }
    }   
    return $holding;
}

function akrem($array,$key){
    $holding=array();
    foreach($array as $k => $v){
        if($key!=$k){
            $holding[$k]=$v;
        }
    }   
    return $holding;
}

$lunch = array('sandwich' => 'cheese', 'cookie'=>'oatmeal','drink' => 'tea','fruit' => 'apple');
echo '<pre>';
print_r($lunch);
$lunch=arem($lunch,'apple');
print_r($lunch);
$lunch=akrem($lunch,'sandwich');
print_r($lunch);
echo '</pre>';
?>
