# Circumvention project (compiled via Jekyll) #

This is a refactored version of the ["VOA Circumventing Censorship"](http://projects.voanews.com/circumvention) project to help simplifying the translation and maintenance of the project. 

Jekyll is used to bake out static HTML from markdown files with post-level data and JSON files with the comic book translations. 

Each language has its own folder (e.g. '/russian/') with a '/_posts/' folder. By keeping the markdown files for the translations in those folders the site will preserve the site structure. Each translation .md file has an include at the topic for the appropriate comic: '{% include comic__dns.html %}'. The language variables for the comic are passed in via a post variable at the top `langnumber: 5`.

The comic book templates are stored in the '_includes' folder. The JSON of the translations for the comics (and metadata) is stored in the '_data' folder in individual .json files (e.g. 'dns.json'). The actual translations are stored and edited in a Google spreadsheet.

The instructions for updating the comic book translations are found in the `/circumvention-translations-app/README.md` file.


### Directory structure of Jekyll sites using gem-based themes ###
Starting Jekyll 3.2, a new Jekyll project bootstrapped with jekyll new uses gem-based themes to define the look of the site. This results in a lighter default directory structure : _layouts, _includes and _sass are stored in the theme-gem, by default.

minima is the current default theme. 
Type: 
'$ bundle show minima'

To see  where minima theme's files are stored on your computer.

Type:

'$ open .'

To open that folder in the current terminal window in finder.

If you read the README file for the theme, it gives instructions on ways to override the theme SASS at the project level


### To do list ###

* Make sure DNS is set up for RTL
* Update the navbar for translations
* Only include the initial drop cap on languages that need/want it.
* Clean up the code (extraneous fragments and references to epubs/epub files)
* Clean up the SASS/CSS



### Done ###


