
$(document).ready(function() {
    
    const urlParams = new URLSearchParams(window.location.search);
    const postId = urlParams.get('id');
console.log(postId);
    
    $.getJSON('blogs.json', function(data) {
       
        const post = data.find(post => post.id == postId);

       
        $('#date').text(post.date);
        $('#name').text(post.category);
        $('#content').text(post.content);
    });
});
