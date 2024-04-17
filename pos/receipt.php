<?php
// Include TCPDF library
require_once 'TCPDF-main/tcpdf.php';

// Collect form data
$name = isset($_POST['itemcode']) ? $_POST['itemcode'] : '';



// Format dates
$formattedDate = !empty($date) ? date("F j, Y", strtotime($date)) : '';
$formattedDate2 = !empty($date2) ? date("F j, Y", strtotime($date2)) : '';
$formattedDate3 = !empty($date) ? date("n-j-Y", strtotime($date)) : '';

// Create HTML content
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medical Certification</title>
    <style>
        .info {
            font-weight: bold;
            font-size: 20px;
              text-align: justify; 
        }

        .info02 {
            font-weight: bold;
            font-size: 20px; /* Adjust the font size as needed */
            display: inline-block; /* Make sure text is centered within the span */
            resize: both; /* Allow resizing */
            overflow: auto; /* Add scrollbars when needed */
            text-align: center;
            display: block;
        } 

        .info01 {
            font-size: 15px; /* Adjust the font size as needed */
           text-align: justify; 
        } 

        .bold {
            font-weight: bold;
            font-size: 15px; /* Adjust the font size as needed */
            display: inline-block; /* Change display to make it resizable */
            resize: both; /* Allow resizing */
            overflow: auto; /* Add scrollbars when needed */
        }  

        .paragraph {
            font-weight: bold;
            font-size: 13px;
            padding: none; /* Adjust the font size as needed */
        }  

 .date {
    text-align: right;
    font-weight: bold;
      font-size: 15px; 
}

 .starting {
      font-size: 15px; 
}

body {
    font-family: Courier, monospace; /* Use Courier font family */
    font-size: 1em; /* Set font size relative to the default font size */
}


 .date {
    text-align: right;
    font-weight: bold;
   
  



.tablecart {
    border-collapse: collapse; /* Collapse table borders */
    width: 100%; /* Set table width */
}


.tablecart td {
     padding: 8px; /* Add padding to table cells */
    text-align: center; /* Align text to the left within cells */
}




.tablecart th {
    border: 1px solid black; /* Add border to table cells */
    padding: 8px; /* Add padding to table cells */
    text-align: center; /* Align text to the left within cells */
}







/* Optional: Define specific widths for columns */
.tablecart th:nth-child(1){
    width: 30px;
}





/* Set width for specific table cells */
.tablecart td:nth-child(2) {
    width: 50px;
}

.tablecart td:nth-child(1) {
    width: 30px;
}




.container {
    text-align: right;
    margin-right: 300px;
}

.container2 {
    text-align: left;
    margin-right: 300px;
}


.thankyou {
    text-align: center;
}





    </style>
</head>


<body>

   <img src="../img/xcore.png" alt="Image Description" style="width: 600px; height: auto;">

<div class="container2">
TRANS.CODE: 001 <br>
POS CASHER: <br>
DATE/TIME: 01-02-2024   10:00 PM
  
    
    <hr>
</div>



   <table class="tablecart" >
        <thead>
            <tr>
          
                <th >Description</th>
                <th>Total</th>
            </tr>
        </thead>

  <tbody>
       
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>


              <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>

    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>

    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>

    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>

    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>
    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>
    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>
    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>
    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>
    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>
    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>
    <tr>
                <td > 2 x Itemdsad</td>
                <td>$40</td>
            </tr>
            <tr>
                <td > 2 x Itemdsadasdasdasdsadasdas</td>
                <td>$40</td>
            </tr>


        
            <!-- Add more rows as needed -->
        </tbody>
    </table>
<hr>
<div class="container">
    Amount:100.00 &nbsp;&nbsp;<br>
    Tax:1.00 &nbsp;&nbsp;<br>
    Discount:2.00 &nbsp;&nbsp;<br>
    No. Items:1 &nbsp;&nbsp;<br>
    
    <hr>
</div>
<br>


<div class="thankyou">
    Thank you, Come Again !!!
</div>

</body>
</html>';

// Initialize TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// Set document information
$pdf->SetCreator('Parcon Hospital');
$pdf->SetAuthor('Parcon Hospital');
$pdf->SetTitle('X-CORE receipt');
$pdf->SetSubject('Medical Certification');
$pdf->SetKeywords('Medical, Certification');

// Set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// Set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// Set margins
$pdf->SetMargins(5, 5, 5); // Adjust margins as needed
$pdf->SetAutoPageBreak(TRUE, 5); // Adjust as needed

// Add a page with customized dimensions
$pdf->AddPage('P', array(150,  80)); // Adjust width and height as needed

// Set font and font size for the content
$pdf->SetFont('helvetica', '', 10); // Adjust font and size as needed

// Write HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Output the generated PDF to the browser (inline display)
$pdf->Output(ucwords(strtolower($name)) . '.pdf', 'I');

?>