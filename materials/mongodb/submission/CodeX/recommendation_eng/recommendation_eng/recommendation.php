<?php
include("dbconnect.php");

// Step 1: Retrieve ratings from the database
$query = "SELECT rate_show_id, rate FROM tb_rate";
$result = mysqli_query($con, $query);

// Store ratings in an associative array
$ratings = array();
while ($row = mysqli_fetch_assoc($result)) {
    $showId = $row['rate_show_id'];
    $rating = $row['rate'];

    if (!isset($ratings[$showId])) {
        $ratings[$showId] = array();
    }

    $ratings[$showId][] = $rating;
}

// Step 2: Calculate item similarities
function calculateSimilarities($ratings)
{
    $similarities = array();

    foreach ($ratings as $showId1 => $rating1) {
        foreach ($ratings as $showId2 => $rating2) {
            if ($showId1 !== $showId2 && !isset($similarities[$showId1][$showId2])) {
                $similarity = calculateSimilarity($rating1, $rating2);
                $similarities[$showId1][$showId2] = $similarity;
                $similarities[$showId2][$showId1] = $similarity; // Store both directions for easier lookup
            }
        }
    }

    return $similarities;
}

// Calculate cosine similarity between two rating arrays
function calculateSimilarity($rating1, $rating2)
{
    $dotProduct = 0;
    $magnitude1 = 0;
    $magnitude2 = 0;

    $n = count($rating1);

    for ($i = 0; $i < $n; $i++) {
        $dotProduct += $rating1[$i] * $rating2[$i];
        $magnitude1 += pow($rating1[$i], 2);
        $magnitude2 += pow($rating2[$i], 2);
    }

    $magnitude1 = sqrt($magnitude1);
    $magnitude2 = sqrt($magnitude2);

    if ($magnitude1 == 0 || $magnitude2 == 0) {
        return 0;
    }

    return $dotProduct / ($magnitude1 * $magnitude2);
}

// Step 3: Generate recommendations for a given show
function generateRecommendations($showId, $ratings, $similarities)
{
    $recommendations = array();

    foreach ($ratings as $otherShowId => $rating) {
        if ($otherShowId !== $showId) {
            $similarity = $similarities[$showId][$otherShowId];

            if ($similarity > 0) {
                $recommendations[$otherShowId] = $similarity;
            }
        }
    }

    arsort($recommendations);

    return $recommendations;
}

// Step 4: Calculate item similarities
$similarities = calculateSimilarities($ratings);

// Step 5: Generate recommendations for all show IDs
$allRecommendations = array();

foreach ($ratings as $showId => $rating) {
    $recommendations = generateRecommendations($showId, $ratings, $similarities);
    $allRecommendations[$showId] = $recommendations;
}

// Redirect to the recommendation result page
header("Location: ratecalculated.php?recommendations=" . urlencode(json_encode($allRecommendations)) . "&show_id=" . $_GET['show_id']);
exit;
