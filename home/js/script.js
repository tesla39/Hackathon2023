// CREATE operation
function createBlog(blogData) {
    blogData.action = 'create';
    fetch('innovation_config.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(blogData)
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
}

// READ operation
function readBlogs() {
    fetch('innovation_config.php')
        .then(response => response.json())
        .then(data => console.log(data))
        .catch(error => console.error('Error:', error));
}

// UPDATE operation
function updateBlog(id, blogData) {
    blogData.action = 'update';
    fetch(`innovation_config.php?id=${id}`, {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(blogData)
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
}

// DELETE operation
function deleteBlog(id) {
    fetch(`innovation_config.php?id=${id}`, {
        method: 'DELETE'
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error('Error:', error));
}