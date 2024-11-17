<!DOCTYPE html>
<html>
<head> 
    <title>Sergio Mercado Nuñez</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<!-- Navigation  -->    
<nav class="navbar">
    <ul class="link-group">
        <li class="link<?php if(basename($_SERVER['SCRIPT_NAME'])=='index.php') echo ' active'; ?>">
            <a href="index.php">home</a>
        </li>
        <li class="link<?php if(basename($_SERVER['SCRIPT_NAME'])=='projects.php') echo ' active'; ?>">
            <a href="projects.php">projects</a>
        </li>
        <li class="link<?php if(basename($_SERVER['SCRIPT_NAME'])=='about.php') echo ' active'; ?>">
            <a href="about.php">about</a>
        </li>
        <li class="link<?php if(basename($_SERVER['SCRIPT_NAME'])=='blog.php') echo ' active'; ?>">
            <a href="blog.php">blog</a>
        </li>
    </ul>
</nav>

