<?php
function listHTML($arg1, $elements) {
    if (empty($arg) && empty($elements)) {
        return null;
    }

    $html = "<h3>$arg1</h3><ul>";
    foreach ($elements as $element) {
        $html .= "<li>$element</li>";
    }
    $html .= "</ul>";

    return $html;
}
echo listHTML("Capitale", ["Madrid", "Rabat", "Alger"]);
?>