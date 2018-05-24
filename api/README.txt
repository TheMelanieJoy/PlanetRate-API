Installation

Steps to reproduce:
1. Copy 'api' folder into the WAMP/LAMP www root directory
2. Launch http://localhost/api/

Expected output:
The page contains two forms. The first one handles the first call (RatingAverage).
The second form handles the second call (Reviews).

-----------------------------------

RatingAverage

Steps to reproduce:
1. From the default page, select the text field under 'Rating Average'.
2. Input '1' and click the 'Get Rating' button. 

Expected output:
The user is redirected to a new page (http://localhost/api/ratingaverage/json/?id=1),
where the item name, rating, and rating count are diplayed for the corresponding item 
id. In this case, the page should display the following:

Item name: Montreal Canadiens
Average item rating: 5.7
Rating count: 3

-----------------------------------

Reviews

Steps to reproduce:
1. From the default page, select the text field under 'Reviews'.
2. Input '1' and click the 'Get Reviews' button. 

Expected output:
The user is redirected to a new page (http://localhost/api/review/json/?id=1), where 
the item name, rating, and rating count are diplayed for the corresponding item id. 
In this case, the page should display the 3 reviews for the item "Montreal Canadiens".