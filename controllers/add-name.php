<?php

var_dump('Volgens mij heet jij ' . $_POST['name'] . ', toch?');

// var_dump($_GET['name']);

// $_REQUEST is a superglobal which'll give you the whole request.
// You can extract from it.
// $_GET gives you the GET-request values.
// It gives an array, so you can access any index you like, like name, so long as it is in the query-string.
// GET is used for search, mostly you'll want to POST to server.