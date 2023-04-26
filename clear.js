document.addEventListener('DOMContentLoaded', function() {

    const titleInput = document.getElementById("title");
    const descriptionInput = document.getElementById("description");
    const postButton = document.getElementById("postBtn");
    const clearButton = document.getElementById("clearBtn");

    postButton.addEventListener('click', (event) => {

        const title = titleInput.value;
        const description = descriptionInput.value;
        if (title.trim() === '' || description.trim() === '') {
            event.preventDefault();
        }
        document.getElementById("addPost").submit();
    });

// Clear the form using the clear.js script
    clearButton.addEventListener("click", function () {
        if (titleInput.value !== "") {
            titleInput.value = "";
        }
        if (descriptionInput.value !== "") {
            descriptionInput.value = "";
        }
    });
});