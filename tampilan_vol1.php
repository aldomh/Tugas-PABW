<html>
 <head>
  <title>Hasil Hitung Kubus</title>
 </head>
 <body bgcolor='darkgrey'>
 <?PHP
 $r = $_GET["rusuk"];
 $V = (6 * $r);
 ECHO "<table border='0' bgcolor='darkgrey' align=center><tr><tr><th colspan='2'>Hasil Hitung</th></tr>";
 ECHO "<tr><td>Panjang rusuk : </td><td> $r cm</td></tr><br>";
 ECHO "<tr><td>Volume kubus : </td><td><b><u> $V cm3 </u></b></td></tr>";
 ?>
 <form action='volume1.php'>
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
 </form>
 </body>
</html>