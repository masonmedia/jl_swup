# **Jaxx.io Version 4.0**

This README outlines the various frameworks, languages, approaches, and steps used in the building and maintenance of [jaxx.io](https://jaxx.io).

## **SWUP**

This version of jaxx.io uses the [SWUP](https://github.com/gmrchk/swup) library for AJAX page transitions, and the addition of entrance/exit animation classes. This gives the site an app-like user experience: pages do not reload, load time and view changes are fast, and it is easily extensible with simple (or complex) css and js animations.

SWUP works by wrapping the main page content with an `id="swup"`. This alone works to swap content in and out without reload via ajax. The addition of `.transition-` and `.is-animating` classes then offers wide flexibility in creating custom animation options for page transitions and individual element animations (refer the SWUP API). The base class for fading in and out is `.transition-fade`. See more below under **CSS**.

SWUP allows for the use of other JS libraries, however they need to be reinitialized via `document.addEventListener('swup:contentReplaced', function () { -- functions, inits, etc. here -- }`. Previously, GSAP, Scroll Magic, and AOS libraries were used for scroll-based and timeline animations. These scripts are still in the `footer.php` file, however are not currently active due to management requirement to remove scroll animations.  Should these be required in the future, GSAP JS functions and config are still in the `main.js` file [see `function gsapScrollAnimations(); `], and all that is needed is the addition of CSS classes (and/or new animations can be easily developed).  See individual library home sites for more info.

## **Layout and Frameworks**

The site uses Bootstrap 4.1. Layout uses native Bootstrap classes, and [atomic css](https://css-tricks.com/lets-define-exactly-atomic-css/). "Atomic CSS is the approach to CSS architecture that favors small, single-purpose classes with names based on visual function." Bootstrap began this approach with version 4, including the use of flexbox. Classes are reusable and target most every styling and layout component individually (alignment, spacing, color, bg-color, width, height, etc.) and allow for fast scaffolding, consistency in layout/design, low code repetition, and minimal stylesheet bloat. The downside is that the HTML can get dense with classes, and can make editing or changing styles less global. See **CSS** below for more details.

## **PHP**

Jaxx.io is built with PHP, primarily for its `includes` and `variables` functionality. It was also employed to make it easier for a non-coder (i.e. Maggie/Di) to make edits to copy and images. Another consideration was as an alternative to static HTML: in the previous jaxx.io architecture, header, menu, and footer content existed on every page. This required inefficient and repetitive manual editing.

### **includes folder**

The header (`header.php`) and footer (`footer.php`) files are contained in the `includes` folder.

### **header.php**

The header contains all meta and OG social tags, JSON-LD/google structured data, [Zendesk Help Widget](https://support.zendesk.com/hc/en-us/articles/229167008-Advanced-customization-of-the-Web-Widget), the [Cookies Consent Banner](https://cookieconsent.osano.com/download/) for GDPR compliance, as well as the site menu/navigation.

##### **> SEO**

The meta `title` and `description` tags are important for SEO and may need ongoing updating contingent on Decentral SEO strategy. The `keyword` meta tag is generally ignored by Google, so while keeping it is advised, it's not essential.

##### **> JSON-LD ~ Schema Micro Data ~ Google Structured Data**

This is JSON code located in a script tag in the `header.php` file. It is added data which supposedly allows for rich-snippet search results (image and post carousels, videos, social accounts/icons, images, etc). As of yet this data has been extremely slow to show or make an impact on jaxx.io search results. For more information on format and syntax check [here](https://developers.google.com/search/docs/guides/intro-structured-data) and [here](https://schema.org/docs/gs.html) , and it can be validated using [this tool](https://search.google.com/structured-data/testing-tool/u/0/).

##### **> Cookies Consent Widget**

As GSPR requires, jaxx.io has a [cookies consent widget](https://cookieconsent.osano.com/download/) that requires user ineraction to remove. Currently it is configured to inform users that we collect cookies/info for tracking (google analytics for example), but users cannot decline the use of these cookies. It requires its own css and js files (in the header and footer respectively), and it can be thoroughly customizable via options:

```html
    <script>            
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#fff",
              "text": "#000"
            },
            "button": {
              "background": "transparent",
              "text": "#000",
              "border": "#000"
            }
          },
          "position": "bottom-left",
            "content": {
            "message": "Like most websites, we use analytics cookies to understand how this site is used — as long as your browser is set to accept them.",
            "dismiss": "Start exploring",
            "link": "Find out more.",
            "href": "https://jaxx.io/legal/thirdparties-current"
          },
        })});
    </script>
```

### **footer.php**

The footer contains all of jaxx.io's internal page links that are not available in the main menu (i.e. about, legal pages, social media accounts). It also houses all scripts and google gtag/analytics tracking code.

##### **> Zendesk Help Widget**

In the bottom right of all pages on jaxx.io is the company's support widget, an embeddable popup from zendesk. It is configurable to a degree, with API and options available on the Zendesk home site, also [here](https://support.zendesk.com/hc/en-us/articles/229167008-Advanced-customization-of-the-Web-Widget).

This script can be found in the `footer.php` file near the bottom:
```html
<!-- Zendesk Widget script -->
 <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1511d491-71d2-4a00-ab84-5d6b388b482d"></script>
```
### **copy.php**

This is where all site copy lives. The concept behind this page was to centralize all text on the site, allow the HTML to be cleaner, and decouple the copy from the HTML to make it: a) easier to read, b) easier to see in context (being able to view an entire page's worth of copy at a glance), and c) easier to update for a non-coder. While you still need HTML tags to style this text, it is still easier to sift through than raw HTML.

### **images.php**

This is where all site image links live. Like copy.php, the concept behind this was to have all image links and `alt` meta tag copy in one file so as to be more easily edited and updated in bulk, and by a non-coder. All that is required, is for a new image link to be pasted between the quotes, and any new `alt` meta data replaced as desired. It also provides a single place to view `alt` copy, allowing for better editing flow over having to sift through code. All images are still controlled/styled by their respective CSS selectors, so images need to chosen/replaced bearing this in mind.

*A note on archived features page images: at the bottom of `images.php` you'll find `// Features` --> which is an archive of the now defunct features.php page. I left these in the file for potential re-use if jaxx.io/features is ever reactivated.

#### **Lazy Loading**

*Included here is a note on lazy loading. Below I outline the use of `recliner.js`, a lazy loading library. It works by adding the class `.lazy` to any `<img>` tag, and adding `data-src` to the img `src` attribute. With the `.lazy` and `.lazy-loaded` CSS classes that recliner adds, **ALL** images by default have their `opacity` set to 0. This is obviously unwanted default behaviour, but since 95% of the site images are indeed intended to be lazy-loaded, it was easier to create a css class to counter this behaviour: i.e. `.opacity-full`.  Add this to any image you DO NOT want to be lazy loaded. See below and/or their [home website](https://sourcey.com/recliner/) for more info.

## **Images**

All of jaxx.io image assets live in the /assets/img folder. As this repo has housed numerous versions of jaxx.io, there is a wide variety of images, logos, icons, and graphics. While the intention was always to cull the folder of unused content, many of the images have either never been used, can be reused/recycled, and/or swapped out for variety and SEO improvement in the future. Thus the folder has accumulated an extensive library of imagery. In a future state, it would likely be wise to remove any duplicates, delete any original photos that were minified but kept for comparison, and cut any unused device or lifestyle images, or unused coin/token icons.

#### **> Image Optimizing + Performance**

For best performance, all images are optimized in both dimensions and file size (using photoshop). Ideal width for main/large/banner images is `=> 1500px`, and ideal file size is `<= 150kb`.  With recliner.js (lazy load library), we can get away with larger file sizes as they are only loaded when in the viewport. Still however, it is best if these sizes not exceed `250-300kb` max. I generally reserve these for page banner images that require best resolution.

## **Updating Jaxx Liberty Versions: Downloads + Changelog**

### **downloads.php**

`downloads.php` and `changeLog.php` are required to be updated whenever Jaxx Liberty is updated to a new version. For `downloads.php`, where the code is commented `<!--download links modal-->` you'll find all the checksums and download links to be updated, again commented for each OS. 

Order

    1. $ shasum -a 256 Jaxx.Liberty-2.2.2.dmg --> update current (i.e. 2.2.2) to new version number (2.2.3).
    2. Update checksum i.e. 012c10ed305bff56684c867a8f24fcfcc0892ae05033404e8f57e09c2dd6957c to current.
    3. Update download link: https://download-liberty.jaxx.io/Jaxx.Liberty-2.2.2.dmg --> at the moment, only the version number (i.e. 2.2.2) needs to be updated.

### **changeLog.php**

The changelog requires the addition of text outlining any fixes or new features added in the upcoming release. This can be obtained from Anik or Jon. Code is sectioned/commented for ease of copy/pasting i.e.:

Under `<!--content-->` copy and paste the following structure:

```html
<!-- version # -->
<h3 class="orange border-bottom w-100 py-3 m-0">Jaxx Liberty 2.2.2:</h3>
<!-- date -->
<p class="font-weight-light border-bottom py-3 mb-2">[06/20/19]</p>
<!-- if new features -->
<h4 class="pt-2">Features:</h4>
<ul>
    <li>Paper wallet import.</li>
    <li>In-app notifications: upgrade prompt when new version is available.</li>
    <li>Added animation for widget title on the home screen.</li>
    <li>Keyboard shortcuts to minimize and hide app on macOS desktop edition.</li>
</ul>
<!-- if new fixes -->
<h4 class="pt-2">Fixed:</h4>
<ul>
    <li>Lorem ipsum...</li>
    <li>Lorem ipsum...</li>
    <li>Lorem ipsum...</li>
</ul>

<!-- separator btw sections -->

<!--  -->
```

## **CSS**

1. Functional [Atomic] css: the site employs the atomic css approach where small, single purpose classes are used based on visual function. Classes are referenced once in the CSS then used repeatedly in the HTML for DRY code and the lightest possible stylesheets. See #4 for class order convention.

2. One stylesheet is used with an effort at organizing structure vertically based on relationship to HTML and page/section order. It starts with resets and global elements, proceeding to more specific styles, and ending with `@media` queries.

3. Naming conventions: 

    - titles and headings: `.site-title`, `.page-title`, `.section-title`
    - p description subheadings and CTAs: `.p-big`, `.p-btn`
    - fonts: `Helvetica Neue` is the primary theme font.
    - background images: `.bg--...`
    - background colors: `.bg-...`
    - logos and icons: `.decentral-logo`

4. Class order conventions:

    - With layout elements, classes generally proceed in the same order (with some variation depending on when edits were made or if certain individual elements needed specific treatment):
        - structural element (`.container, .row, .column`)
        - structural alignment (bootstrap flexbox alignment classes i.e. `.d-flex .justify-content-center .align-items-center`, etc.)
        - height (`.min-500` or `h-100`)
        - text alignment (`.text-left`)
        - background image, bg color, text color (`.orange`, `.navy`, `.text-primary`)
        - spacing (margin and padding)
        - shadow
        - animation classes
        
    - With individual tags or text elements, classes generally proceed as:
        - size (`.h1, .h4, .p-big`)
        - color (`.text-dark`, `.orange`)
        - borders (if any)
        - spacing (margin and padding)
        - text shadow or drop shadow (`.ts`, or `.ds`)
        - animation classes

         *Please see [Boostrap's home site](https://getbootstrap.com/) for more details.

5. Height units
    - initially `vh` was used throughout for base layout heights, ranging from `.min-100` to `.min-70` and `.min-50` classes. Google Chrome (as of Sept 18, 2018) has a bug (they claim it's intentional) with vh units: on mobile, the browser repaints vh elements causing janky scroll behaviour with images specifically.
    - to accomodate continued use of `min-height: 100vh;` for full page images, I made a flexible `@media` class (`.min--100`) that allowd the `vh` unit to be used on desktop and higher, but changed to a fixed height on mobile to avoid the repaint issue.
    - primarily, heights are controlled by reusable `.min-` classes. Base heights are now `.min-700`, with an `-lg` class added to make 700px ~ 500px `@media max-width: 768px`, `.min-500`, `.min-400`, and `.min-300`, the latter primarily for images. This solves the jank issue and offers good scroll UX.

6. SWUP + CSS Animations

    - As mentioned, SWUP adds an `.is-animating` class that is employed in making elements move when entering and exiting the viewport on page transition.
    - You'll see in the stylesheet under `animations` the various classes that are used, including: `.down`, `.up`, `.left`, `.right`, `.zoom` and more. I've also left a number of CSS keyframe animations that can be cool additions to banner text, images, etc. in the future (`.fade-in-fwd`, `.fade-in-top`, etc).

## **JS**

1. SWUP: swup is an ajax plugin that hijacks http requests, swapping page content in/out without page reload. It creates an app-style, view-change experience akin to the Angular router, significantly improving "page-load" or view change speed and overall site performance. It also allows for entrance and exit animations.

2. ***No longer in production use** GSAP: Greensock animation platform is a powerful JS library for creating timeline and other complex animations. Initially AOS and then Scroll Reveal were used, but GSAP offers more versatility and is open source. This file is still in the js folder should future need arise. It can be deleted with no impact on the current site.

3. ***No longer in production use** Scroll Magic: Scroll Magic is a JS library for creating scroll based animations. Combined with GSAP, simple to very complex timeline animations can be achieved. This animation was removed from the site, but the file is still in the js folder should future need arise. It can be deleted with no impact on the current site. 

4. Animation approach and syntax: the site uses CSS classes (+ the SWUP `.is-animating` class) for page entrances and exits. Structural elements (and page banner text elements) are assigned CSS classes (i.e. `.right`, `.right-med`, `.right-slow`) to handle entrance/exit animations during page/view changes.

5. Recliner.js: Recliner is a lazy load library for better performance with images. A css `.lazy` class is added to img tags which loads the image only when it comes into the viewport, and also adds a css class (`.lazy-loaded`) which creates an entrance fade animation for smooth UX (via JS).

6. Tilt.js: Tilt is a small js library that produces a perspective-like tilting effect on mouseover. It is used on the site 404 and 403 pages. See more [here](https://gijsroge.github.io/tilt.js/).

7. Page Scroll to ID: For anchor-scrolling, the [Page Scroll to ID](http://manos.malihu.gr/page-scroll-to-id/) library is used. Any ID set as an `href` attribute will smoothly scroll to that ID on the page. File is located at `/assets/js/jquery.malihu.PageScroll2id.min.js` and config is in the main.js file.

Eg.

```html
<a href="#sec-1">Click Me</a>

<div id="sec-1">Scrolls to me</div>
```

## **Google Analytics**
    
1. GA gtag script is added in footer for general analytics, traffic, page views, bounce rate, etc.

2. Onclick events are added to all download links on the downloads page, links/badges in the downloads section of the homepage (`index.php`), and to links in the `footer.php`. This allows tracking of number and location of download clicks, and the OS users are selecting. Tags are organized by category (destination and/or item i.e. Downloads page or Android), and label (location on page i.e. menu, section, footer) for analysis:

```html
<a href="https://appstore.com" onclick="googleAnalyticsTrigger('Downloads_Page', 'Footer')">
```
## **.htaccess**

1. Multiple .htaccess redirects/301s are employed to point previous .html file extensions to .php, and then to remove .php extensions entirely for pretty urls.
2. Consult Shu Wang on htaccess code (at top of .htaccess file) for countering `%2fa` malicious script injection via URL.
3. Geoblocking code attempts to limit access to jaxx.io from otherwise blacklisted IPs/country codes.

## **Development Server**

1. **NOTE FOR LOCAL DEVELOPMENT**: Because `.php` extensions are removed, pages with not load locally. You'll have to either add the extension to the url manually in the browser, or add extensions back into the file during development (and remove them before pushing to production).
2. Mac has a built in php server: `$ php -S localhost:8000` (or use whichever port is desired).
3. I have been using the `Jaxx_Revolutions` branch in jaxx_reloaded and this branch is still active.

## **dev.jaxx.io**

This is the Jaxx dev site, used for staging and testing.

### It is accessed via SSH using the following:

    1. Commit and push all changes to branch, then login to ssh:
    2. ssh dev.jaxx.io --> will prompt for password
    3. DpmbGPwe --> current password: write down and eventually delete from README.
    4. cd dev.jaxx.io
    5. git pull --> will prompt for password
    6. enter personal Bitbucket password
    7. Crack a beer and enjoy.

### A note on caching

Decentral's Dreamhost and/or Cloudflare services make use of (or have enabled) hard caching. This causes updates to jaxx.io to generally not be viewable unless you/a user does a hard reload, or clears their cache.

To avoid this, I started a practice of adding/updating a random string to the css file in the header.php which breaks the hard caching and enables changes:

i.e. `<link rel="stylesheet" href="/assets/css/main.css?=21">`