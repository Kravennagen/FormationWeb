
<?php
include("header.html")
?>
<table style="width:100%">
  <tr>
    <th>Prenom</th>
    <th>Nom</th> 
    <th>Age</th>
    <th>Genre</th>
    <th>Nourriture</th>
    <th>Pays</th>
  </tr>  


<?php 
$con=mysqli_connect("localhost","root","root","thomas");
$result=mysqli_query($con,"SELECT Prenom, Nom, Age, Genre, Nourriture, Pays FROM users");

while ($row=mysqli_fetch_row($result))
{
?>
<tr>
    <td><?php echo $row[0] ?></td>
    <td><?php echo $row[1] ?></td> 
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[3] ?></td>
    <td><?php echo $row[4] ?></td>
    <td><?php echo $row[5] ?></td>
        
  </tr>

<?php
}




?>
</table>
<?php
include("footer.html")
?>