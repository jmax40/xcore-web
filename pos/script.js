
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.search-input');
    const overlay = document.getElementById('overlay');
    const overlaycart = document.getElementById('overlaycart');
    const table = document.getElementById('data-table');
    const data1 = document.getElementById('data1');
    const data2 = document.getElementById('data2');
    const data3 = document.getElementById('data3');
    const data4 = document.getElementById('data4');
     const sellingprice = document.getElementById('sellingprice');
   
// Function to send AJAX request to the server
function fetchDataFromServer(searchTerm) {
    // Show overlay first
    overlay.style.display = 'block';
    
    // Send AJAX request
    // Replace 'your_server_script.php' with the actual URL of your server-side script
    fetch('process.php?search=' + encodeURIComponent(searchTerm))
        .then(response => response.json())
        .then(data => {
            // Update the table with the received data
            updateTable(data);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}


// Function to update the table with the received data
function updateTable(data) {
    if (data && data.length > 0) { // Check if data is available
        // Clear existing table rows except for the table header
        while (table.rows.length > 1) {
            table.deleteRow(1);
        }

        // Populate table with new data
        data.forEach(rowData => {
            const row = document.createElement('tr');
            rowData.forEach(cellData => {
                const cell = document.createElement('td');
                cell.textContent = cellData;
                row.appendChild(cell);
            });
            table.appendChild(row);
        });
    } else {
        console.log('No data available or error occurred while fetching data.');
    }
}






// Show overlay and fetch data when pressing Enter in search input
// Show overlay and fetch data when pressing Enter in search input
searchInput.addEventListener('keyup', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        const transInput = document.getElementById('trans2');
        const customerInput = document.getElementById('customer2');
        
        // Check if both trans2 and customer2 are not empty
        if (transInput.value.trim() !== '' && customerInput.value.trim() !== '') {
            const searchTerm = searchInput.value.trim();
            if (searchTerm !== '') {
                fetchDataFromServer(searchTerm);
            }
        } else {
            // If either trans2 or customer2 is empty, show alert
            alert(" Note: Transaction Number and Customer are Empty. ");
        }
    }
});





    // Hide overlay when clicking outside the form
    overlay.addEventListener('click', function(event) {
        if (event.target === overlay) {
            overlay.style.display = 'none';
       

        }
    });







    // Hide overlay when pressing Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            overlay.style.display = 'none';
            overlay1.style.display = 'none';
            overlaycart.style.display = 'none';
            overlaycart2.style.display = 'none';
             const receiptOverlay = document.getElementById('receipt-overlay');
             receiptOverlay.style.display = 'none'; // Hide the overlay
        }
    });




    
// Overlay data on table cell click
table.addEventListener('click', function(event) {
  const target = event.target;
  if (target.tagName === 'TD') {
    // Assign the content of each clicked cell to the respective input field
    const cell1Content = table.rows[target.parentNode.rowIndex].cells[0].textContent.trim(); // Get content of the first cell in the clicked row
    const cell2Content = table.rows[target.parentNode.rowIndex].cells[1].textContent.trim(); // Get content of the second cell in the clicked row
    const cell3Content = table.rows[target.parentNode.rowIndex].cells[2].textContent.trim(); // Get content of the third cell in the clicked row
    const cell4Content = table.rows[target.parentNode.rowIndex].cells[3].textContent.trim(); 

    // Hide overlay1 if cell3Content is zero
    if (parseFloat(cell3Content) === 0) {
      overlay1.style.display = 'none';
    } else {
      // Show overlay1
      overlay1.style.display = 'block';
      updatePrice();

      // Assign the content to data1, data2, data3, and data4
      data1.value = cell1Content;
      data2.value = cell2Content;
      data3.value = cell3Content;
      data4.value = cell4Content;
      sellingprice.value = cell4Content;

      // Additional code for objective
      // For example, you might want to change the background color of the clicked cell
    }
  }
});


// JavaScript
const quantityInput = document.getElementById('quantity');
const incrementButton = document.getElementById('increment');
const decrementButton = document.getElementById('decrement');
const priceInput = document.getElementById('data4');
const sellingpriceInput = document.getElementById('sellingprice');
const presentquantity = document.getElementById('presentquantity');
// Function to update the price based on quantity and selling price
// Function to update the price based on quantity and selling price
// Function to update the price based on quantity and selling price
function updatePrice() {
    const quantity = parseInt(quantityInput.value);
    const price = parseFloat(priceInput.value);
    const totalPrice = quantity * price;
    return totalPrice.toFixed(2);
}

// Event listener for the increment button
incrementButton.addEventListener('click', function () {
    const currentQuantity = parseInt(quantityInput.value);
    quantityInput.value = currentQuantity + 1;
    presentquantity.textContent = '+' + quantityInput.value; // Update presentquantity element with '+'
    const totalPrice = updatePrice();
    sellingpriceInput.value = totalPrice; // Update the displayed total price in the sellingprice input field
});

// Event listener for the decrement button
decrementButton.addEventListener('click', function () {
    const currentQuantity = parseInt(quantityInput.value);
    if (currentQuantity > 1) {
        quantityInput.value = currentQuantity - 1;
        presentquantity.textContent = '-' + quantityInput.value; // Update presentquantity element with '-'
        const totalPrice = updatePrice();
        sellingpriceInput.value = totalPrice; // Update the displayed total price in the sellingprice input field
    }
});

// Event listener for the "Add to Cart" button
document.getElementById('add-to-cart').addEventListener('click', function () {
    const totalPrice = updatePrice();
    sellingpriceInput.value = totalPrice; // Update the displayed total price in the sellingprice input field
});

// Initial call to update the price
updatePrice();



});






    // JavaScript to toggle dropdown content
    document.addEventListener('DOMContentLoaded', function () {
        let dropdowns = document.querySelectorAll('.search-dropdown');

        dropdowns.forEach(function (dropdown) {
            let input = dropdown.querySelector('.search-input-pick');
            let dropdownContent = dropdown.querySelector('.search-dropdown-content');

            input.addEventListener('focus', function () {
                dropdownContent.style.display = 'block';
            });

            input.addEventListener('blur', function () {
                setTimeout(function () {
                    dropdownContent.style.display = 'none';
                }, 200); // Delay closing dropdown to allow click on dropdown content
            });

            dropdownContent.addEventListener('click', function (event) {
                input.value = event.target.textContent;
                dropdownContent.style.display = 'none';
            });
        });
    });





document.addEventListener('DOMContentLoaded', function() {
    // Event listener for toggling menu items
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }

    // Event listener for toggling the sidebar menu
    let sidebarBtn = document.querySelector(".bx-menu");
    if (sidebarBtn) {
        let sidebar = document.querySelector(".sidebar");
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    } else {
        console.error('Error: The sidebar menu button was not found.');
    }
});









document.addEventListener('DOMContentLoaded', function() {
    const specificTable = document.getElementById('table-cart'); // Get the specific table element
  const closeButton = document.querySelector('#overlaycart2 .checkout-button'); // Get the close button inside the overlay

    // Event listener to show overlaycart2 when clicking on a cell within the specific table
    specificTable.addEventListener('click', function(event) {
        const target = event.target;
        if (target.tagName === 'TD') {
            // Show overlaycart2
            overlaycart2.style.display = 'block';

            // Get content of the clicked cell
            const cart01 = target.parentNode.cells[0].textContent.trim(); // Get content of the first cell in the clicked row
    // Get content of the fourth cell in the clicked row

            // Assign the content to respective overlay elements
            datacart01.value = cart01;
         // Assuming selling price is also set to cell4Content, you may adjust this as needed
        }
    });




    closeButton.addEventListener('click', function() {
        overlaycart2.style.display = 'none'; // Hide the overlay
    });



});






  document.addEventListener('DOMContentLoaded', function() {
        const input1 = document.getElementById('data011');
        const input2 = document.getElementById('data022');

        input1.addEventListener('input', function() {
            input2.disabled = this.value !== '';
        });

        input2.addEventListener('input', function() {
            input1.disabled = this.value !== '';
        });
    });







// Function to reset input fields to empty
function resetInputs() {
    $('#trans1').val(''); // Clear the value of input field with ID trans1
    $('#customer1').val(''); // Clear the value of input field with ID customer1
    // Remove readonly attribute if previously set
    $('#trans1').prop('readonly', false);
    $('#customer1').prop('readonly', false);
}


$(document).ready(function() {
    // Define the checkout function outside of the $(document).ready() function
    function checkout() {
        $.ajax({
            url: 'order.php', // Verify that this path is correct
            type: 'POST',
            data: {
                // If you need to send any data along with the request, you can include it here
            },
            success: function(response) {
                // Handle success response
                console.log(response);
                
                success();
          
               
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
                alert("Error purchasing: " + xhr.responseText);
            }
        });
    }

    // Bind the checkout function to the click event of the button with ID checkout
    $('#checkout').click(function() {
        checkout();
    });
});







function showReceipt() {
    const receiptOverlay = document.getElementById('receipt-overlay'); // Get the receipt overlay element

    // Get the value of the input field by its ID
    const transNo = document.getElementById('trans1').value;

    // Paste the value into the input field with ID "itemcode"
    document.getElementById('itemcode').value = transNo;

    // Display the receipt overlay
    receiptOverlay.style.display = 'block';
}





 function success() {
    const receiptOverlay = document.getElementById('success-overlay'); // Corrected ID
    receiptOverlay.style.display = 'block'; // Display the receipt overlay

    // Hide the overlay after 3 seconds
    setTimeout(function() {
        receiptOverlay.style.display = 'none';
          showReceipt();
    }, 3000); // 3000 milliseconds = 3 seconds
}






 function cartadded() {
    const cartoverlay= document.getElementById('cart-overlay'); // Corrected ID
   cartoverlay.style.display = 'block'; // Display the receipt overlay

    // Hide the overlay after 3 seconds
    setTimeout(function() {
        cartoverlay.style.display = 'none';
          
    }, 2000); // 3000 milliseconds = 3 seconds
}


 function success() {
    const receiptOverlay = document.getElementById('success-overlay'); // Corrected ID
    receiptOverlay.style.display = 'block'; // Display the receipt overlay

    // Hide the overlay after 3 seconds
    setTimeout(function() {
        receiptOverlay.style.display = 'none';
          showReceipt();
            resetInputs();
    }, 3000); // 3000 milliseconds = 3 seconds
}
