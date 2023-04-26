document.addEventListener('DOMContentLoaded', function() {
    const previewBtn = document.getElementById("previewBtn");
    const previewDiv = document.getElementById("preview");
    previewBtn.addEventListener("submit", function () {
        const title = document.getElementById("title").value;
        const description = document.getElementById("description").value;
        previewDiv.innerHTML = `Title: ${title}<br>Description: ${description}`;
    });
});
