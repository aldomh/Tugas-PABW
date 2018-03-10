 <html>
 <head>
  <title>Hasil Hitung Balok</title>
 </head>
 <body bgcolor='darkgrey'>
 <?php
 $p = $_GET['panjang'];
 $l = $_GET['lebar'];
 $t = $_GET['tinggi'];
 $V = ( $p * $l * $t );
 echo "<table border='0' bgcolor='darkgrey' align=center><tr><th colspan='2'>Hasil Hitung</th></tr>";
 echo "<tr><td>Panjang : </td><td> $p cm </td></tr>";
 echo "<tr><td>Lebar : </td><td> $l cm </td></tr>";
 echo "<tr><td>Tinggi : </td><td> $t cm </td></tr>";
 echo "<tr><td>Volume Balok :</td><td><b><u> $V cm3 </b></u></td></tr>";
 ?>
  <form action='volume2.php'>
  <tr>
   <td>
    <input type='submit' name='submit1' value='Back'>
   </td>
 </form>
 <form action='Home.html'>
   <td>
    <input type='submit' name='submit2' value='Home'>
   </td>
  </tr>
 </table>
 </body>
</html>