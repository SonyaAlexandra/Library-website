function openBookPopup(bookId, synopsis) {
    var modalBody = document.getElementById("bookModalBody");
    modalBody.textContent = synopsis;
    
    var bookModal = new bootstrap.Modal(document.getElementById("bookModal"));
    bookModal.show();
}

function addShadow(element) {
    element.classList.add("shadow");
    element.style.transform = "scale(1.1)";
    element.style.transition = "transform 0.3s ease";
}

function removeShadow(element) {
    element.classList.remove("shadow");
    element.style.transform = "";
    element.style.transition = "";
}
