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
            if (title.trim() === '') {
                titleInput.style.borderColor = "red";
                titleInput.style.borderWidth = "2px";
                if (description.trim() !== '') {
                    descriptionInput.style.borderWidth = "0px";
                }
            }
            if (description.trim() === '') {
                descriptionInput.style.borderColor = "red";
                descriptionInput.style.borderWidth = "2px";
                if (title.trim() !== '') {
                    titleInput.style.borderWidth = "0px";
                }
            }
        }
        else {
            document.getElementById("addPost").submit();
        }
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