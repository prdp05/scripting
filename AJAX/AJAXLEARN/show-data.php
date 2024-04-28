<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>PHP with AJAX</h1>
            </td>
        </tr>
        <tr>
            <td id="table-load">
                <input type="button" id="load-button" class="btn btn-primary" value="Load Data">
            </td>
        </tr>
        <td id="table-data">
            <table border="1" width="100%" cellspacing="0" cellpadding="10px">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                </tr>
                <tr>
                    <td aline="1">1</td>
                    <td>Pradeep Banjara</td>
                </tr>
            </table>
        </td>

    </table>

    <script type="text/javascript" src="../jq.js"></script>
    <script>
        $(document).ready(function(){
            $("#load-button").on("click", function(e){
                $.ajax({
                    url: "ajax-load.php",
                    type: "POST",
                    success: function(Data){
                        $("#table-data").html(Data);
                    }
                })
            })
        })

    </script>
</body>

</html>