function previewFile(input, loadFile) {
    if (!input.files || !input.files[0]) {
        return;
    }

    var reader = new FileReader();
    reader.onload = function (e) {
        loadFile(e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
}
