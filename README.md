# **Jaxx.io SWUP Version**

The official website of Jaxx Liberty, Canada's leading blockchain company. Decentral is the maker of Jaxx Liberty, the leading multi-platform cryptocurrent wallet, and was founded by Anthony Di Iorio, co-founder of Ethereum.

For more information see [jaxx.io](https://jaxx.io) and [decentral.ca](https://decentral.ca).

## **SWUP**

This version of jaxx.io uses the [SWUP](https://github.com/gmrchk/swup) library for AJAX page transitions and the addition of entrance/exit animation classes. This gives the site an app-like user experience: pages do not reload, view changes are fast, the initial page load is light, and it is easily extensible with simple (or complex) css and js animations.

SWUP works by wrapping main page content (any content you want changed without refresh) in a swup id `id="swup"`. This alone works to swap out content without reload. The addition of a `.transition-` class then offers great flexibility in creating custom animation options (refer the SWUP API). The base class for fading in and out is `.transition-fade`.

## **Layout and Frameworks**

The site uses Bootstrap 4.1. Layout uses native Bootstrap classes, and functional css.

## **PHP**

PHP is used minimally for header and footer includes.

## **CSS**

1. Functional [Atomic] css: the site employs the atomic css approach where small, single purpose classes are used based on visual function. Classes are referenced once in the CSS then used repeatedly in the HTML for DRY code and the lightest possible stylesheets.

*Note: while great for fast scaffolding and modular, resuable architecture, the HTML can get heavy with classes, specifically when it comes to spacing (padding and margin styles). Effort has been made to keep styles functional as much as possible, with added stylesheet classes only when necessary. See #4 for class order convention.

2. One stylesheet is used with an effort at organizing structure vertically based on relationship to HTML and page/section order. It starts with resets and global elements, proceeding to more specific styles.

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
        - alignment (bootstrap flexbox alignment classes i.e. `.d-flex .justify-content-center`, etc.)
        - height (`.min-500`)
        - text alignment
        - background image, bg color, text color
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

5. Height units
    - initially `vh` was used throughout for base layout heights, ranging from `.min-100` to `.min-70` and `.min-50` classes. Google Chrome (as of Sept 18, 2018) has a bug (they claim it's intentional) with vh units: on mobile, the browser repaints vh elements causing janky scroll behaviour with images specifically.
    - decentral.ca uses fixed min-height classes (flexible in media queries). Base heights are now `.min-700`, with an `-lg` class added to make 700px ~ 500px @media (max-width: 768px), `.min-500`, `.min-400`, and `.min-300`, the latter primarily for images. This solves the jank issue and offers good scroll UX.

## **JS**

**Multiple JS plugins are used on the site.**

1. SWUP: swup is an ajax plugin that hijacks http requests, swapping page content out without page reload. It creates an app style view-change experience akin to the angular router, significantly improving "page-load" or view change speed and overall site performance, in addition to allowing for entrance and exit animations.

2. GSAP: Greensock animation platform is a powerful js library for creating timeline and other complex animations. Initially AOS and then Scroll Reveal were used, but GSAP offers more versatility and is open source.

3. Animation approach and syntax: the site uses GSAP for scroll animations, and SWUP css classes for page entrances and exits. Sections receive a GSAP trigger class (`.stagger-right`), which then triggers individual text element animations (i.e. `.slide-right`) on entry into the viewport. Structural elements (and page banner text elements) are assigned css SWUP classes (i.e. `.right`, `.right-med`, `.right-slow`) to handle exit animations during page/view changes.

4. Recliner.js: Recliner is a lazy load library for better performance with images. A css `.lazy` class is added to img tags which loads the image only when it comes into the viewport, and also adds an entrance fade animation for smooth UX.

4. Tilt.js: Tilt is a small js library that produces a perspective-like tilting effect on mouseover. It is used on the site 404 and 403 pages. See more [here](https://gijsroge.github.io/tilt.js/).

## **Google Analytics**
    
1. GA gtag script is added in footer for general analytics, traffic, page views, bounce rate, etc.

2. Onclick events will be been added to all <a>, <button>, and nav links (like jaxx.io) to track user flow through the site.  Tags will be added once a more permanent URL/domain structure is adopted by Decentral (subdomains vs. subdirectories). Tags will be organized by category (destination and/or item i.e. Downloads page or Android), and given a label (location on page i.e. menu, section, footer) for analysis: <onclick="googleAnalyticsTrigger('Downloads_Page', 'Footer')">

## **.htaccess**

1. Multiple .htaccess redirects/301s are employed to point previous .html file extensions to .php, and then to remove .php extensions entirely for pretty urls.