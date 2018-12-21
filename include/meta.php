<?php
/*

Mike Schaatsbergen - 2018

This document will be included on every page within <head> except for view.php

*/

// Defining the brand again for this document
$_BRAND = "pewhub";
?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Basic Info -->
        <meta name="author" content="Mike Schaatsbergen">
        <meta name="description" content="A recreation of YouTube.">
        <meta name="keywords" content="video, platform, free">
        <meta name="og:site_name" content="<?php ucfirst($_BRAND) ?>">
        <!-- Embed support -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php ucfirst($_BRAND) ?>">
        <meta property="og:description" content="A recreation of YouTube.">
        <meta property="og:url" content="//">
        <meta property="og:image" content="/assets/images/icons/favicon.ico">
        <link href="/assets/images/icons/favicon.ico" rel="icon">
