<?php
include('config/db_connect.php');

if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
    $sql = "DELETE FROM food WHERE id=$id_to_delete";
    if(mysqli_query($conn,$sql)){
        header('Location:index.php');
    }else{
        echo 'Query error: '. mysqli_error();
    }
}

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "SELECT * FROM food WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    $food = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'layout/header.php'; ?>
<h2> DETAILS </h2>
<div class="container center">
    <?php if($food):?>
        <h5> <?php echo $food['title'] ?></h5>
        <p> Created By: <?php echo htmlspecialchars($food['email']) ?></p>
        <p> Ingredients: <?php echo htmlspecialchars($food['ingredients']) ?></p>
        <p> Created at: <?php echo htmlspecialchars($food['created_at']) ?></p>
        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value=<?php echo $food['id'] ?>>
            <input type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
        </form>
    <?php else: ?>
        <p> No Such Id Found</p>
    <?php endif; ?>
</div>
<?php include 'layout/footer.php'; ?>
</html>