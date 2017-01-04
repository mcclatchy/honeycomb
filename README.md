# Honeycomb

#### What is it?
This is a base design for McClatchy's Special Projects Template. It has been created for local development that can easily be moved over to Newsgate for testing and publishing. 

#### Why use it?
Honeycomb standardizes and streamlines the process of creating special project designs within Newsgate/Escenic by providing HTML, styles and scripts to give news developers a running start at customization.

#### Who is it for?
Honeycomb is for McClatchy front-end developers who want to give projects a special treatment beyond the standard article page.

## Setup

Make sure you have a [GitHub](https://github.com/) account and [Git](https://git-scm.com/downloads) installed on your computer.

1. Fork the Honeycomb repository to your GitHub account.
2. Click `clone or download` and copy the URL from your forked repository.
3. Open your terminal and navigate to the directory that your project will live in.
4. Clone the forked repository by pasting `git clone YOUR REPO URL` into your terminal.
5. Navigate into your local Honeycomb directory and enter `php -S localhost:8000`.
6. Go to the `localhost:8000` web address in your browser to see your new project and begin customizing project files.
7. For Sass (optional): Go to `/honeycomb/static` in a new terminal window, enter `sass --watch sass:css` to begin watching your files.

## Navigating Honeycomb files
`index.php` is a local version of a basic McClatchy page framework (i.e. the market's header/footer, styles, etc.). The contents of this file create a local developing environment for you but shouldn't be edited or included in Newsgate.

`custom.php` starts with a sample story and generic elements that is your canvass to customize.
  - `<!-- custom head -->` is where you may add style and miscellaneous dependencies.
  - `<!-- custom body -->` is where you may add HTML and usually includes:
      1. `<!-- content header -->` for hero images/videos, title text and other top hierarchy elements.
      2. `<!-- content body -->` for story text, art and other elements weaved throughout the story.
      3. `<!-- content footer -->` for breakout sections, suggested stories, comments and other bottom hierarchy elements.
  - `<!-- custom scripts -->` is where you may add JS or other script dependencies.

####Existing dependencies
- `css/base.css` and `scripts/base.js` contain all of the base styles and scripts. Changes to these files are not recommended. 
- `css/custom.css` is where new styles should be added to build upon or override those established in `css/base.css`.
- `scripts/custom.js` is where new scripts should be added.

####Sass
   -`sass/custom.scss` is available and ready to compile into its .css counterpart if you prefer [writing with Sass](http://sass-lang.com/install). 
   - `sass/_variables.scss`, `sass/_extendables.scss` and `sass/_site-colors.scss` are [partials] (http://sass-lang.com/guide/#partials).

##Best practices

####Using your market colors
- If your project is publishing on only one site, it's more efficient to add Hex codes directly to your properties in CSS. Check out `sass/_site-colors.css` to find your primary and accent Hex codes.
- If your project is publishing on more than one site, use the following classes to color an element. `scripts/base.js` will look for the publication URL and pre-defined classes to apply the correct market color or background-color to that element. 
   - `.hc-primary-color`
   - `.hc-accent-color`
   - `.hc-primary-background`
   - `.hc-accent-background`
Note: Changing `publicationUrl: 'http://www.mcclatchydc.com/` to a market URL of interest will allow you to test other market colros locally.
 
####Writing Newsgate-safe classes
One challenge in Newsgate is the possibility that its stylesheets could change significantly with updates. Below are a few tips to prevent updates from breaking your project:
- Use classes to style common tags like `<p>`, `<h1>`, `<h2>`, `<h3>`, `<h4>`, `<h5>` instead of styling the tag itself.
- Use `hc-` or another prefix for classes to ensure they never override classes established in Newsgate.
- Use the `.reset` class
    - CSS: Add your class to the `.reset` list at the top of your stylesheet.
    - Sass: Add `@extend .reset` to the top of your class's properties.

## Transferring to Newsgate
1. Upload your `img`, `css` and `scripts` directories to your server.
2. Update your dependencies and image links in `custom.php` with their new URLs.
3. Paste your `custom body` code (excluding body copy) from `custom.php` into Newsgate's `mm_link` sections. Include their `mm_embed` counterparts within the story copy.

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
