<?php
if (isset($_POST['submit'])){
    $name = $_POST['name'];
if(empty($name)){
    echo "Name is required!";
}
else{
    echo $name;
}
}

?>
        <form method = "POST">
            Name: <input type = "text" name = "name">
            <input type = "submit" name ="submit"  value = "submit">
</form>

