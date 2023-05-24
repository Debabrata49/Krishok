<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Website Icon" type="png" href="Krishok-logo.png">
    <title>Website icon</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        :root{
        --green:#27ae60;
        --black: #333;
        --bg-color:#eee;
        --box-shadow: 0.5rem 1rem rgba(0, 0,0,.1);
        --border: .1rem solid var(--black);
        }

        *{
        font-family: 'Poppins',sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        }

        html{
            font-size: 62.5%;
            overflow-x: hidden;
        }

        .btn{
            display: block;
            width: 100%;
            cursor: pointer;
            border-radius: .5rem;
            margin-top: 1rem;
            font-size: 1.7rem;
            padding: 1rem 3rem;
            background: var(--green);
            color: var(--white);
        }

        .btn:hover{
            background: var(--black);
        }

        .message{
            display: block;
            background: var(--bg-color);
            padding: 1.5rem 1rem;
            font-size: 2rem;
            color: var(--black);
            margin-bottom: 2rem;
            text-align: center;
        }
        .container{
            max-width: 1200px;
            padding: 2rem;
            margin: 0 auto;
        }

        .admin-product-form-container form{
        max-width: 50rem;
        margin: 0 auto;
        padding: 2rem;
        border-radius: .5rem;
        background: var(--bg-color);
        }

        .admin-product-form-container form h3{
            text-transform: uppercase;
            color: var(--black);
            margin-bottom: 1rem;
            text-align: center;
            font-size: 2.5rem;
        }

        .admin-product-form-container form .box{
            width: 100%;
            border-radius: .5rem;
            padding: 1.2rem 1.5rem;
            font-size: 1.7rem;
            margin: 1rem 0;
            text-transform: none;
        }

        .product-display{
            margin: 2rem 0;
            overflow-y: scroll;
        }

        .product-display .product-display-table{
            width: 100%;
            text-align: center;
        }

        .product-display .product-display-table thead{
            background: var(--bg-color);
        }

        .product-display .product-display-table tr{
            padding: 1rem;
            font-size: 2rem;
            border-bottom: var(--border);
        }

        @media (max-width:991px){

            html{
                font-size: 55%;
            }

            .product-display .product-display-table{
            width: 80rem;
        }
        }

        @media (max-width:768px){

            .product-display .product-display-table{
            width: 80rem;
        }
        }
        @media (max-width:450px){

            html{
                font-size: 50%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="admin-product-form-container">
            <form>
                <h3>Add a new product</h3>
                <input type="text" placeholder="Enter product name" name="Product_name" class="box">
                <input type="number" placeholder="Enter product price" name="Product_price" class="box">
                <input type="file" accept="image/png , image/jpeg , image/jpg" name="Product_image" class="box">
                <input type="Submit" class="btn" name="add_product" value="Add product">
            </form>
        </div>
        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <td>Product image</td>
                        <td>Procuct name</td>
                        <td>Product price</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                
            </table>
        </div>
    </div>
</body>
</html>