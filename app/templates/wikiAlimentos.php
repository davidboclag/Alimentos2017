<?php ob_start() ?>

 <table>
     <tr>
         <th>Alimento</th>
         <th>Enlace a Wikipedia</th>
     </tr>
     <?php foreach ($params['alimentos'] as $alimento) :?>
     <tr>
         <td><?php echo $alimento['nombre'] ?></td>
         <td><a href="http://es.wikipedia.org/wiki/<?php echo $alimento['nombre']?>"><?php echo "http://es.wikipedia.org/wiki/". $alimento['nombre'] ?></a></td>
     </tr>
     <?php endforeach; ?>

 </table>


 <?php $contenido = ob_get_clean() ?>

 <?php include 'layout.php' ?>