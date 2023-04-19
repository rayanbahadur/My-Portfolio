const titleInput = document.getElementById("title");
const descriptionInput = document.getElementById("description");
const postButton = document.getElementById("postBtn");
const clearButton = document.getElementById("clearBtn");

postButton.addEventListener("click", function (event) {
    event.preventDefault(); // prevent default form submission behavior
    const title = titleInput.value;
    const description = descriptionInput.value;
    // do something with title and description
});

clearButton.addEventListener("click", function () {
    titleInput.value = "";
    descriptionInput.value = "";
});
