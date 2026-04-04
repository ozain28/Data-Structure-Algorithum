
//case 01 ;
// Data-base me sorting (most common)
SELECT * FROM users ORDER BY name ASC;
case 02 ;
//backhand (php/laravel)
sort($arr); // simle sorting tarika ha ya likhna ka 

//laravel ma 
$users = user::orderby('name')->get();

//ya collection ma 
$users = $users->sortby('name');

//case 03 ;
//frontend (js)
//kabhi UI pe
//javascript
arr.sort() ;

//normal sorting php simple 
$arr = [5 , 3 ,2 ,1 ]
sort($arr); //assending
print_r($arr);

//desending
rsort($arr);

//Associate array 
$arr = ["a"=>5 , "b"=>4 , "c"=>3 , "d"=>2]
asort($arr);
print_r($arr);



