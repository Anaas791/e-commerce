<?php 
include('../includes/connect.php');

if (isset($_POST['insert_brand'])) {
    $brand_title = $_POST['bra_title'];

    // Check if category already exists
    $select_query = "SELECT * FROM `brand` WHERE brand_title = '$brand_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo "<script>alert('This category is already present in the database')</script>";
    } else {
        // Insert new category
        $insert_query = "INSERT INTO `brand` (brand_title) VALUES ('$brand_title')";
        $result = mysqli_query($con, $insert_query);

        if ($result) {
            echo "<script>alert('brand has been inserted successfully')</script>";
        } else {
            echo "<script>alert('Failed to insert brand')</script>";
        }
    }
}
?>

<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
       <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
       <input type="text" class="form-control" name="bra_title" placeholder="Insert brands" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" value="Insert brands" >
    </div>
</form>