<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET/POST</title>
</head>
<body>
    <form action="" id="myForm">
        <input type="text" name="uname" id="uname" placeholder="Enter your first name">
        <br><br>
        <input type="text" name="surname" id="surname" placeholder="Enter your last name">
        <br><br>
        <input type="button" id="btn" value="submit">
        <br><br>
        <h2 id="result"></h2>
    </form>
    
<script src="jquery.js"></script>
<script>
    $(document).ready(function(){
        $("#btn").click(function(){
            alert("I clicked in here");
            var uname = $("#uname").val();
            var surname = $("#surname").val();

            if(uname == "" || surname == ""){
                alert("All filds are required");
            }
            else{
                // $.get{
                //     "get-post.php",
                //     // {uname:uname, surname:surname},
                //     $("#myForm").serialize();
                //     function(responseTxt, statusTxt, xhr){
                //         $("#result").text(responseTxt);

                //     }
                // }
                
                // OR..................> 

                $.ajax({
                    url: "get-post.php",
                    type: "POST",
                    data: {uname:uname, surname:surname},
                    success:function(result, status, xhr){
                        $.("#result").text(result);
                        alert(status);
                        alert(xhr);

                    }

                });
            }
        });
    });
</script>
</body>
</html>