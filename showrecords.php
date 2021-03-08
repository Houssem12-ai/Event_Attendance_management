<html lang="en">

</html>

<?php
$title = 'Show Records';
require_once "./includes/header.php";
require "./DB/conn.php";

$result = $crud->getAttendee();

?>

<table class="table">
    <tr>
        <th>#</th>
        <th>first name</th>
        <th>second name</th>
        <th>Specialty</th>
        <th>Action</th>
    </tr>

    <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>

        <tr>
            <td><?php echo $r['attende_id'] ?></td>
            <td><?php echo $r['firstname'] ?></td>
            <td><?php echo $r['secondname'] ?></td>
            <td><?php echo $r['name'] ?></td>
            <td>
                <a href="view.php?id=<?php echo $r['attende_id'] ?>" class="btn btn-primary">View</a>
                <a href="edit.php?id=<?php echo $r['attende_id'] ?>" class="btn btn-warning">Edit</a>
            </td>


        </tr>

    <?php } ?>

</table>






<?php require_once './includes/footer.php' ?>