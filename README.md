# Circumvention project (compiled via Jekyll) #

This is a refactored version of the ["VOA Circumventing Censorship"](http://projects.voanews.com/circumvention) project to help simplifying the translation and maintenance of the project. 

Jekyll is used to bake out static HTML from markdown files with post-level data and JSON files with the comic book translations. 

Each language has its own folder (e.g. '/russian/') with a '/_posts/' folder. By keeping the markdown files for the translations in those folders the site will preserve the site structure. Each translation .md file has an include at the topic for the appropriate comic: '{% include comic__dns.html %}'. The language variables for the comic are passed in via a post variable at the top `langnumber: 5`.

The comic book templates are stored in the '_includes' folder. The JSON of the translations for the comics (and metadata) is stored in the '_data' folder in individual .json files (e.g. 'dns.json'). The actual translations are stored and edited in a Google spreadsheet.

The instructions for updating the comic book translations are found in the `/circumvention-translations-app/README.md` file.


### Getting started ###

To run jekyll locally, you'll need to [install `jekyll` and `bundler`](https://help.github.com/articles/setting-up-your-github-pages-site-locally-with-jekyll/). (Jekyll also has this [quickstart guide](https://jekyllrb.com/docs/quickstart/))

`$ gem install bundler`

After you clone the repo, you'll need to run `bundle install`.

To start up the server (and create the static files), run `jekyll serve`

Your site should be at `localhost:4000/` (or possibly at `localhost:4000/project-folder/)

(If you need to update Ruby, look [here](https://stackoverflow.com/questions/38194032/how-to-update-ruby-version-2-0-0-to-the-latest-version-in-mac-osx-yosemite))

### Directory structure of Jekyll sites using gem-based themes ###

Starting Jekyll 3.2, a new Jekyll project bootstrapped with jekyll new uses gem-based themes to define the look of the site. This results in a lighter default directory structure : _layouts, _includes and _sass are stored in the theme-gem, by default.


### To do list ###

* Update text
* Update comics
* Send out for translation
* Clean up the SASS/CSS
* Move to prod site
