<html>
<body>

<?php
echo "<right>";
echo "<table border>";

echo "<tr>";
echo "<td>NIM</td>";
echo "<td>" .$_POST["NIM"]. "</td>";
echo "</tr>"; 
echo "<tr>";
echo "<td>Nama</td>";
echo "<td>". $_POST["nama"]. "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Jenis Kelamin</td>";
echo "<td>". $_POST["Kelamin"]. "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Program Studi</td>";
echo "<td>". $_POST["PRODI"]. "</td>";

echo "</table>";
echo "</right>";
?>

</body>
</html>