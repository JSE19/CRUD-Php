<?php
include('config/db_connect.php');

$email = $title = $ingredients ="";
$error = array('email'=>'', 'title'=>'','ingredients'=>'');
if(isset($_POST['submit'])){
    if(empty($_POST['email'])){
        $error['email']='Email should not be empty';
    }
    else{
        $email=$_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error['email']='Email is not a valid Email';
        }

    }
    if(empty($_POST['title'])){
        $error['title']='Title Must not be Empty';
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
            $error['title'] ='Input doesnt match, your inputs must alphabets or space';
        }
    }
    if(empty($_POST['ingredients'])){
        $error['ingredients']='Ingredients shouldnt be empty';
    }else{
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
            $error['ingredients']='Input doesnt match, your inputs must be comma seperated alphabets or space';
        }
    }
    if(array_filter($error)){
        echo 'Form has Error';
    }else{
        $email = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['email']));
        $title = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['title']));
        $ingredients = htmlspecialchars(mysqli_real_escape_string($conn,$_POST['ingredients']));
        $sql = "INSERT INTO food (title,email,ingredients) VALUES ('$title','$email','$ingredients')";
        if(mysqli_query($conn,$sql)){
            header('Location:index.php');
        }
        else{
            echo"Error Encountered: ".mysql_error($conn);
        }

        
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include('layout/header.php')?>
<section class="container grey-text">
    <h4 class="center">Add Food</h4>
    <form action="add.php" class="white" method="POST">
        <label> Your Email: </label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email)?>">
        <div class="red-text"><?php echo ($error['email'])?></div>
        <label> Food Name: </label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title)?>">
        <div class="red-text"><?php echo ($error['title'])?></div>
        <label> Food Ingredient(Comma Seperated): </label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients)?>">
        <div class="red-text"><?php echo ($error['ingredients'])?></div>
        <div class="center">
            <input type="submit" value="Save" name="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include('layout/footer.php')?> 

</html>