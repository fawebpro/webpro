<?php
// Step 1: Declare the array
$bananaArray = ["susu", "berangan", "emas", "nangka", "raja"];

// Step 2: Define the sentences with placeholder 'XXXXX'
$sentences = [
    "Buah pisang XXXXX mempunyai rasa lemak manis dan beraroma. Ia boleh dimakan begitu sahaja sebagai pencuci mulut.",
    "Pokoknya yang agak rendah membolehkan buahnya dicapai dengan tangan.",
    "Buah pisang XXXXX sering menjadi pilihan ramai kerana mempunyai saiz yang sangat sesuai untuk dijadikan makanan pencuci mulut yang biasanya dihidangkan di majlis-majlis keramaian dan jamuan. Pisang XXXXX memiliki bentuk yang kecil dan sering dijadikan snek kerana rasanya yang sangat sedap.",
    "Salah satu jenis pisang yang biasa ditanam ialah pokok pisang XXXXX. Buah pisang ini agak berbeza dengan pisang lain kerana walaupun sudah matang, warnanya masih hijau.",
    "Pisang XXXXX dikatakan memiliki rasa yang paling enak dan sangat sesuai dijadikan pisang goreng berbanding buah pisang lain."
];

// Step 3: Loop through each banana type and generate sentences
foreach ($bananaArray as $bananaType) {
    echo str_replace("XXXXX", $bananaType, $sentences[0]) . "\n";
    echo $sentences[1] . "\n"; // This sentence does not need replacement
    echo str_replace("XXXXX", $bananaType, $sentences[2]) . "\n";
    echo str_replace("XXXXX", $bananaType, $sentences[3]) . "\n";
    echo str_replace("XXXXX", $bananaType, $sentences[4]) . "\n";
    echo "\n"; // Adding a newline for better readability between different banana types
}
?>
