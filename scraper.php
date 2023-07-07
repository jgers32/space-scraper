<?php

require 'vendor/autoload.php'; // Include the Composer autoloader

use GuzzleHttp\Client;

// Create a Guzzle HTTP client
$client = new Client();

// Send a request to the target website and retrieve the response
$response = $client->request('GET', 'https://www.nasa.gov/launchschedule/');

// Extract the content from the response
$html = $response->getBody()->getContents();

// Use the Simple HTML DOM Parser to parse the HTML
// You can replace this with the library of your choice
$dom = new \simplehtmldom\HtmlDocument();
$dom->load($html);

// Scrape the desired data from the HTML using CSS selectors
$data = $dom->find('launch-label');

// Process and manipulate the scraped data as needed
foreach ($data as $item) {
    // Process each item
    // Example: echo $item->plaintext;
}
