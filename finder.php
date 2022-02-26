<?php
    $main = "https://www.mediafire.com/file/6heuvobr6yqccg0/HB_Android__Algeria_1.sip/file";

    $doc = new DOMDocument();
    $doc->loadHTML(file_get_contents($main));

    echo $doc ;
?>