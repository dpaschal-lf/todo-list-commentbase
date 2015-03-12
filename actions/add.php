<?php
//require the functions.php file, make sure it is only added one time
//create an array for error messages
//create an array for output
if()  //check if the post variable exists
{
    if()  //check if the title is an empty string
    {
        //add to the error array, set the title to an appropriate error message: $error['title']='your message'
    }
    if() //chek if the date is an empty string
    {
        //add to the error array, set the date to an appropriate error message
    }
    else //if the date is not blank
    {
        //convert the date string to a utime with strtotime
        if(){   //if the utime is false, the date string wasn't valid, and we display an error
            //add to the error array, set the date to an appropirate error message
        }
        else if() //else if the utime is less than now (date set in past).  can find current time with time()
        {
            //add to the error array, set the date to an appropriate error message
        }
    }
    if() //if the defails are blank
    {
            //add to the error array, set the date to an appropriate error message
    }
    if(){  //if there were no errors, ie the error array has no elements
        
        //make an associative array to hold the pieces of our date, the title, the date (converted to a utime), and the etails
        //get the contents of our todo.json file with file_get_contents.  This is so we can add to it if it exists
        if(){  //if the length of the file's contents are 0 (ie the file was empty)
            //make a variable to hold our list's associative array
        }
        else{  //if the length is not 0, 
           //json_decode the file's contents.  make sure to use "true" in the second argument so that the output is an associative array instead of standard object
        }
        //make a name for this record from: concatenate the utime with a random string, so we have unique IDs
        // add a new associative array to our todo.json array, key=name generated on line above, and value is the array generated from the input data
        //json encode the modified list array, so we can replace the original file
        //use file_put_contents to replace the contents of the todo.json with our json_encoded object
        if()  //test if the result of the file add is > 0.  If it is 0, the file add failed.
        {
            //if it was greater than 0, we had a successful add.  add a success field to our output array with a boolean value of true
            //add a successful message to our output array
        }
        else //if the result was not greater than 0, there was an error saving the file
        {
            // add a success field to our output array, and set it to false
            //give an appropriate message indicating failure
        }
    }
    else //if error count > 0, we had an error and need to report it back to the page
    {
        // add a success field to our output array, and set it to false
        //give an appropriate message indicating failure
        //add our error array to a key in our output array, so we can report exact errors and/or show appropriate errors on different inputs
    }
}
else //post wasn't set, no data was available
{
    // add a success field to our output array, and set it to false
    //give an appropriate message indicating failure
}
//json_encode our output array, and echo it
?>