# PHP
Coding along with Jeffrey Way to learn the basics of PHP.

Will set up my own project very soon with the skeleton and basic skills I learned here.

Problem: declared vars from controllers/index.php are being passed on to views, but on about and contact controlelrs/views this is not the case. Why? I do not spot any difference whatsoever.

Solution: the links referred to the specific files and bypassed the router entirely. The link in the nav-bar should always specify the get-portion of the routes, than they will be pased on to the controller first (where my vars where declared) and the view (where I can access those vars).

Templating was nothing new, learned it alreay in NodeJS/Epress.