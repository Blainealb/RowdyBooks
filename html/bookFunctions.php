<?php
/**
 * File: bookFunctions.php
 * Description: Provides the functions for retrieving
 * the books to display on the home page from the database.
 * @author Kaleb Phillips
 */

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
 * @param isbn - the isbn of the book to return.
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

?>
