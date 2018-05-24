<!DOCTYPE html>
<html>
<body>
    <p>Item name: <span id="itemName"></span></p>
    <p>Average item rating: <span id="itemRating"></span></p>
    <p>Rating count: <span id="ratingCount"></span></p>
    
    <script type='text/javascript' src='/api/src/js/json2.js'></script>
    <script type='text/javascript' src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src='/api/src/js/main.js'></script>
    <script>
        jQuery.get("/api", function( id ) {
            ratingAverage(<?php echo $_GET["id"]; ?>)
        });
    </script>
</body>
</html>