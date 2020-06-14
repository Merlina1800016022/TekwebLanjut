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
echo "<td>Alamat</td>";
echo "<td>". $_POST["Alamat"]. "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>Program Studi</td>";
echo "<td>". $_POST["PRODI"]. "</td>";

echo "</tr>";
echo "<tr>";
echo "<td>Bahasa Pemograman yang DiKuasai</td>";

echo "<td>"; if (isset($_POST["Paschal/Delphi"])) {
	echo $_POST["Paschal/Delphi"]. "</td>";
}
echo "<td>";
if (isset($_POST["C/C++"])) {
	echo $_POST["C/C++"]. "</td>";
}
echo "<td>";
if (isset($_POST["VisualBasic"])) {
	echo $_POST["VisualBasic"]. "</td>";
}
echo "</tr>";
echo "</table>";
echo "</right>";
?>