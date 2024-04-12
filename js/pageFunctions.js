/**
 * File: pageFunctions.js
 * Description: Provides the functionality for next arrow button, previous arrow button,
 * and direct page number buttons.
 * @author Kaleb Phillips
 */

/**
 * function: updateButtons
 * Description: Updates the button active / inactive highliting and the page numbers
 * displayed on the buttons.
 * @param pages - an array with all of the required page information.
 */
function updateButtons (pages) {

    // If the buttons to update are in the category area
    if (pages.area.localeCompare("category") == 0)
    {
        // Apply the update to change active button
        document.getElementById("category_button1").className = pages['button1'];
        document.getElementById("category_button2").className = pages['button2'];
        document.getElementById("category_button3").className = pages['button3'];
        document.getElementById("category_button4").className = pages['button4'];
	document.getElementById("below_category_button1").className = pages['button1'];
        document.getElementById("below_category_button2").className = pages['button2'];
        document.getElementById("below_category_button3").className = pages['button3'];
        document.getElementById("below_category_button4").className = pages['button4'];

        // Apply the update to button numbers
        document.getElementById("category_button1").innerHTML = pages['display1'];
        document.getElementById("category_button2").innerHTML = pages['display2'];
        document.getElementById("category_button3").innerHTML = pages['display3'];
        document.getElementById("category_button4").innerHTML = pages['display4'];
	document.getElementById("below_category_button1").innerHTML = pages['display1'];
        document.getElementById("below_category_button2").innerHTML = pages['display2'];
        document.getElementById("below_category_button3").innerHTML = pages['display3'];
        document.getElementById("bellw_category_button4").innerHTML = pages['display4'];
    }
    // If the buttons to update are in the recently viewed area
    else if (pages.area.localeCompare("recent") == 0)
    {
        // Apply the update to change active button
        document.getElementById("recent_button1").className = pages['button1'];
        document.getElementById("recent_button2").className = pages['button2'];
        document.getElementById("recent_button3").className = pages['button3'];
        document.getElementById("recent_button4").className = pages['button4'];
	document.getElementById("below_recent_button1").className = pages['button1'];
        document.getElementById("below_recent_button2").className = pages['button2'];
        document.getElementById("below_recent_button3").className = pages['button3'];
        document.getElementById("below_recent_button4").className = pages['button4'];

        // Apply the update to button numbers
        document.getElementById("recent_button1").innerHTML = pages['display1'];
        document.getElementById("recent_button2").innerHTML = pages['display2'];
        document.getElementById("recent_button3").innerHTML = pages['display3'];
        document.getElementById("recent_button4").innerHTML = pages['display4'];
	document.getElementById("below_recent_button1").innerHTML = pages['display1'];
        document.getElementById("below_recent_button2").innerHTML = pages['display2'];
        document.getElementById("below_recent_button3").innerHTML = pages['display3'];
        document.getElementById("below_recent_button4").innerHTML = pages['display4'];
    }
}

/**
 * function: nextPage
 * Description: Provides the functionality for the next arrow button by determining the
 * correct page button to highlight as the active page and the page numbers to display
 * on buttons.
 * @param pages - an array with all of the required page information.
 */
function nextPage (pages) {

    // Determine the active page number
    if (pages.button1.localeCompare("active") == 0)
    {
        // Change to the next page
        pages.button2 = "active";
        pages.button1 = "inactive";
    }
    else if (pages.button2.localeCompare("active") == 0)
    {
        // If there are more than two pages left
        if (pages.total - pages.display2 > 2)
        {
            // Change numbers on buttons
            pages.display2++;
            pages.display3++;
        }
        // Else there are only two more pages
        else
        {
            // Change to the second last page
            pages.button3 = "active";
            pages.button2 = "inactive";
        }
    }
    else if (pages.button3.localeCompare("active") == 0)
    {
        // Change to the last page
        pages.button4 = "active";
        pages.button3 = "inactive";
    }
    else
    {
        // There is no next page
    }
    // Return the array
    updateButtons(pages);
}

/**
 * function: prevPage
 * Description: Provides the functionality for the previous arrow button by determining the
 * correct page button to highlight as the active page and the page numbers to display
 * on buttons.
 * @param pages - an array with all of the required page information.
 */
function prevPage (pages) {

    // Determine the active page number
    if (pages.button1.localeCompare("active") == 0)
    {
        // There is no previous page
    }
    else if (pages.button2.localeCompare("active") == 0)
    {
        // If there are more than two pages left
        if (pages.display2 > 2)
        {
            // Change numbers on buttons
            pages.display2--;
            pages.display3--;
        }
        // Else there are only two more pages
        else
        {
            // Change to the first page
            pages.button1 = "active";
            pages.button2 = "inactive";
        }
    }
    else if (pages.button3.localeCompare("active") == 0)
    {
        // Change to the previous page
        pages.button2 = "active";
        pages.button3 = "inactive";
    }
    else
    {
        // Change to the previous page
        pages.button3 = "active";
        pages.button4 = "inactive";
    }
    // Return the array
    updateButtons(pages);
}

/**
 * function: directPage
 * Description: Provides the functionality for the direct page buttons by determining the
 * correct page button to highlight as the active page and the page numbers to display
 * on buttons based on the button that was clicked on.
 * @param pages - an array with all of the required page information.
 * @param button - the ID of the button that was clicked on.
 */
function directPage (pages, button) {

    // Determine the button clicked
    if (button.localeCompare("button1") == 0)
    {
        // Change directly to page
        pages.button1 = "active";
        pages.button2 = "inactive";
        pages.button3 = "inactive";
        pages.button4 = "inactive";

        // Change numbers on buttons
        pages.display2 = pages.display1 + 1;
        pages.display3 = pages.display1 + 2;
    }
    else if (button.localeCompare("button2") == 0)
    {
        // If there are more than two pages left
        if (pages.display2 > 2)
        {
            // Change directly to page
            pages.button1 = "inactive";
            pages.button2 = "active";
            pages.button3 = "inactive";
            pages.button4 = "inactive";

            // Change numbers on buttons
            pages.display3 = pages.display2 + 1;
        }
        // Else there are only two more pages
        else
        {
            // Change directly to page
            pages.button1 = "inactive";
            pages.button2 = "active";
            pages.button3 = "inactive";
            pages.button4 = "inactive";
        }
    }
    else if (button.localeCompare("button3") == 0)
    {
        // If there are only two pages left
        if (pages.total - pages.display3 < 2)
        {
            // Change directly to page
            pages.button1 = "inactive";
            pages.button2 = "inactive";
            pages.button3 = "active";
            pages.button4 = "inactive";

            // Change numbers on buttons
            pages.display2 = pages.display3 - 1;
        }
        // There are more than two pages left
        else
        {
            // Change directly to page
            pages.button1 = "inactive";
            pages.button2 = "active";
            pages.button3 = "inactive";
            pages.button4 = "inactive";

            // Change numbers on buttons
            pages.display2 = pages.display3;
            pages.display3 = pages.display3 + 1;
        }
    }
    else if (button.localeCompare("button4") == 0)
    {
        // Change directly to page
        pages.button1 = "inactive";
        pages.button2 = "inactive";
        pages.button3 = "inactive";
        pages.button4 = "active";

        // Change numbers on buttons
        pages.display2 = pages.display4 - 2;
        pages.display3 = pages.display4 - 1;
    }
    // Return the array
    updateButtons(pages);
}
