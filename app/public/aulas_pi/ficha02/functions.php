<?php

function times_table_view()
{
    $html = "<table><tbody>";

    for ($i = 0; $i < 10; $i++) {
        $html .= "<tr>";

        for ($j = 0; $j < 10; $j++) {
            $html .= "<td";

            if ($i === $j) {
                $html .= " class=\"diag\"";
            }

            $html .= ">";

            $html .= ($i + 1) * ($j + 1) . "</td>";
        }

        $html .= "</tr>";
    }

    $html .= "</tbody></table>";
    return $html;
}

function prime_numbers($n)
{
    $primes = array();

    for ($i = 2; $i <= $n; $i++) {
        $isPrime = true;

        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            $primes[] = $i;
        }
    }

    return $primes;
}

function prime_numbers_view($number)
{
    // input validation
    if ($number < 1 || $number > 100) {
        return "<p>Input must be between 1 and 100!</p>";
    }

    // get prime numbers for input
    $res = prime_numbers($number);

    $html = "<h2>Prime numbers until " . $number . "</h2><ul>";

    // no prime numbers for input
    if (sizeof($res) == 0) {
        $html .= "<p>No results!</p>";
        return $html;
    }

    for ($i = 0; $i < sizeof($res); $i++) {
        $html .= "<li>" . $res[$i] . "</li>";
    }

    $html .= "</ul>";

    $html .= "<p>Sum of prime numbers: " . array_sum($res) . "</p>";
    $html .= "<p>Count of prime numbers: " . sizeof($res) . "</p>";

    return $html;
}

function sentence($prettyPrint)
{
    require_once "sentences.php";

    if ($prettyPrint) {
        $sentence = getRandomItem($nouns) . " " . getRandomItem($verbs) . " " . getRandomItem($objects);
        $sentence = ucfirst($sentence);
        return "<p>" . $sentence . "</p>";
    } else {
        return getRandomItem($nouns) . " " . getRandomItem($verbs) . " " . getRandomItem($objects);
    }
}

/**
 * Get a random item from an array.
 */
function getRandomItem($array)
{
    return $array[array_rand($array)];
}

function letter_histogram()
{
    $html = "";
    $sentence = strtolower(sentence(false)); // convert to lowercase
    $histogram = array();

    $num_spaces = substr_count($sentence, " ");

    for ($i = 0; $i < strlen($sentence); $i++) {
        $char = $sentence[$i];

        // ignore non-alpha characters (only include letters)
        if (!ctype_alpha($char)) {
            continue;
        }

        if (isset($histogram[$char])) {
            $histogram[$char]++; // if exists in the array, increments
        } else {
            $histogram[$char] = 1; // if exists, include in array
        }
    }

    $html .= "<p>Sentence: " .  ucfirst($sentence) . "</p>"; // original sentence

    $html .= "<table><thead><tr><th>Character</th><th>Count</th></thead><tbody>"; // table header

    arsort($histogram, 1); // 1 for sort type

    foreach ($histogram as $key => $value) {
        if ($value >= 3) {
            $html .= "<tr class=\"bg\">";
        } else {
            $html .= "<tr>";
        }

        $html .= "<td>" . $key . "</td>";
        $html .= "<td>" . $value . "</td></tr>";
    }

    // add line for space count
    $html .= "<tr class=\"bg\"><td>Spaces</td><td>" . $num_spaces . "</td></tr>";
    $html .= "</tbody></table>";

    return $html;
}
