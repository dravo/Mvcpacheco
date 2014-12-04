<?php
/**
 * Created by PhpStorm.
 * User: ÄrturÖ
 * Date: 16/10/2014
 * Time: 05:29 PM
 */
function view($plantilla,$variables=array())
{
    extract ($variables);
    require('views/'.$plantilla.'.tpl.php');

}

function controller($nombre)
{
    if (empty($nombre))
        $nombre = 'home';

        $archivo = "controllers/$nombre.php";


    if (file_exists($archivo))
        require($archivo);

    else
        echo "<img src='bx_loader.gif'/>";


}
?>

