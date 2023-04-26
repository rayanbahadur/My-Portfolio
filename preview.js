document.addEventListener('DOMContentLoaded', function() {
    const previewBtn = document.getElementById("previewBtn");
    const previewDiv = document.getElementById("preview");
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
        `;
        previewDiv.style.display = 'block';
    });
});