<?php
    include_once 'bonds/config.php';

    $sql = "SELECT * FROM comment ORDER BY comment_id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
?>

<div class="row">
    <div class="col-md-4">
    <div class="card mb-3">

<div class="card-title bg-secondary text-white">

    <p class="mb-3 p-0 ms-5"><i><?php echo $row['name']; ?> <small><i>typing...<i></small></i></p>

</div>

<div class="card-body">

<div class="card-text">
<small><?php echo $row['comments']; ?></small>
</div>
</div>

<div class="card-footer">
<small class="text-success"><i><?php echo date('l jS F | h: i: s A', strtotime($row['comment_date'])) ?></i></small>
</div>
</div>
    </div>
</div>

    <?php } } ?>