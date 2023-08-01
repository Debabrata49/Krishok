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

          <a href="#" class="logo"> <img src="/images/logo.png"></i> Krishok </a>

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
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" align="center">
          <h2>Cart</h2>
        </div>
        <div class="col-md-4"></div>
      </div>
      <hr>
      <table style="width:100%">
        <thead>
          <tr style="font-size: 17px;">
            <td width="20%">Image</td>
            <td width="10%">Name</td>
            <td width="10%">Price</td>
            <td width="22%">Quty.</td>
            <td width="20%">Sub Total</td>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>
  </body>
</html>