<?php include 'header.php' ?>


<form action="index.php?page=tasks&action=store" method="post">
    Create Date: <input type="text" name="createddate"><br>
    Due Date: <input type="text" name="duedate"><br>
    Message: <input type="text" name="message"><br>
    Done?: <input type="text" name="isdone"><br>
    <input type="submit" value="Submit form">
</form>




<?php include 'footer.php'?>