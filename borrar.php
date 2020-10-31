<?php
session_start();
include 'head.php';
                
if(isset($_REQUEST['borrar']))
{

$num_indicencia = $_REQUEST['num_incidencia'];


//Numero de incidencias antes de borrar
  $contador_antes=count($_SESSION['incidencia']);

//Borro en el array
unset($_SESSION['incidencia'][$num_indicencia]);

//Numero de incidencias despues de borrar
$contador_despues=count($_SESSION['incidencia']);
if ($contador_antes==$contador_despues)
{
  echo '<script>alert("No se encuentra esa incidencia");</script>';
}

else
 {
  unset($_SESSION['incidencia'][$num_indicencia]);
  echo '<script>alert("La incidencia se borro correctamente");</script>';
 }

}

echo '<pre>';
var_dump($_SESSION['incidencia']);
echo '</pre>';

 print' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
 include 'pie.php';