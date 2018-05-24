function ratingAverage(id) {
    jQuery.getJSON("/api/src/json/item.json", function( data ) {
        var searchedItem;
        var items = data.item;
        for (var i = 0; i < items.length; i++) {
            if (items[i].id == id)
                searchedItem = items[i];
        }

        document.getElementById("itemName").innerHTML = searchedItem.name;
        document.getElementById("itemRating").innerHTML = searchedItem.average;                           document.getElementById("ratingCount").innerHTML = searchedItem.ratingsCount;
    });
}

function reviews(id) {
    jQuery.getJSON("/api/src/json/item.json", function( data ) {
        var searchedItem;
        var items = data.item;
        for (var i = 0; i < items.length; i++) {
            if (items[i].id == id) {
                searchedItem = items[i];
            }
        }
        document.getElementById("itemName").innerHTML = searchedItem.name;
        for(var reviewCounter in searchedItem.reviews) {
            var reviewId = "review-" + searchedItem.reviews[reviewCounter].id;
            $('#reviews').append("<div id='" + reviewId + "' class='review'></div>");

            $(document.createElement("div"))
                .addClass("reviewedBy")
                .html(searchedItem.reviews[reviewCounter].reviewdBy)
                .appendTo('#' + reviewId);

            $(document.createElement("div"))
                .addClass("average")
                .html(searchedItem.reviews[reviewCounter].average)
                .appendTo('#' + reviewId);

            $(document.createElement("div"))
                .addClass("title")
                .html(searchedItem.reviews[reviewCounter].title)
                .appendTo('#' + reviewId);

                            $(document.createElement("div"))
                .addClass("createdDate")
                .html("<em>Reviewed on " + searchedItem.reviews[reviewCounter].createdDate + "</em>")
                .appendTo('#' + reviewId);

            $(document.createElement("div"))
                .addClass("comment")
                .html("Review: " + searchedItem.reviews[reviewCounter].comment)
                .appendTo('#' + reviewId);
        }
    });
}