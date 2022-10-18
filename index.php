<?php
include('config/db_connect.php');
$sql = 'SELECT id, title, ingredients,email FROM food ORDER BY created_at';
$result = mysqli_query($conn, $sql);
$foods = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<?php include('layout/header.php')?>
    <h4 class="center grey-text">Foods</h4>
    <div class="container">
        <div class="row">
            <?php foreach($foods as $food):?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($food['title']); ?></h6>
                            <div><?php echo htmlspecialchars($food['ingredients']); ?></div>

                        </div>
                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $food['id'] ?>" class="brand-text">More info</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div>
    </div>
<?php include('layout/footer.php')?> 

</html>
