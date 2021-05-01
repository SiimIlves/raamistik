# What is ~~love~~ raamistik

A project that uses PHP language and is supported by the MVC model.

## What do I need?

To fully operate this project, you will need...
- XAMPP - https://www.apachefriends.org/download.html
- PHPStorm or any other preferred program for opening the files - https://www.jetbrains.com/phpstorm/

To easily get everything from this repository, it is recommended to use ***git clone***, but can also be done by clicking on "Code" and then directly exporting the contents of the zip file to a desired location.

### Getting started

Before running anything, it is ***HIGHLY*** recommended that you tinker with the style.css file, located in *public/css*. Failure to do so may result in burnt retinas, headaches or worse. 
By reading this you have acknowledged the fact that I take no responsibility for the damage caused to the readers eyes.

Another good idea would be editing the main database profile, located in */app/config/constant.php*.

After that you should start up the server through XAMPP.
Opening the website on your browser should now display (hopefully not) a hellish color palette.

### Where is what?

Your main focus should mostly be on the app folder, as that's where most of the magic happens.
- config folder contains the structure of everything
- controllers is for the website's functionality
- libs is basically the backbone of every operation
- models is self explanatory and so is views
- bootstrap.php loads everything and without it the entire thing wouldn't even work

The public folder contains an utterly useless javascript file and a somewhat useful css file.
also the index.php file that takes all that bootstrap collected and then slams it into the webpage.

# Thank you for coming to my TED Talks.
