<html>
<body>
<table border = 10 cellspacing = 5 cellpadding = 5 align = center>
<tr>
<th colspan=4>Integer Series </th>
</tr>
<tr>
<th>Integer <th>Square <th>Cube <th>Triangle
</tr>
<?php
$square=0;
$triangle=0;
$count=1;
while($count<=10)
{
$square=$count*$count;
$cube=$count*$count*$count;
$triangle=$triangle + $count;

echo "<tr><th>",$count,"<th>",$square,"<th>",$cube,"<th>",$triangle,"</tr>";
$count++;
}
?>
</table>
</body>
</html>
