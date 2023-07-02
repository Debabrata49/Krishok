<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link href="{{ asset('css/product1.css') }}" rel="stylesheet">
  <title>Krishok|Our Product</title>
</head>
<body>
  <header class="header">

        <a href="#" class="logo"> <img src="images/logo.png"></i> Krishok </a>

        <nav class="navbar">
            <a href="/#home">home</a>
            <a href="{{'product_list'}}">product</a>
            <a href="/#about">about</a>
            <a href="/#review">review</a>
            <a href="/#contact">contact</a>
        </nav>

        <div class="icons">
            <div id="cart-btn" class=""></div>
            <div id="login-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
  </header>
  <div class="clearfix"></div>
  <div class="container">
    <h2 class="userName">Welcome {{$userDetails->name}}</h2>
    <button class="btn btn-primary userLogout" onclick="location.href='UserLogout';">Logout</button>
    <h2 align="center">Our Product</h2><hr>
    <div class="row">
      @if(count($listProduct)>0)
      @foreach($listProduct as $product)
      <div class="col-md-3">
        <table align="center" cellspacing="0" cellpadding="10">
          <tr align="center">
            <td>
              <img class="product_img" src="{{ asset($product->product_image) }}" height="200" width="200"><br>
              <p>{{$product->product_name}}</p><br>
              <p>Price &#8377; {{$product->product_price}}/Box</p>
              <button class="btn btn-primary" id="buy_now" data-user-id="{{$userDetails->id}}" data-item-id="{{$product->id}}">Buy Now</button>
            </td>
            <br>
            <br>
          </tr>
        </table>
      </div>      
      @endforeach
      @endif
    </div>
  </div>
  <div class="modal" tabindex="-1" role="dialog" id="buy_now_modal">
  <div class="modal-dialog" role="document">
      <div id="oderConfirm"></div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
  $(document).on('click','#buy_now',function(){
    var itemId = $(this).data('item-id');
    var user_id = $(this).data('user-id');
      $.ajax({
        type: "GET",
        url: '/product',
        data: {
                "_token": "{{ csrf_token() }}",
                user_id:user_id,
                itemId:itemId
            },
        success: function(response) {
            if(response.status == 200){
              console.log(response);
              var currentDate = new Date();
              var date = currentDate.toLocaleDateString();
              var time = currentDate.toLocaleTimeString();
              // Create the modal content
              var newModal = '';

              // Create the modal header
              newModal += '<div class="modal-header">';
              newModal += '<h2 class="modal-title">Your Order Confirmed!</h2>';
              newModal += '</div>';

              // Create the modal body
              newModal += '<div class="modal-body">';
              newModal += '<div class="d-flex justify-content-between align-items-center">';
              newModal += '<div>';
              newModal += '<p class="text-muted mb-2">Order ID <span class="fw-bold text-body">'+response.orderHistory.order_id+'</span></p>';
              newModal += '<p class="text-muted mb-0">Place On <span class="fw-bold text-body">'+date+'</span></p>';
              newModal += '</div>';
              newModal += '</div>';
              newModal += '<hr>';
              newModal += '<div class="flex-fill">';
              newModal += '<h3 class="bold">'+response.ProductData.product_name+'</h3>';
              newModal += '<p class="text-muted">Qt: 1 Box</p>';
              newModal += '<h3 class="mb-3">Rs. '+response.ProductData.product_price+'<span class="text-muted"> via (COD)</span></h3>';
              newModal += '</div>';
              newModal += '<div>';
              // newModal += '<img class="align-self-center img-fluid" src="{{ asset('+response.ProductData.product_image+') }}" width="250">';
              newModal += '<img class="align-self-center img-fluid" src="' + response.ProductData.product_image + '" width="250" hight="250">';



              newModal += '</div>';
              newModal += '<div>';
              newModal += '<h2>Address:</h2>';
              newModal += '<h3>'+response.UserData.name+'</h3>';
              newModal += '<h3>'+response.UserData.mobile_number+'</h3>';
              newModal += '<h3>'+response.UserData.address+'</h3>';
              newModal += '</div>';

              // Create the modal footer
              newModal += '<div class="modal-footer">';
              newModal += '<button type="button" class="btn btn-secondary" id="buy_modalClose" data-dismiss="modal">Close</button>';
              newModal += '</div>';

              // Append the modal HTML to the #orderConfirm div
              $('#oderConfirm').append('<div class="modal-content">' + newModal + '</div>');

              $('#buy_now_modal').show();
            }
        },    
    });
  });

  $(document).on('click','#buy_modalClose',function(){
      $('#orderConfirm').empty();
      $('#buy_now_modal').hide();
      location.reload();
  });
</script>
</body>
</html>