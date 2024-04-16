

    $(document).ready(function(){
        // Function to fetch data and update table
        function fetchDataAndUpdateTable() {
          $.ajax({
            url: 'cart.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
              // Clear existing table rows
              $('#table-cart  tbody').empty();
      
              // Populate table with new data
              $.each(data, function(index, row) {
                var tr = $('<tr>');
                $.each(row, function(key, value) {
                  tr.append($('<td>').text(value));
                });
                $('#table-cart tbody').append(tr);
              });
            },
            error: function(xhr, status, error) {
              console.error('Error fetching data:', error);
            }
          });
        }
      
        // Initial fetch and table update
        fetchDataAndUpdateTable();
      
        // Set interval to fetch data and update table every 5 seconds
        setInterval(fetchDataAndUpdateTable, 5000);
      });







      $(document).ready(function(){
        // Function to fetch data and update table
        function fetchDataAndUpdateTable() {
          $.ajax({
            url: 'cartlist.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
              // Clear existing table rows
              $('#data-table-cart  tbody').empty();
      
              // Populate table with new data
              $.each(data, function(index, row) {
                var tr = $('<tr>');
                $.each(row, function(key, value) {
                  tr.append($('<td>').text(value));
                });
                $('#data-table-cart tbody').append(tr);
              });
            },
            error: function(xhr, status, error) {
              console.error('Error fetching data:', error);
            }
          });
        }
      
        // Initial fetch and table update
        fetchDataAndUpdateTable();
      
        // Set interval to fetch data and update table every 5 seconds
        setInterval(fetchDataAndUpdateTable, 5000);
      });