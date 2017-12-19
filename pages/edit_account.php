<?php include 'header.php' ?>

<?php $array = get_object_vars($data); ?>

<form action="index.php?page=accounts&action=save&id=<?php echo $array['id']?>" method="post">
    First name: <input type="text" name="fname" value="<?php echo $array['fname']?>" > <br>

    Last name: <input type="text" name="lname" value="<?php echo $array['lname'] ?>" ><br>

    Email: <input type="text" name="email" value="<?php echo $array['email'] ?> "><br>

    Phone: <input type="text" name="phone" value=" <?php echo $array['phone'] ?> "><br>

    Birthday: <input type="text" name="birthday" value=" <?php echo $array['birthday'] ?> "><br>

    Gender: <input type="text" name="gender" value=" <?php echo $array['gender'] ?>" ><br>

    

    <input type="submit" value="Submit form">
</form>

<?php include 'footer.php'?>
