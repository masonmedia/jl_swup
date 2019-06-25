# **Jaxx.io Version 4.0**

This README outlines the various frameworks, languages, approaches, and steps used in the building and maintenance of jaxx.io.

Repo: `jaxx.io_reloaded`, `https://bitbucket.org/decentral1/jaxx.io_reloaded/src/Jaxx_Revolutions/`.

## **SWUP**

This version of jaxx.io uses the [SWUP](https://github.com/gmrchk/swup) library for AJAX page transitions, and the addition of entrance/exit animation classes. This gives the site an app-like user experience: pages do not reload, load time and view changes are fast, and it is easily extensible with simple (or complex) css and js animations.

SWUP works by wrapping the main page content with an `id="swup"`. This alone works to swap content in and out without reload via ajax. The addition of `.transition-` and `.is-animating` classes then offers wide flexibility in creating custom animation options for page transitions and individual element animations (refer the SWUP API). The base class for fading in and out is `.transition-fade`.

SWUP allows for the use of other libraries, however they need to be reinitialized via `document.addEventListener('swup:contentReplaced', function () { -- functions, inits, etc. here -- }`. Previously, GSAP, Scroll Magic, and AOS libraries were used for scroll based and timeline animations. Those scripts are still in the `footer.php` file, however are not currently active due to management decision to remove all scroll based animation.  Should these be required in the future, all that is needed is CSS classes and JS initialization.  See individual library home sites for more info.

## **Layout and Frameworks**

The site uses Bootstrap 4.1. Layout uses native Bootstrap classes, and [atomic css](https://css-tricks.com/lets-define-exactly-atomic-css/). "Atomic CSS is the approach to CSS architecture that favors small, single-purpose classes with names based on visual function." Bootstrap began this approach with version 4, including the use of flexbox. Classes are reusable and allow for fast scaffolding, consistency in layout/design, low code repetition, and minimal stylesheet bloat. The downside is that the HTML can get dense with classes, and - a point that is constantly debated - can make editing or changing styles less global.

## **PHP**

Jaxx.io is built with PHP, primarily for its `includes` and `variables` functionality. It also was employed so as to make copy and images especially able to be updated in a future state by a non-coder i.e. Maggie/Di. Another consideration was as an alternative to static HTML (the previous jaxx.io architecture) where header, menu, and footer content existed on every page, and required inefficient manual editing.

### **includes folder**

The header (`header.php`) and footer (`footer.php`) files are contained in the `includes` folder.

#### **header.php**

The header contains all meta and OG social tags, JSON-LD/google structured data, Zendesk Help Widget, the [Cookies Consent Banner](https://cookieconsent.osano.com/download/) for GDPR compliance, as well as the site menu/navigation.

##### **SEO**

The meta `title` and `description` tags are important for SEO and may need ongoing updating contingent on Decentral SEO strategy. The `keyword` meta tag is generally ignored by Google, so while keeping it is advised, it's not essential.

##### **JSON-LD ~ Schema Micro Data ~ Google Structured Data**

This is JSON code located in a script tag in the header. It is added data which supposedly allows for rich-snippet search results (image and post carousels, videos, social accounts/icons, images, etc). As of yet this data has been extremely slow to show or make an impact on jaxx.io search results. For reference it's format and syntax can be checked out more [here](https://developers.google.com/search/docs/guides/intro-structured-data) and [here](https://schema.org/docs/gs.html) , and it can be validated using [this tool](https://search.google.com/structured-data/testing-tool/u/0/).

#### **footer.php**

The footer contains all of jaxx.io's internal page links that are not available in the main menu (i.e. about, legal pages, social media accounts). It also houses all scripts and google gtag/analytics tracking code.

### **copy.php**

This is where all site copy lives. The concept behind this page was to centralize all text on the site, allow the HTML to be cleaner, and decouple the copy from the HTML to make it: a) easier to read, b) easier to see in context (being able to view an entire page's worth of copy at a glance), and c) easier to update for a non-coder. While you still need HTML tags to style this text, it is still easier to sift through than raw HTML.

### **images.php**

This is where all site image links live. Like copy.php, the concept behind this was to have all image links and `alt` meta tag copy in one file so as to be more easily edited and updated in bulk, and by a non-coder. All that is required, is for a new image link to be pasted between the quotes, and any new `alt` meta data replaced as desired. It also provides a single place to view `alt` copy, allowing for better editing flow over having to sift through code. All images are still controlled/styled by their respective CSS selectors, so images need to chosen/replaced bearing this in mind.

*A note on archived features page images: at the bottom of `images.php` you'll find `// Features` --> which is an archive of the now defunct features.php page. I left these in the file for potential re-use if jaxx.io/features is ever reactivated.

### **Lazy Loading**

*Included here is a note on lazy loading. Below I outline the use of `recliner.js`, a lazy loading library. It works by adding the class `.lazy` to any `<img>` tag, and adding `data-src` to the img `src` attribute. With the `.lazy` and `.lazy-loaded` CSS classes that recliner adds, **ALL** images by default have their `opacity` set to 0. This is obviously unwanted default behaviour, but since 95% of the site images are indeed intended to be lazy-loaded, it was easier to create a css class to counter this behaviour: i.e. `.opacity-full`.  Add this to any image you DO NOT want to be lazy loaded. See below and/or their [home website](https://sourcey.com/recliner/) for more info.

## **Images**

All of jaxx.io image assets live in the /assets/img folder. As this repo has housed numerous versions of jaxx.io, there is a wide variety of images, logos, icons, and graphics. While the intention was always to cull the folder of unused content, mamny of the images could be reused and/or swapped out for variety and SEO in the future. Thus the folder has accumulated an extensive library of imagery. In a future state, it would likely be wise to remove any duplicates, delete any original photos that were minified but kept for comparison, and cut any unused device or lifestyle images, or unused coin/token icons.

## **Updating Jaxx Liberty Versions ~ Downloads + Changelog**

### **downloads.php**

`downloads.php` and `changeLog.php` are required to be updated whenever Jaxx Liberty is updated to a new version. For `downloads.php`, where the code is commented `<!--download links modal-->` you'll find all the checksums and download links to be updated, again commented for each OS. 

Order
    1. `$ shasum -a 256 Jaxx.Liberty-2.2.2.dmg` --> update current (i.e. 2.2.2) to new version #
    2. Update checksum i.e. `012c10ed305bff56684c867a8f24fcfcc0892ae05033404e8f57e09c2dd6957c` to current
    3. Update download link: `https://download-liberty.jaxx.io/Jaxx.Liberty-2.2.2.dmg` --> at the moment, only the version number (i.e. 2.2.2) needs to be updated.

### **changeLog.php**

The changelog requires the addition of text outlining any fixes or new features added in the upcoming release. This can be obtained from Anik or Jon. Code is sectioned/commented for ease of copy/pasting i.e.:

Under `<!--content-->` copy and paste the following structure:

`
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
`
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
        - color (`.text-dark`)
        - borders (if any)
        - spacing (margin and padding)
        - text shadow (`.ts`)
        - animation classes

         *Please see [Boostrap's home site](https://getbootstrap.com/) for more details.

5. Height units
    - initially `vh` was used throughout for base layout heights, ranging from `.min-100` to `.min-70` and `.min-50` classes. Google Chrome (as of Sept 18, 2018) has a bug (they claim it's intentional) with vh units: on mobile, the browser repaints vh elements causing janky scroll behaviour with images specifically.
    - to accomodate continued use of `min-height: 100vh;` for full page images, I made a flexible `@media` class (`.min--100`) that allowd the `vh` unit to be used on desktop and higher, but changed to a fixed height on mobile to avoid the repaint issue.
    - primarily, heights are controlled by reusable `.min-` classes. Base heights are now `.min-700`, with an `-lg` class added to make 700px ~ 500px `@media max-width: 768px`, `.min-500`, `.min-400`, and `.min-300`, the latter primarily for images. This solves the jank issue and offers good scroll UX.

## **JS**

1. SWUP: swup is an ajax plugin that hijacks http requests, swapping page content out without page reload. It creates an app style view-change experience akin to the angular router, significantly improving "page-load" or view change speed and overall site performance, in addition to allowing for entrance and exit animations.

2. **No longer in production use** GSAP: Greensock animation platform is a powerful js library for creating timeline and other complex animations. Initially AOS and then Scroll Reveal were used, but GSAP offers more versatility and is open source.

3. **No longer in production use** Animation approach and syntax: the site uses GSAP and Scroll Magic for scroll animations, and SWUP css classes for page entrances and exits. Sections receive a GSAP trigger class (`.stagger-right`), which then triggers individual text element animations (i.e. `.slide-right`) on entry into the viewport. Structural elements (and page banner text elements) are assigned css SWUP classes (i.e. `.right`, `.right-med`, `.right-slow`) to handle exit animations during page/view changes.

4. Recliner.js: Recliner is a lazy load library for better performance with images. A css `.lazy` class is added to img tags which loads the image only when it comes into the viewport, and also adds a css class (`.lazy-loaded`) which creates an entrance fade animation for smooth UX (via JS).

4. Tilt.js: Tilt is a small js library that produces a perspective-like tilting effect on mouseover. It is used on the site 404 and 403 pages. See more [here](https://gijsroge.github.io/tilt.js/).

## **Google Analytics**
    
1. GA gtag script is added in footer for general analytics, traffic, page views, bounce rate, etc.

2. Onclick events will be been added to all <a>, <button>, and nav links (like jaxx.io) to track user flow through the site.  Tags will be added once a more permanent URL/domain structure is adopted by Decentral (subdomains vs. subdirectories). Tags will be organized by category (destination and/or item i.e. Downloads page or Android), and given a label (location on page i.e. menu, section, footer) for analysis: <onclick="googleAnalyticsTrigger('Downloads_Page', 'Footer')">

## **.htaccess**

1. Multiple .htaccess redirects/301s are employed to point previous .html file extensions to .php, and then to remove .php extensions entirely for pretty urls.
2. Consult Shu Wang on htaccess code (at top of .htaccess file) for countering %2fa malicious script injection via URL.
3. Geoblocking code attempts to limit access to jaxx.io from otherwise blacklisted IPs/country codes.

## **.Development**

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

Decentral's Dreamhost and/or Cloudflare services make use of (or have enabled) hard caching. This causes updates to jaxx.io to generally not be viewable unless you/a user does a hard reload of the page, or clears their cache.

To avoid this, I started a practice of adding/updating a random string to the css file in the header.php which breaks the hard caching and enables changes:

i.e. `<link rel="stylesheet" href="/assets/css/main.css?=21">`