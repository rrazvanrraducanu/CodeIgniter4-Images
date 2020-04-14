<!DOCTYPE html>
  <head>
  </head>
  <body>
    <table>
     <tr>
      <td><strong>Nume</strong></td>
      <td><strong>Imagine</strong></td>
    </tr> 
     <?php foreach($images as $var){?>
     <tr>
         <td><?php echo $var['title'];?></td>
         <td><img src="<?php echo base_url($var['image']);?>" width="100" height="100"></td>
      </tr>     
     <?php }?>  
   </table
<br><br>
<?php echo anchor(array('ImageController/upload/'),'Upload another image'); ?>

  </body>
</html>