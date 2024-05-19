let search = document.getElementById('searchInput');
search.addEventListener('keyup', function(e) {
    let text = search.value.toLowerCase();
    const itemPosts = document.querySelectorAll('tr');

    for (let post of itemPosts) {
        let title = post.children[2].textContent.toLowerCase();
        if (title.indexOf(text) === -1) {
            post.style.display = "none";
        } else {
            post.style.display = "table-row";
        }
    }
})