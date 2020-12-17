<?php
include 'lib/function.php';
$username = $_SESSION['username'];
if (!isset($username)) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product | Affilino</title>
    <!----------CSS-------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!----------CSS-------------->


    <!----------CUSTOM CSS-------------->

    <link rel="stylesheet" href="css/newProduct.css">

    <!----------CUSTOM CSS END-------------->

</head>

<body>
    <div class="container pt-5">
        <div class="form_header">
            <span class="header_text">Add Product</span>
            <span class="right-line"></span>
        </div>
        <form action="" method="post" enctype='multipart/form-data' class="form__container col-6 offset-3 mt-3">
            <?php addProduct($username); ?>
            <table>
                <div class="form-group mb-2">
                    <tr>
                        <td>
                            <Label>Product name:</Label>
                        </td>
                        <td>
                            <input type="text" name="Pname" class="form-control">
                        </td>
                    </tr>
                </div>

                <div class="form-group mb-2">
                    <tr>
                        <td>
                            <Label>Product image:</Label>
                        </td>
                        <td>
                            <input type="file" name="pImg" class="form-control-file" id="exampleFormControlFile1">
                        </td>
                    </tr>
                </div>

                <div class="form-group mt-3">
                    <tr>
                        <td>
                            <Label>Download File:</Label>
                        </td>
                        <td>
                            <input type="file" name="dImg" class="form-control-file" id="exampleFormControlFile1">
                        </td>
                    </tr>
                </div>

                <div class="form-group">
                    <tr>
                        <td>
                            <Label>Category:</Label>
                        </td>
                        <td>
                            <input type="text" name="pCat" class="form-control" id="exampleFormControlFile1">
                        </td>
                    </tr>
                </div>

                <div class="form-group">
                    <tr>
                        <td>
                            <Label>Regular Price:</Label>
                        </td>
                        <td>
                            <input type="text" name="pPrice" class="form-control" id="exampleFormControlFile1">
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td>
                            <Label>Discount:</Label>
                        </td>
                        <td>
                            <input type="text" name="pdiscount" class="form-control" id="exampleFormControlFile1">
                        </td>
                    </tr>
                </div>

                <div class="form-group">
                    <tr>
                        <td>
                            <Label>Available:</Label>
                        </td>
                        <td>
                            <input type="text" name="pavailable" class="form-control" id="exampleFormControlFile1">
                        </td>
                    </tr>
                </div>

            </table>

            <button type="submit" name="addProduct" class="btn btn-primary ml-3 mt-3">
                <i class="fas fa-plus-circle"></i>
                Add Product
            </button>
        </form>


    </div>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>