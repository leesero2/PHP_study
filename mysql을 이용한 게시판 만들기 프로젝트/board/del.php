<?php
    include "lib.php";

    $idx = $_GET['idx'];
    $name = mysqli_real_escape_string($connect, $idx);

    $query = "delete from sing_board where idx='$idx'";

    mysqli_query($connect,$query);
?>

<script>
    location.href='list.php';
</script>
