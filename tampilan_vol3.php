 <html>
 <head>
  <title>Hasil Hitung Tabung</title>
 </head>
 <body bgcolor='darkgrey'>
 <?php
 $r = $_GET['jari'];
 $phi = 3.14;
 $t = $_GET['tinggi'];
 $V = ( $phi * $r * $r * $t );
 echo "<table border='0' bgcolor='darkgrey' align=center><tr><th colspan='2'>Hasil Hitung</th></tr>";
 echo "<tr><td>Jari-jari : </td><td> $r cm </td></tr>";
 echo "<tr><td>Tinggi : </td><td> $t cm </td></tr>";
 echo "<tr><td>Volume Tabung :</td><td><b><u> $V cm3 </b></u> </td></tr>";
 ?>
  <form action='volume3.php'>
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