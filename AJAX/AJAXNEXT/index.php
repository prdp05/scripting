<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get data from ajax</title>
</head>
<body>

<div id="getData">
    <h1>Welcome to jquery ajax</h1>
</div>
<br>
<input type="button" value="Click to get data" id="btn">

<script type="text/javascript" src="../jq.js"></script> 
<script>
    $(document).ready(function(){
        $("#btn").click(function(){
            $("#getData").load("dta.html", function(responseTxt, statusTxt, xhr){
                alert("Loding Completed");
                alert(responseTxt); // store content to selected file
                alert(statusTxt); // success or error
                alert(xhr); // request/response object 
            });
        });
    });
</script>

</body>
</html>