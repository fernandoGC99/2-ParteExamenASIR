<?php
session_start();
include 'head.php';
var_dump($_SESSION['incidencia']);  
if(isset($_REQUEST['listar']));
  if ($incidencia == $_SESSION['incidencia']);
echo '<table>
    <tr>
        <th>Urgente </th>
        <th>Tipo  </th>
        <th>Lugar </th>
        <th>Descripción </th>
    </tr>';
    foreach($_SESSION['incidencia'] as $clave=>$valor)
    {
      echo '<tr>';
  
          echo '<td>'.$clave.'</td>';
          echo '<td>'.$valor.'</td>';
  
      echo '</tr>';
  }
  
  echo '</table>';



















 print' 
         <strong>SELECCIONA EL TIPO DE INCIDENCIA A LISTAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              										  </td></tr>
              <tr>
                <td align="right"><strong>Tipo :</strong></td><td>
                 <div align="left">
                    <select name="incidencia">
                     <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                    </select>
                </div>
               </td>
              </tr>
              <tr >
              <td colspan="2"><div align="center"><strong>
                <input name="listar" type="submit" id="listar" value="Listar"/>
                </strong>
                </div>
              </td>
            </tr>
              
        </table>
    </form>
        </div>';
 include 'pie.php';

