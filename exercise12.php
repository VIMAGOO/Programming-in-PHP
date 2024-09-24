<?php
// Program that validates a DNA or mRNA sequence (select with a selector), indicates the number of times and the percentage each nucleotide appears, and the number of errors.
$sequence = "ACGTACGTAACCGGTTTACGTTT";
//$sequence = "ACGUACGUAACCGGUUUACGUUU";
$valid = true;
$counterError = 0;
// If type equals 0 is a DNA sequence; if type equals 1 is an RNA sequence
$type = 0;

// Count errors and check validity
for ($i = 0; $i < strlen($sequence); $i++) {
    if ($type == 0) { // DNA sequence
        if ($sequence[$i] !== "A" && $sequence[$i] !== "C" && $sequence[$i] !== "G" && $sequence[$i] !== "T") {
            $valid = false;
            $counterError++;
        }
    } elseif ($type == 1) { // RNA sequence
        if ($sequence[$i] !== "A" && $sequence[$i] !== "C" && $sequence[$i] !== "G" && $sequence[$i] !== "U") {
            $valid = false;
            $counterError++;
        }
    }
}

// If the sequence is valid
if ($valid) {
    $counterA = 0;
    $counterC = 0;
    $counterG = 0;
    $counterT = 0;
    $counterU = 0;

    // Count nucleotides
    for ($i = 0; $i < strlen($sequence); $i++) {
        switch ($sequence[$i]) {
            case "A":
                $counterA++;
                break;
            case "C":
                $counterC++;
                break;
            case "G":
                $counterG++;
                break;
            case "T":
                if ($type == 0) {
                    $counterT++;
                }
                break;
            case "U":
                if ($type == 1) {
                    $counterU++;
                }
                break;
        }
    }

    // Sum nucleotides
    $countersum = $counterA + $counterC + $counterG + ($type == 0 ? $counterT : $counterU);

    // Print results
    printf("A nucleotide: %d\n", $counterA);
    printf("C nucleotide: %d\n", $counterC);
    printf("G nucleotide: %d\n", $counterG);
    if ($type == 0) {
        printf("T nucleotide: %d\n", $counterT);
    } elseif ($type == 1) {
        printf("U nucleotide: %d\n", $counterU);
    }

    // Print percentages
    if ($countersum > 0) {
        printf("A nucleotide %%: %.2f\n", ($counterA / $countersum) * 100);
        printf("C nucleotide %%: %.2f\n", ($counterC / $countersum) * 100);
        printf("G nucleotide %%: %.2f\n", ($counterG / $countersum) * 100);
        if ($type == 0) {
            printf("T nucleotide %%: %.2f\n", ($counterT / $countersum) * 100);
        } elseif ($type == 1) {
            printf("U nucleotide %%: %.2f\n", ($counterU / $countersum) * 100);
        }
    }
} else {
    // Print the number of errors
    printf("Number of errors: %d\n", $counterError);
}
?>
