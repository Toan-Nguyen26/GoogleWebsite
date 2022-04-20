# GoogleWebsite

This website based on the normal Google website , it has the base component like logo and search function . After the user search it send the user to another page with all the result that match the keyword the user put in

# Technology

- This webpage use a web crawler that I made in PHP and send the data to a MySql Database 
- The database with over 10000 web pages then connected to Elasticsearch , a tool to speed up searching process to under 3 seconds
- After that, Elasticsearch connected to the webpage under a JSON and through this file GoogleWebsite/google/app/Http/Controllers/detail.php so that the page 
- The page then use the database for all the searching purposes

# Note

The website was canceled and removed due to VM on Google Cloud expired on Ocotber, 2021.
