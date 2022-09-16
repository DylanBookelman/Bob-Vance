<?php
include"connect.php";
$naam = '';
$prijs = '';
function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['naam'];
    $posts[1] = $_POST['prijs'];
    return $posts;
}
if (isset($_POST['update'])) {
    $data = getPosts();
    if (empty($data[0]) || empty($data[1]) || empty($data[2])) {
        echo '<script>alert(Enter data)</script>';
    } else {
        $updateStmt = $conn->prepare('UPDATE koelkast SET naam= :naam, prijs = :prijs WHERE id = :id');
        $updateStmt->execute(array(
            ':naam' => $data[0],
            ':prijs' => $data[1]
        ));
        if ($updateStmt) {
            echo "<script>alert('Data Updated')</script>";
        }
    }
}
?>
</table>
<!DOCTYPE html>
<html>
<head>
    <title>Edit </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <form action="index.php" method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <input type="text" name="naam" placeholder="naam" value="<?php echo $naam; ?>"><br><br>
        <input type="number" name="prijs" placeholder="prijs" value="<?php echo $prijs; ?>"><br><br>
        <input type="submit" name="update" value="Update">
    </form>
    <form action="index.php">
        <input type="submit" value="Terug naar index">
    </form>
</body>
</html>