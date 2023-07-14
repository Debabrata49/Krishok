<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Website Icon" type="png" href="Krishok-logo.png">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        .add_product_btn{
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

        .add_product_btn:hover{
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

        .f_details{
            padding: 2rem;
            border-radius: .5rem;
            background: var(--bg-color);
        }
        .f_details_head{
            display: inline-block;
            margin-left: 25px;
        }
        .f_details_head h3{
            padding: 8px;
        }

        .f_details_data{    
            display: inline-block;
            margin-left: 170px;
        }

        .f_details_data h2{
            padding: 8px;
        }

        .logout{
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

        .logout:hover{
            background: var(--black);
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
        <div class="row">
            <div class="col f_details">
                <h1 align="center">FARMER DATAILS</h1>
                <div class="f_details_head">
                    <h3>Name:</h3>
                    <h3>Phone No:</h3>
                    <h3>Addhar No:</h3>
                    <h3>Email:</h3>
                </div>
                <div class="f_details_data">
                    <h2>{{$f_data->name}}</h2>
                    <h2>{{$f_data->phone_number}}</h2>
                    <h2>{{$f_data->adhar_no}}</h2>
                    <h2>{{$f_data->login_id}}</h2>
                </div>
                <hr style="border: none; height: 2px; background-color: green;">
                <br>
                <button class="btn btn-primary btn-lg logout"  onclick="location.href='farmerLogout';">Logout</button>
            </div>
            <div class="col">
                <div class="admin-product-form-container">
                    <form enctype="multipart/form-data" method="POST" action="{{ url('add_product')}}"> 
                         {{ csrf_field() }}
                        <h3>Add a new product</h3>
                        <input type="hidden" name="farmer_id" value="{{$login_id}}">
                        <input type="text" placeholder="Enter product name" name="Product_name" class="box">
                        <input type="number" placeholder="Enter product price" name="Product_price" class="box">
                        <input type="file" accept="image/png , image/jpeg , image/jpg" name="Product_image" class="box">
                        <input type="Submit" class="add_product_btn" id="add_prod_btn" value="Add product">
                    </form>
                </div>
            </div>
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
                <tbody>
                    @if(count($data)>0)
                    @foreach($data as $key)
                     <tr>
                       <td> <img src="{{ asset($key->product_image) }}" height="100" width="100"></td>
                        <td>{{$key->product_name}}</td>
                        <td>{{$key->product_price}}/Box</td>
                        <td colspan="2"><button class="btn btn-primary btn-lg" id="edit_btn" data-item-id="{{$key->id}}">Edit</button> | <button class="btn btn-danger btn-lg" id="delete-btn" data-item-id="{{$key->id}}">Delete</button> </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="edit_modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Modal body text goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
</body>
<script>
    $(document).on('click','#delete-btn',function(){
        var itemId = $(this).data('item-id');
        $.ajax({
            type: "GET",
            url: '/items/' + itemId,
            data: {
                    "_token": "{{ csrf_token() }}"
                },
            success: function(response) {
                if(response.status == 200){
                    location.reload();
                }
            },    
        });
    });
    $(document).on('click','#edit_btn',function(){
        // alert("hi");
        $('#edit_modal').show();
    });
    // document.querySelector('form').addEventListener('submit', (e) => {
    //     const formData = new FormData(e.target);
    //     $.ajax({
    //         type: "POST",
    //         url: "{{ asset('add_product') }}",
    //         data: "{empid: formData}",
    //         contentType: "application/json; charset=utf-8",
    //         dataType: "json",
    //         success: function(result) {
                
    //         }
    //     })
    // });
</script>
</html>