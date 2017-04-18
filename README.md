# Circumvention project (compiled via Jekyll) #

This is a refactored version of the ["VOA Circumventing Censorship"](http://projects.voanews.com/circumvention) project to help simplifying the translation and maintenance of the project. 

Jekyll is used to bake out static HTML from markdown files with post-level data and JSON files with the comic book translations. 

Each language has its own folder (e.g. '/russian/') with a '/_posts/' folder. By keeping the markdown files for the translations in those folders the site will preserve the site structure. Each translation .md file has an include at the topic for the appropriate comic: '{% include comic__dns.html %}'. The language variables for the comic are passed in via a post variable at the top `langnumber: 5`.

The comic book templates are stored in the '_includes' folder. The JSON of the translations for the comics (and metadata) is stored in the '_data' folder in individual .json files (e.g. 'dns.json'). The actual translations are stored and edited in a Google spreadsheet.

The instructions for updating the comic book translations are found in the `/circumvention-translations-app/README.md` file.


### Getting started ###

To run jekyll locally, you'll need to install `jekyll` and `bundle`.

From the project folder run `jekyll serve`


### Directory structure of Jekyll sites using gem-based themes ###

Starting Jekyll 3.2, a new Jekyll project bootstrapped with jekyll new uses gem-based themes to define the look of the site. This results in a lighter default directory structure : _layouts, _includes and _sass are stored in the theme-gem, by default.


### To do list ###

* Make sure DNS is set up for RTL
* Only include the initial drop cap on languages that need/want it.
* Clean up the SASS/CSS



### Done ###

* Update the navbar for translations
* Move tool table to the footer (to be visible across all pages/languages)
* Replace missing photos (using {% include snippet.html %} to help improve consistency and maintainability)
* Clean up the code (extraneous fragments and references to epubs/epub files)
* Make navbar flip in RTL

