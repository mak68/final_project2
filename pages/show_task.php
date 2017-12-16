<?php include 'header.php' ?>


<?php $array = get_object_vars($data) ?>

<form action="index.php?page=tasks&action=save" method="post">

    Create Date: <input type="text" name="createddate" value="<?php echo $array['createddate'] ?>"><br>

    Due Date: <input type="text" name="duedate" value="<?php echo $array['duedate'] ?>"> <br>

    Message: <input type="text" name="message" value="<?php echo $array['message'] ?>"><br>

    Done?: <input type="text" name="isdone" value="<?php echo $array['isdone'] ?>"><br>

    <input type="submit" value="Submit form">
</form>



<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>



<?php include 'footer.php' ?>