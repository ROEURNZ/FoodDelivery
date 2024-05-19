let res = document.querySelector('#searcher');
res.addEventListener('keyup', function(e) {
    let text = res.value.toLowerCase();
    const itemPosts = document.querySelectorAll('#card');
    // const foods = document.querySelectorAll("")
    for (let post of itemPosts) {
        let title = post.children[0].children[1].children[0].children[0].children[0].textContent.toLowerCase();
        if (title.indexOf(text) === -1) {
            post.style.display = "none";
        } else {
            post.style.display = "block";
        }
    }

    
    
})


