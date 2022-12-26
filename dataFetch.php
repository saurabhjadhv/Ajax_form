<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$q = "select * from `signup`";

$query = mysqli_query($conn, $q);
if (mysqli_num_rows($query) > 0) {
    while ($result = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td>
        <?php echo $result['id'] ?>
    </td>
    <td>
        <?php echo $result['name'] ?>
    </td>
    <td>
        <?php echo $result['email'] ?>
    </td>
    <td>
        <?php echo $result['password'] ?>
    </td>
    <td>
        <?php echo $result['contact'] ?>
    </td>
    <td>
        <?php echo $result['Gender'] ?>
    </td>
    <td>
        <?php echo $result['course'] ?>
    </td>
    <td>
        <?php echo $result['edu'] ?>
    </td>

    <td><button><a href="update.php?id=<?php echo $result['id']; ?>">Update</a></button></td>
    <td><button><a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></button></td>


</tr>

<?php

    }
}
?>