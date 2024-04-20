<?php

function truncateText($text, $wordLimit = 30) {
    $words = preg_split('/\s+/', $text);
    if (count($words) > $wordLimit) {
        return implode(' ', array_slice($words, 0, $wordLimit)) . '...';
    }
    return $text;
}

function formatText($text) {
    // Escape text to prevent XSS
    $text = e($text);

    // Automatically link URLs
    $text = preg_replace_callback(
        '#\bhttps?://[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/))#',
        function ($matches) {
            return '<a class="query-link" href="' . $matches[0] . '" target="_blank">' . $matches[0] . '</a>';
        }, 
        $text
    );

    // Convert @mentions into links
    $text = preg_replace_callback(
        '/@(\w+)/',
        function ($matches) {
            // Create the URL using Laravel's route helper
            $url = url("/main/user/@" . $matches[1]);
            return '<a target="_blank" class="userLink" href="' . $url . '">' . $matches[0] . '</a>';
        }, 
        $text
    );

    // Wrap code marked by ^^...^^ in a <div> with class 'codebox'
    $text = preg_replace_callback(
        '/\^\^([\s\S]+?)\^\^/',
        function ($matches) {
            // Preserve exact text formatting including spaces, tabs, and new lines
            return '<div class="codebox"><pre>' . htmlentities($matches[1], ENT_QUOTES, 'UTF-8', false) . '</pre></div>';
        },
        $text
    );

    return $text;
}