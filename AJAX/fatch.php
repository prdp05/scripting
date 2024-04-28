<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatch Data in Ajax</title>
    <script src="jq.js"></script>
<script>
$(document).ready(function() {
    $('#loadDataBtn').click(function(e) {
        $.ajax({
        url: 'fatchData.php',
        type: 'GET',
   //   dataType: 'json',
     success: function(response) {  
     var table = '<table>';
     table += '<tr><th>ID</th><th>NAme</th></tr>';
     for (var i = 0; i < response.length; i++) {
     table += '<tr><td>' + response[i].ID + '</td><td>' 
     + response[i].NAME + '</td></tr>';
          }
          table += '</table>';
          $('#data').html(table);
           },
         error: function(xhr, status, error) {    
        //xhr parameter represents the XMLHttpRequest object
       document.write(error);
        }
       });
       });
      });
    </script>
</head>

<body>
    <h1>AJAX EXAMPLE</h1>
    <button id="loadDataBtn">Load Data</button>
    <div id="data"></div>
</body>
</html>
