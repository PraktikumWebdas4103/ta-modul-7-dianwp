<?php
require_once("db.php");
if (isset($_GET["cari"])) {
    $value = $_GET["cari"];
$sql = "SELECT * FROM maba where nim like '%$value%'";
}else {
$sql = "SELECT * FROM maba";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>

<head>

    <title>Lihat Data</title>

</head>

<body>
    <table>
       <td>
            <form action="lihatdata.php" method = "get">
            <input type="text" name="cari" placeholder="Cari Nim mahasiswa">
            <input type="submit">
        </form>
    </td>
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Aksi</th>
        </tr>
        <?php
        
        $row = mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row['nama']?></td>
                    <td><?php echo $row['nim']?></td>
                    <td> <a href="delete.php?id=<?php echo $row['nim']?>">delete</a>&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                <a href="detail.php?id=<?php echo $row['nim']?>"> Detail </a></td>
                </tr>
                <?php
            }
        }else {
            echo "0 result";
        }
        mysqli_close($conn);
        ?>

    </table>
</body>
</html>
<h3><a href="input.php"> ISI INPUT DATA MAHASISWA</a></h3>