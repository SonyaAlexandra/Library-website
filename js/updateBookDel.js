function updateBookInfoDel() {
    var select = document.getElementById('bookSelect');
    var bookIdInput = document.getElementById('bookId');
    var bookTitleInput = document.getElementById('deleteBookTitle');
    var selectedOption = select.options[select.selectedIndex];
    var bookId = selectedOption.value;
    var bookTitle = selectedOption.text.split(' - ')[1];
    bookIdInput.value = bookId;
    bookTitleInput.value = bookTitle;
}