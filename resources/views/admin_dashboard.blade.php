<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <!-- My CSS -->
    
    <link href="{{ asset('css/admin_dash.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <title>Krishok</title>
  </head>
  <body>
    <!-- SIDEBAR -->
    <section id="sidebar">
      <a href="#" class="brand">
        <i class="bx bx-happy-beaming"></i>
        <span class="text">Krishok</span>
      </a>
      <ul class="side-menu top">
        <li class="active">
          <a href="#">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-user"></i>
            <span class="text">Profile</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="#" class="logout">
            <i class="bx bxs-log-out-circle"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
      <!-- NAVBAR -->
      <nav>
        <i class="bx bx-menu"></i>
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="Search..." />
            <button type="submit" class="search-btn">
              <i class="bx bx-search"></i>
            </button>
          </div>
        </form>

        <a href="#" class="profile">
          <img src="img/people.png" />
        </a>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Dashboard</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="#">Home</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- <ul class="box-info">
          <li>
            <i class="bx bxs-calendar-check"></i>
            <span class="text">
              <h3>500</h3>
              <p>New Order</p>
            </span>
          </li>
          <li>
            <i class="bx bxs-dollar-circle"></i>
            <span class="text">
              <h3>₹ 15,543</h3>
              <p>Total Profit</p>
            </span>
          </li>
          <li>
            <i class="bx bxs-dollar-circle"></i>
            <span class="text">
              <h3>₹ 52,500</h3>
              <p>Total Sales</p>
            </span>
          </li>
        </ul> -->

        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Recent Orders</h3>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Order Id</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Order Date</th>
                </tr>
              </thead>
              <tbody>
                @if(count($orderHistory)>0)
                @foreach($orderHistory as $key)
                 <tr>
                  <td>{{$key->order_id}}</td>
                    <td>{{$key->product_name}}</td>
                    <td>{{$key->product_price}}/Box</td>
                    <td>1 Box</td>
                    <td>{{$key->created_at}}</td>
                </tr>
                @endforeach
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </main>
      <!-- MAIN -->
    </section>
    <!-- CONTENT -->
  </body>
    <script>
        const allSideMenu = document.querySelectorAll("#sidebar .side-menu.top li a");

        const editItem = document.getElementById("edit-product");
        const deleteItem = document.getElementById("delete-product");

        editItem.addEventListener("click", function () {
            console.log("edit button has been clicked");
            alert(
                "Are you sure?"
            );
        });

        deleteItem.addEventListener("click", function () {
            console.log("delete button has been clicked");
            alert(
                "Are you sure?"
            );
        });

        allSideMenu.forEach((item) => {
            const li = item.parentElement;

            item.addEventListener("click", function () {
                allSideMenu.forEach((i) => {
                    i.parentElement.classList.remove("active");
                });
                li.classList.add("active");
            });
        });

        // TOGGLE SIDEBAR
        const menuBar = document.querySelector("#content nav .bx.bx-menu");
        const sidebar = document.getElementById("sidebar");

        menuBar.addEventListener("click", function () {
            sidebar.classList.toggle("hide");
        });

        if (window.innerWidth < 768) {
            sidebar.classList.add("hide");
        } else if (window.innerWidth > 576) {
            searchButtonIcon.classList.replace("bx-x", "bx-search");
            searchForm.classList.remove("show");
        }

        window.addEventListener("resize", function () {
            if (this.innerWidth > 576) {
                searchButtonIcon.classList.replace("bx-x", "bx-search");
                searchForm.classList.remove("show");
            }
        });

        const switchMode = document.getElementById("switch-mode");

        switchMode.addEventListener("change", function () {
            if (this.checked) {
                document.body.classList.add("dark");
            } else {
                document.body.classList.remove("dark");
            }
        });


    </script>
</html>
