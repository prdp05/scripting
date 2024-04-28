<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <script src="jq.js"></script>
    <script>
        // HIDE AND SHOW ELEMENT -------------------------------------->
        $(document).ready(function () {
            $("#hide").click(function () {
                $("#paragraph").hide(); // to hide the element
                $("#heading").hide();
            });
            $("#show").click(function () {
                $("p").show();
                $("h1").show(); // To show the element
            });
            
            // TO hide only select element
            $("#hideMe").click(function () {
                $("#par").hide(); // TO hide only selected element
                $(".par1").hide();
            });
            $(".showMe").click(function () {
                $(".par1").show(); // TO show only selected element
                $("#par").show();
            });
            // to hide image
            $(".imgHide").click(function () {
                $("img").hide(); // TO hide  selected image
            });
            $(".imgShow").click(function () {
                $("img").show(); // TO show  selected image
            });
        });
    </script>
</head>

<body>
    <button id="hide">hide</button>
    <button id="show">show</button><br><br>

    <button id="hideMe">hide me</button>
    <button class="showMe">show me</button><br><br>

    <button class="imgHide">Hide Image</button>
    <button class="imgShow">Show Image</button><br><br>

    <!-- for hide and show element -->
    <p id="paragraph">Hello hide me by clicking</p>
    <h1 id="heading">Hello hide me by clicking</h1>

    <!-- for hide and show only selected element -->
    <h3 id="par">This is another heading. </h3>
    <h1 class="par1">This is next heading class. </h1>
    
    <!-- for hide and show image -->
    <img src="./IMAGE/hideUnhide.png" alt="">

</body>

</html>