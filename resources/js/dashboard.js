document.getElementById("image").addEventListener("change", uploadImage);

document.addEventListener("DOMContentLoaded", function () {
    const alertElements = document.querySelectorAll(".z-50 > div");

    alertElements.forEach((alertElement, index) => {
        setTimeout(
            function () {
                alertElement.classList.add("opacity-0");
                setTimeout(function () {
                    alertElement.remove();
                }, 1500); // Menghilangkan elemen setelah transisi selesai (0.5 detik)
            },
            (index + 1) * 1500,
        ); // Menunggu sebelum memulai transisi berdasarkan indeks
    });
});

function uploadImage() {
    const imageInput = document.getElementById("image");
    const imagePreview = document.getElementById("imagePreview");

    if (imageInput.files.length > 0) {
        const imageFile = imageInput.files[0];
        const reader = new FileReader();

        reader.onload = function (event) {
            const imageUrl = event.target.result;
            const imageElement = document.createElement("img");
            imageElement.src = imageUrl;
            imageElement.style.maxWidth = "150px";
            imagePreview.innerHTML = "";
            imagePreview.appendChild(imageElement);
        };

        reader.readAsDataURL(imageFile);
    } else {
        imagePreview.innerHTML = "No image selected.";
    }
}
Window.uploadImage = uploadImage;

function deleteImage() {
    var imgElement = document.querySelector("#imagePreview img");
    if (imgElement) {
        imgElement.parentNode.removeChild(imgElement);
    }
}
Window.deleteImage = deleteImage;
