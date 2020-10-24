<?php
require_once 'vendor/autoload.php';
require_once 'models/database.php';
require_once 'models/entity/Admin.php';
//$usuarios = $database::table('admin')->get();
/**/
$usuarios = Admin::select('id','Username','Password','nombres')->where('Username','admin')->get();
echo $usuarios[0]->Username;
$usuarios=$database::table('admin')->get();
d($usuarios);



/*Modificar una cosa*/
$usuario=Admin::find(1);
/*Seleccionar por username*/
//$usuario=Admin::select('id')->where('Username','yorgen');
$usuario->update([
'Username'=>'Galvan',
'Password'=>'Galvan',
'nombres'=>'Camilo Galvan'
]);
$usuario->save();

$usuarios=$database::table('admin')->get();
d($usuarios);

/*Para eliminar*/
Admin::destroy(1);
echo "Ha sido eliminado";



?>