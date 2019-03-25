
function displayNewsFeeds() {
    if (window.location.pathname === '/community.php') {

        //jaxx blog API call
        var blogButtonContainer = document.getElementById("blog-button-container");

        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'https://blog.jaxx.io/wp-json/wp/v2/posts?per_page=3');
        ourRequest.onload = function () {
            if (ourRequest.status >= 200 && ourRequest.status < 400) {
                var data = JSON.parse(ourRequest.responseText);
                createHTML(data);
            } else {
                console.log("We connected to the server, but it returned an error.");
            }
        };

        ourRequest.onerror = function () {
            console.log("Connection error");
        };

        ourRequest.send();

        function createHTML(postsContent) {
            var jaxxBlogString = '';
            var blogButtonContainer = document.getElementById("blog-button-container");
            for (i = 0; i < postsContent.length; i++) {

                // heading
                const blogHeading = document.createElement('h2');
                blogHeading.append(postsContent[i].title.rendered);

                // blog content
                const blogContent = document.createElement('div');
                blogContent.innerHTML = postsContent[i].content.rendered.substring(0, 700) + '...';

                // read more button
                const ellipsis = document.createElement('a');
                ellipsis.className = 'btn btn-outline-orange';
                ellipsis.textContent = 'Read More';
                ellipsis.href = postsContent[i].link;
                ellipsis.target = '_blank';

                blogButtonContainer.appendChild(blogHeading);
                blogButtonContainer.appendChild(blogContent);
                blogButtonContainer.appendChild(ellipsis);

            }
        }
    }
}