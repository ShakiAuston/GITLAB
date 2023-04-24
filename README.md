Calendar Project
Last edited: April 10, 2023


Notes:
Login happens in public.php
User needs a way to run SQL on their machine

NAVIGATION BAR IN header.php

The Navigation bar located in header.php is crucial to the program. Like other navigation bars, it allows the user to navigate around the website. The navbar's source code is dynamic depending on context. However, this navigation bar should be contained in header.php
It is used at the beginning of the body:
<?php include 'header.php'; ?>

In the head section of header.php, there is code which checks for JS enabled, and sends to a noJS.html page otherwise.
