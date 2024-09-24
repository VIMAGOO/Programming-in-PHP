<?php
// Program that, given an array with a list of words, provides the position of a specified word or indicates, if applicable, that it is not present.

$words = ["Hello", "Alo", "Ciao"];  // Array with a list of words

$word = "Ciao";  // The word to search for
$position = -1;  // Initialize to -1 to indicate the word has not been found

// Loop through each word in the array
for ($i = 0; $i < count($words); $i++) {
    if ($words[$i] == $word) {  // If the current word matches the searched word
        $position = $i;  // Set the position to the current index
        break;  // Exit the loop as soon as the word is found
    }
}

if ($position >= 0) {  // If the position is valid (the word was found)
    printf("The position of the word is %d.", $position);  // Print the position of the word
} else {
    print("The word is not in the array.");  // If the word was not found, display a message
}

?>
