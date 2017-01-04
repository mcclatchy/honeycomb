# Honeycomb

#### What is it?
This is a starting design for McClatchy's Special Projects Template. It has been created for local development that can easily be moved over to Newsgate for testing and publishing. 

#### Why use it?
Honeycomb standardizes and streamlines the process of creating special project designs within Newsgate/Escenic by providing HTML, styles and scripts to give news developers a running start at customization.

#### Who is it for?
Honeycomb is for McClatchy front-end developers who want to give projects a special treatment beyond the standard article page.

## Setup

Make sure you have a [GitHub](https://github.com/) account and [Git](https://git-scm.com/downloads) installed on your computer.

1. Fork the [base-design](https://github.com/mcclatchy/special-project-template/tree/master/base-design) repository to your GitHub account.
2. Click `clone or download` and copy the URL from your forked repository.
3. Open your terminal and navigate to the directory that your project will live in.
4. Clone the forked repository by pasting `git clone YOUR REPO URL` into your terminal.

## Navigating Honeycomb files
`index.html` comes built with all of the code you need to view your project as if it were published on one of our standardized market sites. There are three sections you may customize:
- `<!-- custom head -->` is where you may add style and miscellaneous dependencies.
- `<!-- custom body -->` is where you may add HTML.
- `<!-- custom scripts -->` is where you may add JS or other script dependencies.

####Existing dependencies
- `css/base.css` and `scripts/base.js` contain all of the base styles and scripts. Changes to these files are not recommended. 
- `css/custom.css` is where new styles should be added to build upon or override those established in `css/base.css`.
- `scripts/custom.js` is where new scripts should be added.
- Note: `sass/base.scss` and `sass/custom.scss` are available and ready to compile into their .css counterparts if you prefer [writing with Sass](http://sass-lang.com/install). 

## Transferring to Newsgate
1. Upload your `img`, `css` and `scripts` directories to your server.
2. Update your `custom dependencies` in `index.html` with their new URLs.
3. Paste your `custom body code` (excluding body copy) from `index.html` into Newsgate's `mm_link` sections. Include their `mm_embed` counterparts within the story copy.

## Code Cookbook

- Loader
- Images
- Graphics
- Fact boxes
- Pull quotes
- Videos
- About section
- Correction

***

### Loader

```html
<div class="loader-wrapper">
    <div class="loader">
        <div class="loader-logo"></div>
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
</div>
```
***

### Images

* Story-width

```html
<figure class="story-img">
    <img src="http://www.mcclatchydc.com/news/v2zydn/picture116721638/binary/placeholder1.png"/>
    <figcaption>Caption information goes here. (Photographer Name, Publication)</figcaption>
</figure>
```

* Container-width

```html
<figure class="container-img">
    <img src="http://www.mcclatchydc.com/news/v2zydn/picture116721638/binary/placeholder1.png"/>
    <figcaption>Caption information goes here. (Photographer Name, Publication)</figcaption>
</figure>
```

* Full-width

```html
<figure class="fluid-img">
    <img src="http://www.mcclatchydc.com/news/v2zydn/picture116721638/binary/placeholder1.png"/>
    <figcaption>Caption information goes here. (Photographer Name, Publication)</figcaption>
</figure>
```
***

### Facebook comments

Facebook comments only load in published story pages on the server (not local files).
```html
<div class="comments">
    <h1 id="comments-heading" class="heading">Comments</h1>
    <div class="fb-comments" data-href="http://LINK TO YOUR STORY PAGE GOES HERE.html" data-numposts="10" data-width="100%" data-colorscheme="light"></div>
</div>
```

## Changelog
No changes... yet.
