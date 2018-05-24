<!DOCTYPE html>
<html>
<body>
    <h2>Rating Average</h2>
    <form action="ratingaverage/json?">
        <label for="id">Item ID:</label>
        <input type="number" name="id" placeholder="Enter item ID">
        <input type="submit" value="Get Rating">
    </form>
    <h2>Reviews</h2>
    <form action="review/json?">
        <label for="id">Item ID:</label>
        <input type="number" name="id" placeholder="Enter item ID">
        <input type="submit" value="Get Reviews">
    </form>
    
    <script type='text/javascript' src='/api/src/js/json2.js'></script>
    <script type='text/javascript' src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script type='text/javascript' src='/api/src/js/main.js'></script>
</body>
</html>
