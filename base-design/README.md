# Base Design

#### What is it?
1-2 sentences that explains what the base design is.

#### Who is it for?
Id tenderloin mollit cillum ham hock pork belly ullamco flank veniam. Picanha meatloaf turducken beef leberkas, lorem kielbasa rump non laborum spare ribs. Prosciutto cupim pariatur, pork belly aute frankfurter boudin cow. Picanha boudin id excepteur irure. In ham hock jowl turkey. Tempor drumstick deserunt salami ea jerky. Labore minim laborum, landjaeger swine pig ut beef ribs tail ipsum culpa pariatur enim.

#### Why use it?
Id tenderloin mollit cillum ham hock pork belly ullamco flank veniam. Picanha meatloaf turducken beef leberkas, lorem kielbasa rump non laborum spare ribs. Prosciutto cupim pariatur, pork belly aute frankfurter boudin cow. Picanha boudin id excepteur irure. In ham hock jowl turkey. Tempor drumstick deserunt salami ea jerky. Labore minim laborum, landjaeger swine pig ut beef ribs tail ipsum culpa pariatur enim.

## Setup

Make sure you have a [GitHub](https://github.com/) account and [Git](https://git-scm.com/downloads) installed on your computer.

1. Create an account or sign into GitHub and fork the [base-design](https://github.com/mcclatchy/special-project-template/tree/master/base-design) repository to your account
2. Click *clone or download* and copy the URL
3. Open your terminal and navigate to the directory that your project will live in.
4. Clone the forked repository by pasting `git clone [YOUR REPO URL]` into your terminal.

## Navigating Base Design Files
`index.html` comes pre-built with all of the code you need to view your project as if it were published on one of our standardized market sites.
- Add custom dependencies after `<!-- custom dependencies -->` in index.html
- Add custom html after `<!-- custom body code -->`

####Existing dependencies
- `css/base.css` contains all of your base styles. Changes to this file are not recommended. 
- `css/custom.css` is a clean stylesheet to build upon or overwrite styles established in `base.css`.
- (Note: `sass/base.scss` and `sass/custom.scss` are available and ready to compile into their `.css` counterparts if you prefer [writing with Sass](http://sass-lang.com/install). 


## Transferring to Newsgate
1. Step one
2. Step two

## Changelog
No changes... yet.

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
