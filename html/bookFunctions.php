<?php
/**
 * File: bookFunctions.php
 * Description: Provides the functions for retrieving
 * the books to display on a page from the database,
 * adding bopoks to the cart, and removing them from the cart.
 * @author Kaleb Phillips
 */

// If the isbn of a book to add was passed in and the user is logged in
if (isset($_POST['add']) && isset($_POST['userid'])) {
    // Get the isbn of the book
    $isbn = $_POST['add'];
    // Get the id of the user
    $userid = $_POST['userid'];

    // Add the book to the cart
    addToCart($isbn, $userid);
 }

// If the isbn of a book to remove was passed in and the user is logged in
if (isset($_POST['remove']) && isset($_POST['userid'])) {
    // Get the isbn of the book
    $isbn = $_POST['remove'];
    // Get the id of the user
    $userid = $_POST['userid'];

    // Add the book to the cart
    removeFromCart($isbn, $userid);
 }

/**
 * Function: getBook
 * Description: Searches for a single book in the database
 * with a mathcing isbn and returns the row for that book.
 * @param isbn - the isbn of the book to return.
 * @return book - the book from the database with the isbn givin in the parameter.
 */
function getBook ($isbn) {
    require "dbconnect.php";
    $query = "SELECT * FROM books WHERE isbn = '$isbn'";
    $result = mysqli_query($connection, $query);
    $book = $result->fetch_assoc();
    // Return book
    return $book;
}

/**
 * Function: getBooks
 * Description: Searches for eight books in the database
 * with mathcing isbns and returns the rows for the books.
 * @param isbn1 - the isbn of the first book to return.
 * @param isbn2 - the isbn of the second book to return.
 * @param isbn3 - the isbn of the third book to return.
 * @param isbn4 - the isbn of the fourth book to return.
 * @param isbn5 - the isbn of the fifth book to return.
 * @param isbn6 - the isbn of the sixth book to return.
 * @param isbn7 - the isbn of the seventh book to return.
 * @param isbn8 - the isbn of the eighth book to return.
 * @return books - An array of books that match the isbn provided.
 */
function getBooks ($isbn1, $isbn2, $isbn3, $isbn4, $isbn5, $isbn6, $isbn7, $isbn8) {
    require "dbconnect.php";
    // List of books to retrieve from database
    $query = "SELECT * FROM books
    WHERE isbn = '$isbn1'
       OR isbn = '$isbn2'
       OR isbn = '$isbn3'
       OR isbn = '$isbn4'
       OR isbn = '$isbn5'
       OR isbn = '$isbn6'
       OR isbn = '$isbn7'
       OR isbn = '$isbn8'";
    $result = mysqli_query($connection, $query);

    // Get the first book
    $row = $result->fetch_assoc();
    $books = array($row);

    // Get the remaining books
    while ($row != NULL)
    {
        $row = $result->fetch_assoc();
        $books[] = $row;
    }
    // Return books
    return $books;
}

/**
 * Function: getCartBooks
 * Description: Searches the database
 * for books in a user's cart by using the id passed in.
 * @param id - the id of the user whose cart should be retrieved.
 * @return cart - An array of books from the cart that was retrieved.
 */
function getCartBooks ($id) {
    require "dbconnect.php";
    // Get the cart for this user
    $query = "SELECT * FROM Cart
    INNER JOIN books ON books.id_books = Cart.id_books
    WHERE userid = '$id'";
    $result = mysqli_query($connection, $query);

    // Check if the cart is empty
    $row = $result->fetch_assoc();
    if ($row == NULL) {
        return NULL;
    }
    else {
        // Get the first row of the cart
        $cart = array($row);

        // Get the remaining rows of the cart
        while ($row != NULL)
        {
            $row = $result->fetch_assoc();
            $cart[] = $row;
        }

        // Return cart
        return $cart;
    }
}

/**
 * Function: existsInCart
 * Description: Searches for a single book in the cart
 * belonging to the user id that was passed in to
 * determine if the book exists in that user's cart.
 * Returns true if the book is in the user's cart.
 * @param isbn - the isbn of the book to return.
 * @param userid - the id of the user whose cart should be searched.
 * @return - a boolean with true if the book was found.
 */
function existsInCart ($isbn, $userid) {
    require "dbconnect.php";
    // Get the book to search for
    $book = getBook($isbn);
    // Get the books in the cart
    $cart = getCartBooks($userid);

    // If the cart is empty
    if ($cart == NULL) {
        return false;
    }
    else {
        // Create an array of book IDs
        $i = 0;
	$bookIDs = array();
        while ($cart[$i]['id_books'] != NULL)
        {
            $bookIDs[] = $cart[$i]['id_books'];
            $i++;
        }

        // Check array of book IDs for the id of the book to find
        if (in_array($book['id_books'], $bookIDs)) {
            return true;
        }
        else {
            return false;
        }
    }
}

/**
 * Function: addToCart
 * Description: Searches for a single book
 * in the database with a mathcing isbn and adds
 * it to the user's cart if it is not already there.
 * @param isbn - the isbn of the book to add.
 * @param userid - the id of the user whose cart the book will be added to.
 * @return result.addToCart - a json string with the result of trying to add the book.
 */
function addToCart ($isbn, $userid) {
    require "dbconnect.php";
    // Get the book
    $book = getBook($isbn);
    // Get the id of the book
    $book_id = $book['id_books'];

    // If book does not exist in the cart already and the cart is not full
    if (existsInCart( $isbn, $userid ) == false && cartIsFUll($userid) == false) {
        // Insert book into cart
        $query = "INSERT INTO Cart(userid, id_books) VALUES ('$userid', '$book_id')";
        $result = mysqli_query($connection, $query);
        // Return the result to determine if the book was added
        if ($result == true) {
            echo json_encode(["addToCart" => $result]);
        }
        else {
            echo json_encode(["addToCart" => "error"]);
        }
    }

    // If The book already exists in the cart
    else if (existsInCart( $isbn, $userid ) == true) {
	echo json_encode(["addToCart" => "exists"]);
    }
    // If the cart is full
    else if (cartIsFUll($userid) == true) {
	echo json_encode(["addToCart" => "full"]);
    }
    // Else there was an error
    else {
	echo json_encode(["addToCart" => "error"]);
    }
}

/**
 * Function: removeFromCart
 * Description: Searches for a single book in the database
 * with a mathcing isbn and removes it from the cart belonging to
 * the user whose user id was passed in as a parameter.
 * @param isbn - the isbn of the book to remove from the cart.
 * @param userid - the id of the user whose cart the book will be removed from.
 */
function removeFromCart ($isbn, $userid) {
    require "dbconnect.php";
    // Get the book id of the book to remove
    $book = getBook($isbn);
    $book_id = $book['id_books'];

    // Delete book from cart
    $query = "DELETE FROM Cart WHERE userid = '$userid' AND id_books = '$book_id'";
    $result = mysqli_query($connection, $query);
}

/**
 * Function: cartIsFUll
 * Description: Determines if a user's cart is full by
 * comparing the number of books in the user's cart
 * against the max cart size. Returns true if cart is full.
 * @param userid - the id of the user whose cart should be searched.
 * @return - a boolean with true if the cart is full.
 */
function cartIsFUll ($userid) {
    require "dbconnect.php";
    // Set max cart size
    $max = 3;

    // Get the books in the cart
    $cart = getCartBooks ($userid);

    // Create an array of book IDs
    $i = 0;
    $bookIDs = array();
    while ($cart[$i]['id_books'] != NULL)
    {
	$bookIDs[] = $cart[$i]['id_books'];
        $i++;
    }

    // If theere are already max number of books in the cart
    if (count($bookIDs) >= $max) {
	return true;
    }
    else {
	return false;
    }
}
?>
