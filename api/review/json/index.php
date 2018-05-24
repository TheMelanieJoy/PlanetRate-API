<!DOCTYPE html>
<html>
<head>
    <style>
        .review {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h2 id="itemName"></h2>
    <h3>Reviews</h3>
    <div id="reviews"></div>
    
    <script type='text/javascript' src='/api/src/js/json2.js'></script>
    <script type='text/javascript' src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src='/api/src/js/main.js'></script>
    <script>
        jQuery.get("/api", function( id ) {
            reviews(<?php echo $_GET["id"]; ?>)
        });
    </script>
</body>
</html>
