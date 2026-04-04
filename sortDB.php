

// data DB sa sort ho ka a raha hai (index function) 01 ;
public function index()
{
    // Users ko name ke hisaab se sort karke lao
    $users = User::orderBy('name', 'asc')->get();

    return view('users.index', compact('users'));
}



//desending reverse 
$users = user::orderby('name' , 'desc')->get();





//Multiple sorting 
$users = user::orderby('name' , 'asc')
                    ->orderby('name' , 'asc')
                     ->get();




//data DB ma dalne sa phala sort krna (store function) 02 ;
public function(request $request){
    $number = $request->numbers; //[ 5 , 4 , 3 , 2 , 1 ]
   //sort before saving 
   sort($numbers);

   foreach($numbers as $num){
    number::create([
       value => $num
    ]);
   }
return redirect()->back();
}



//collection ka bad sorting (laravel style) 03 ;
public function index (){
    $users = user::all();

    //laravel collection sorting 
    $users = $users->sortby('name');

    return view('user.index' , compact('users'));

}
//Blade code isi ka 
@foreach($users as $user)
    <p>{{$user->name}}</p>
@endforeach