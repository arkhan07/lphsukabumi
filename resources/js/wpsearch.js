searchWordPress = function () {
    var searchTerm = document.getElementById("WpSearchInput").value;
    var searchResultDiv = document.getElementById("WpSearchResult");

    if (searchTerm === "") {
        searchResultDiv.innerHTML = "";
        return;
    }
    var apiURl = "https://blog.saffmedic.com/wp-json/wp/v2/posts?search=" + searchTerm;

    fetch(apiURl)
        .then(function (response) {
            return response.json();
        })
        .then(function (post) {
            displaySearchResult(post);
        })
        .catch(function (error) {
            console.log(error);
        });
}

displaySearchResult = function (post) {
    var searchResultDiv = document.getElementById("WpSearchResult");
    searchResultDiv.innerHTML = "";

    if (post.length === 0) {
        searchResultDiv.innerHTML =
            "<p>No result found.</p>"
    } else {
        post.forEach(function (post) {
            var postTitle = post.title.rendered;
            var postSlug = post.slug;

            var postDiv = document.createElement('div');
            postDiv.className =
                "search-content p-4 text-darkteal bg-white px-4 py-3 my-2 transform hover:bg-darkteal hover:text-white duration-200 cursor-pointer";
            postDiv.style = ""

            var postTitleLink = document.createElement('h5');


            postTitleLink.textContent = postTitle;
            postTitleLink.addEventListener("click", function () {
                window.location.href = `/artikel/${postSlug}`;
            });

            postDiv.appendChild(postTitleLink)
            searchResultDiv.appendChild(postDiv)
        });
    }
}