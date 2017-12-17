<?php include 'header.php' ?>


<?php $array = get_object_vars($data) ?>

    <form action="index.php?page=tasks&action=save" method="post">

        Create Date: <input type="text" name="createddate" value="<?php echo $array['createddate'] ?>"><br>

        Due Date: <input type="text" name="duedate" value="<?php echo $array['duedate'] ?>"> <br>

        Message: <input type="text" name="message" value="<?php echo $array['message'] ?>"><br>

        Done(y=1,n=0): <input type="text" name="isdone" value="<?php echo $array['isdone'] ?>"><br>



        <input type="submit" name="btSubmit" value="Update">


    </form>



<?php include 'footer.php' ?>