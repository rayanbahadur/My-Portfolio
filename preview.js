document.addEventListener('DOMContentLoaded', function() {
    const previewBtn = document.getElementById("previewBtn");
    const previewDiv = document.getElementById("preview");
    const editBtn = document.getElementById("editBtn");

    previewDiv.style.display = 'none';
    previewBtn.addEventListener("click", function (event) {
        const title = document.getElementById("title").value;
        const description = document.getElementById("description").value;
        const date = new Date().toLocaleString();
        event.preventDefault()// prevent the form from submitting
        previewDiv.innerHTML = `
        <h3>${title}</h3>
        <h5>${date}</h5>
        <p>${description}</p>
        <form method="get" id="addPost" class="preview">
             <input type="text" id="title" name="title" value="${title}">
            <input type="text" id="description" name="description" value="${description}">
            <div id="buttonDiv">         
                <button id="postBtn" name="postBtn" action="addPost.php">Post</button>
                <button id="editBtn" name="editBtn">Edit</button>
            </div>
        </form>
        `;
        previewDiv.style.display = 'block';
    });

});