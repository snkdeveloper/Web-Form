<?php
include("connection.php");

?>
<style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

    </style>

<h2 class="heading font-x3"><b><font color="#0000ff">Happy 2022, Happy for Kids Too</font></b></h2>
<p>
	<button><b><font color="#0000ff">Read the statement</font></b></button>
	<button><a href = "form.php"><b><font color="#0000ff">Join the Chain-for-Children's-Cheer</font></b></a></button>
	<button><b><font color="#0000ff">Resources to Educate &amp; Awaken</font></b></button>
    
    

      </p>
      <h2 class="heading font-x2"><b><font color="#0000ff">Chain-for-Children's-Cheer</font></b></h2>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>profession</th>
        <th>city</th>
        <th>country</th>
        <th>contact</th>
        <th>remarks</th>

    </tr>
    <?php
    $query = mysqli_query($conn,"select * from supp");
    while($row = mysqli_fetch_array($query))
    {
    
    ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['profession'];?></td>
        <td><?php echo $row['city'];?></td>
        <td><?php echo $row['country'];?></td>
        <td><?php echo $row['contact'];?></td>
        <td><?php echo $row['remarks'];?></td>
    
</tr>
<?php }
?>
</table>

