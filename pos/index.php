<?php
session_start(); // Start the session
include('../session.php');

?>






<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Drop Down Sidebar Menu | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxiocns CDN Link -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

   </head>
<body>

<script src="script.js"></script>
<script src="cart.js"></script>
<script src="cartlist.js"></script>
<script src="overlay-script.js"></script>


  <div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CodingLab</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Category</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Category</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Category</a></li>
          <li><a href="#">Retail</a></li>
          <li><a href="#">Wholesale</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Note</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Note</a></li>
          <li><a href="#">Sales Report</a></li>
          <li><a href="#">Balanced</a></li>
          <li><a href="#">Customer</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Analytics</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Analytics</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Report</a></li>
          <li><a href="#">Cash Drop</a></li>
          <li><a href="#">End of Shift</a></li>
          <li><a href="#">Check Receipt</a></li>
        </ul>
      </li>
   
    
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <!--<img src="image/profile.jpg" alt="profileImg">-->
      </div>
      <div class="name-job">
        <div class="profile_name"><h4><?php echo $fullname; ?></h4></div>
    <div class="job">Casher</div>
</div>

      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Dashboard</span>
    </div>


    <div class="container">
    <div class="left-container">

<br>

<div class="search-container">

    <button class="search-button"><i class="fas fa-search"></i></button>
    <input type="text" class="search-input" placeholder="Search...">

  <button class="search-button"><i class="fas fa-barcode"></i></button>
<input type="text" class="search-input" placeholder="Generate Barcode">

  
    
</div>

<br>

<center><div style="height: 1px; width: 90%; background-color: white;"></div></center>
<br>


<!-- HTML for the table -->
<table id="table-cart" style="margin-left: 5%; box-shadow: 0 0 40px aqua;">
  <thead>
    <tr>
      <th>Itemcode</th>
      <th>Description</th>
      <th>Qty</th>
      <th>Unit Price</th>
      <th>Total</th>
      <th>Discount</th>
    </tr>
    </tr>
  </thead>
  <tbody><!-- Add the opening tbody tag -->
    <!-- Table rows will be dynamically added here -->
  </tbody>
</table>



















<div id="receipt-overlay" class="receipt-overlay" style="display: none;">
    <div class="receipt-overlay-content">
        <form action="receipt.php" method="GET" target="_blank">
            <center> Do you want to print receipt ? </center>
            <br>
            <br>
            <input type="hidden" id="itemcode" name="id" class="search-input">

            <center> 
                <button type="submit" class="checkout-button" id="printReceiptButton"> Proceed </button>
                <br>
                <br>
                <center> Press " Esc " to Cancel Receipt </center>
            </center>
        </form>
    </div>
</div>




<div id="success-overlay" class="success-overlay" style="display: none;">
     <div class="success-overlay-content">
      <center>
         Purchased Successfully <br>
         <img src="../img/dark-success.gif" alt="Success Image">
      </center>
       
    </div>
</div>






<div id="cart-overlay" class="cart-overlay" style="display: none;">
     <div class="cart-overlay-content">
      <center>
         Item Added Successfully <br>
         <img src="../img/list_completed.gif" alt="Success Image">
      </center>
       
    </div>
</div>





<div id="void-overlay" class="void-overlay" style="display: none;">

     <div class="void-overlay-content">
      <center>
          Void Successfully! <br>
         Note: This process will be sent to admin. Your verification are needed.   <br>
         <img src="../img/list_completed.gif" alt="Success Image">
      </center>
       <button class="checkout-button" id="errorcheck" onclick="voidhide();"> Ok </button>
    </div>
</div>





<div id="cart-error" class="cart-error" style="display: none;">
     <div class="cart-error-content">
    
      <center>
         Note: Make sure Transaction and Customer are not empty
         <br>

         <img src="../img/error.gif" alt="Success Image">
<br>
<button class="checkout-button" id="errorcheck" onclick="errorhide();"> Ok </button>

      </center>
       
    </div>
</div>









<!-- Your existing HTML code -->
<br>
<span class="limit-span">Note: Table is limited for 15 products only. Press " Show List " to see them. 
<br>
<center><div style="height: 1px; width: 90%; background-color: white;"></div></center>
<br>
</span> <button class = "show-button" id="showOverlayCartBtn">Show List</button>
<br>
<br>

<center><div style="height: 1px; width: 90%; background-color: white;"></div></center>




<div id="overlay" class="overlay" style="display: none;">
  <div id="overlay-content" class="overlay-content">
    <input type="text" id="searchInput" class="search-input-pick" placeholder="Search...">

    <br>
    <hr>
    <br>
    <table id="data-table">
      <thead>
        <tr>
        <th>Itemcode</th>
          <th>Product</th>
          <th>Available Stock</th>
          <th>Selling Price</th>
        </tr>
      </thead>
      <tbody><!-- Add the opening tbody tag -->
        <!-- Table rows will be dynamically added here -->
      </tbody>
    </table>
  </div>
</div>






    <div id="overlaycart2" class="overlaycart2" style="display: none;">
        <div id="overlaycart-content2" class="overlaycart-content2">
          

     <input  class="search-input"   type="text" id = "itemscode1" readonly>



        <center>  <button class = "pos-button" onclick="discountpercent(event);"> Apply </button> Discount (%):  <input  class="search-input"  id="data011" type="number"></center>
        <br>
        <center>  <button class = "pos-button" onclick="discountprice(event);"> Apply </button> Discount (P): <input class="search-input" id="data022" type="text"></center>
              <br>
        <center> 
         <button class = "pos-button" onclick="voiditems1();"> Apply </button> 
         Void item(s): <input class="search-input" id="void1" value = "1" type="number">
       </center>



               <br>
        
        <center>  <button id = "buttonvoid"class="checkout-button" > Close </button>  </center>


        </div>
      </div>









  <div id="overlaycart3" class="overlaycart3" style="display: none;">
        <div id="overlaycart-content3" class="overlaycart-content3">
          

          <input class="search-input" type="text" id="itemscode2" readonly>

        <center>  <button class = "pos-button" onclick="discountpercent(event);" > Apply </button> Discount (%):  <input  class="search-input"  id="data011" type="number"></center>
        <br>
        <center>  <button class = "pos-button" onclick="discountprice(event);" > Apply </button> Discount (P): <input class="search-input" id="data022" type="text"></center>
              <br>
        <center>
        <button class="pos-button" onclick="voiditems2();">Apply</button>
        Void item(s): <input class="search-input" id="void2" value="1" type="number">
        </center>

               <br>

               <input  type="hidden" id="itemcode01" class="search-input">

        <center>  <button id = "buttonvoid" class="checkout-button" > Close </button>  </center>


        </div>
      </div>













<div id="overlaycart" class="overlaycart" style="display: none;">
  <div id="overlaycart-content" class="overlaycart-content">
    <input type="text" id="searchInput" class="search-input-pick" placeholder="Search...">

    <br>
    <hr>
    <br>
    <table id="table-list">
      <thead>
      <tr>
      <th>Itemcode</th>
      <th>Description</th>
      <th>Qty</th>
      <th>Unit Price</th>
      <th>Total</th>
       <th>Dicount</th>
    </tr>
      </thead>
      <tbody><!-- Add the opening tbody tag -->
        <!-- Table rows will be dynamically added here -->
      </tbody>
    </table>
  </div>
</div>







<script>
document.getElementById('showOverlayCartBtn').addEventListener('click', function() {
  document.getElementById('overlaycart').style.display = 'block';
});



</script>







<form id="purchase-form">
    <div id="overlay1" class="overlay">
        <div id="overlay1-content" class="overlay-content">
            Product Info: <hr> <input name="productname" class="text-info" id="data2" readonly><hr> <br>
            Available Stock: <hr> <input id="data3" class="text-info" value="1" readonly><hr> <br>
            Price: <hr> <input name="price" class="text-info" id="data4" readonly><hr> <br>
            Sellingprice: <hr> <input name="total" class="text-info" id="sellingprice" readonly><hr> <br>
            <input type="hidden" name="itemcode" class="text-info" id="data1" readonly> <br>
            <input type="hidden" class="text-info" id="data3" readonly> <br>
            <input type="hidden" name="casher" class="text-info" value="<?php echo $fullname; ?>" readonly> <br>
            <input type="hidden" class="text-info" name="trans" id="trans2" readonly> <br>
             <input type="hidden" class="text-info" name="customer"  id="customer2" readonly> <br>






            <center>
                <label for="quantity">Quantity:</label>
                <div>
                    <button type="button" id="decrement">-</button>
                    <input type="text" id="quantity" name="quantity" class="quantity-label" value="1" min="1" readonly>
                    <button type="button" id="increment">+</button>
                </div>
                <br>
                <hr>
                <br>
                <button type="submit" class="checkout-button">Purchase</button>
            </center>
        </div>
    </div>
</form>









<form id="purchase-form">
    <div id="overlaydiscount" class="overlay">
        <div id="overlay1-content" class="overlay-content">
            Product Info: <hr> <input name="productname" class="text-info" id="data2" readonly><hr> <br>
            Available Stock: <hr> <input id="presentquantity" class="text-info"  readonly><hr> <br>
            Price: <hr> <input name="price" class="text-info" id="data4" readonly><hr> <br>
            Sellingprice: <hr> <input name="total" class="text-info" id="sellingprice" readonly><hr> <br>
            <input type="hidden" name="itemcode" class="text-info" id="data1" readonly> <br>
            <input type="hidden" class="text-info" id="data3" readonly> <br>
            <input type="hidden" name="casher" class="text-info" value="<?php echo $fullname; ?>" readonly> <br>
            <input type="hidden" class="text-info" name="trans" id="trans2" readonly> <br>
            <input type="hidden" class="text-info" name="customer"  id="customer2" readonly> <br>






            <center>
                <label for="quantity">Quantity:</label>
                <div>
                    <button type="button" id="decrement">-</button>
                    <input type="text" id="quantity" name="quantity" class="quantity-label" value="1" min="1" readonly>
                    <button type="button" id="increment">+</button>
                </div>
                <br>
                <hr>
                <br>
                <button type="submit" class="checkout-button" id="add-to-cart">Purchase</button>
            </center>
        </div>
    </div>
</form>







<script>


function readonlyinput() {
// Clear the value of input field with ID trans1
    $('#trans1').prop('readonly', true); // Make input field with ID trans1 readonly
}

    document.getElementById("purchase-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission
    
        // Gather form data
        var formData = new FormData(this);
    
        // Send form data to the server using AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "purchased.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                var response = JSON.parse(xhr.responseText);
                // Handle response from the server
                if (response.success) {
                   cartadded();
                    readonlyinput();
                    
                    // Hide overlays
                    document.getElementById('overlay1').style.display = 'none';
                    document.getElementById('overlay').style.display = 'none';
                } else {
                    alert("Error: " + response.message);
                }
            }
        };
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(new URLSearchParams(formData).toString());
    });

</script>


<script>
$(document).ready(function() {
    // Function to fetch data from PHP script via AJAX
    function fetchData() {
        $.ajax({
            url: 'total.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                // Update input fields with retrieved data
                var totalAmount = (data.total_amount !== null) ? parseFloat(data.total_amount).toFixed(2) : "0.00";
                var totalQty = (data.total_qty !== null) ? parseInt(data.total_qty) : 0;


                $('#total').text(" Php " + totalAmount);
                $('#amount').text(" Php " + totalAmount);
                $('#qty').text(totalQty);
            },
            error: function(xhr, status, error) {
                console.error("Error fetching data:", error);
            }
        });
    }

    // Call fetchData function initially when the page loads
    fetchData();

    // Set interval to periodically fetch data (every 5 seconds in this example)
    setInterval(fetchData, 2000); // Adjust the interval time as needed (in milliseconds)
});
</script>





    <br>
   <br>
   
    </div>





    <div class="right-container">
        <!-- Content for right container goes here -->
<div class="basic"> Trans. No: <input type = "text" id="trans1" class="search-input-pick">   </div>


<br>
<div class="basic"> Customer:
    <div class="search-dropdown">
        <input type="text" id="customer1" class="search-input-pick" list="customerOptions" placeholder="Type or select">
        <datalist id="customerOptions">
            <option value="WALK-IN">
            <option value="Option 2">
            <option value="Option 3">
        </datalist>
    </div>
</div>




<br>

<div class="basic">
<div style="display: flex; justify-content: space-between; margin-left: 5px;"> 

<span>Items No:</span>
<span id = "qty" readonly></span>

</div>
</div>
<br>


<div class="navbasic"> 
<br>

<div style="display: flex; justify-content: space-between; margin-left: 5px;">
    <span>Subtotal:</span>
    <span id = "total" readonly></span>
</div>

<div style="display: flex; justify-content: space-between; margin-left: 5px;">
    <span>Tax 0%:</span>
    <span>Php 0.00</span>
</div>
<div style="display: flex; justify-content: space-between; margin-left: 5px;">
    <span>Discount 0%:</span>
    <span>Php 0.00</span>
</div>

  <br>

<center><div style="height: 1px; width: 90%; background-color: white;"></div></center>

<div class="navbasic02"> 

  <div style="display: flex; justify-content: space-between; margin-left: 5px;">
    <span class="total">Amount:</span>
    <span class="total" id = "amount" readonly></span>
</div>




</div>
<br>
<br>
<br>


<br>
<br>
<br>
<br>
<br>
<hr>
<br>
<center> Payment Method </center>
<br>
<div class="button-container">
    <button class="inline-button"><i class="fas fa-money-bill"></i></button>
    <button class="inline-button"> <i class="fas fa-credit-card"></i> </button>
    <button class="inline-button"><i class="fas fa-wallet"></i> </button>
</div>

<div class="button-container">
    <center>
        <span>Cash</span>
        <span> Debit Card</span>
        <span> E-Wallet</span>
    </center>
</div>
<br>
<br>

<center>
    <input type="button"  class="checkout-button" id="checkout" value="CHECK OUT" onclick="checkout()">
</center>

</div>







  </section>


<script>
    // Get references to the input elements
    const trans1 = document.getElementById('trans1');
    const trans2 = document.getElementById('trans2');

    const customer1 = document.getElementById('customer1');
    const customer2 = document.getElementById('customer2');

    // Add event listener to the first transaction input to mirror its value to the second transaction input
    trans1.addEventListener('input', function() {
        const inputValue = this.value;
        trans2.value = inputValue;
    });

    // Add event listener to the dropdown options for customer1 to update customer2
    const dropdownOptions = document.querySelectorAll('#customer1 .search-dropdown-content a');
    dropdownOptions.forEach(option => {
        option.addEventListener('mousedown', function(event) {
            event.preventDefault();
            const selectedValue = this.getAttribute('data-value');
            customer1.value = selectedValue;
            customer2.value = selectedValue;
        });
    });

    // Add event listener to the customer1 input for manual input update to customer2
    customer1.addEventListener('input', function() {
        const inputValue = this.value;
        customer2.value = inputValue;
    });

    // Add event listener to the customer1 input for dropdown selection update to customer2
    customer1.addEventListener('input', function() {
        const selectedOption = document.querySelector('#customer1 .search-dropdown-content a[data-value="' + this.value + '"]');
        if (selectedOption) {
            const selectedValue = selectedOption.getAttribute('data-value');
            customer2.value = selectedValue;
        }
    });
</script>



</body>
</html>
