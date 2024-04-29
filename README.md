# RowdyBooks
## Overview

RowdyBooks is an online bookstore that offers a wide range of books across various categories. This platform allows users to shop for new books, participate in a trade market, and manage their user profiles. The website is built using PHP, HTML, CSS, and JavaScript.
## Features

- **User Authentication**: Supports session-based user authentication.
- **Dynamic Book Displays**: Books are dynamically displayed with details fetched from a database.
- **Category and Recently Viewed Filters**: Users can browse books by categories or see their recently viewed books.
- **Shopping Cart**: Users can add books to a shopping cart for purchase.


### Download the project zip file
Follow these simple steps to download the project zip file and set up the app.
1. Click `RowdyBooks.zip` from our project folder.
2. Go to https://www.mamp.info/en/windows/ and download MAMP.
3. Move the zip file to MAMP\htdocs in your file explorer.
4. Unzip the file.
5. Start MAMP and click Start Server if it doesn’t automatically start.
6. Once the server is running navigate to http://localhost:8888/MAMP/ in your web browser.
7. Scroll down to the MySQL section and select phpMyAdmin 
8. On the left side of the screen click on New to create a new database.
9. Enter the RowdyBooksData as the name of the database and click Create.
9. After creating the new database, select Import at the top of the screen.
10. Click Choose File and select the RowdyBooksData.sql file from the zip file.
11. At the bottom right of the screen click Go to import the database.
12. Go to https://code.visualstudio.com/ to download Visual Studio.
13. Open the dbconnect.php file in the HTML folder.
14. Comment out the code at the top of the file under the Azure Virtual Machine section.
15. Uncomment the code at the bottom of the file under the Local Machine section. Make sure the connection parameters in the file match the ones you see at http://localhost:8888/MAMP/ under the Examples section on the page.
16. Navigate to http://localhost:8888/RowdyBooks-main/html/ to see the website.
___
## Disclaimer
The email verification will not send an email with a code when run locally, however, the code will be generated and stored in the verify table of the database. Entering the code from the database will allow you to verify your account when running locally.
___

## Authors
Blaine Byrd 

Diego Aguirre

Kaleb Phillips

Loren Isenhour 
___
