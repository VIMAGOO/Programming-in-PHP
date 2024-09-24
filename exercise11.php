<?php
// Program that calculates the complementary DNA sequence to a given sequence.
$sequence = "AAACCCGGG";  // The original DNA sequence
$compSequence = "";  // Initialize an empty string to hold the complementary sequence

// Loop through each character in the original sequence
for ($i = 0; $i < strlen($sequence); $i++) {
    switch ($sequence[$i]) {  // Check the current nucleotide
        case "A":  // If the nucleotide is 'A'
            $compSequence .= "T";  // Append 'T' to the complementary sequence
            break;
        case "C":  // If the nucleotide is 'C'
            $compSequence .= "G";  // Append 'G' to the complementary sequence
            break;
        case "G":  // If the nucleotide is 'G'
            $compSequence .= "C";  // Append 'C' to the complementary sequence
            break;
        case "T":  // If the nucleotide is 'T'
            $compSequence .= "A";  // Append 'A' to the complementary sequence
            break;
    }
}

// Output the complementary sequence
printf("Your complementary sequence is: %s", $compSequence);
?>
