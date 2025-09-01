document.addEventListener('DOMContentLoaded', function () {
    const previewImages = document.querySelectorAll('img');
    const fileInputs = document.querySelectorAll('input[type="file"]');

    fileInputs.forEach((input, index) => {
        input.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    previewImages[index].src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    });
});