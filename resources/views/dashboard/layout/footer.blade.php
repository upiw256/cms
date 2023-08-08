<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>

        <script>
            ClassicEditor.create( document.querySelector( '#editor' )).catch( error => {console.error( error )});
            document.getElementById('image').addEventListener('change', uploadImage);

            function uploadImage() {
                const imageInput = document.getElementById('image');
                const imagePreview = document.getElementById('imagePreview');

                if (imageInput.files.length > 0) {
                    const imageFile = imageInput.files[0];
                    const reader = new FileReader();

                    reader.onload = function (event) {
                        const imageUrl = event.target.result;
                        const imageElement = document.createElement('img');
                        imageElement.src = imageUrl;
                        imageElement.style.maxWidth = '150px';
                        imagePreview.innerHTML = '';
                        imagePreview.appendChild(imageElement);
                    };

                    reader.readAsDataURL(imageFile);
                } else {
                    imagePreview.innerHTML = 'No image selected.';
                }
            }

            function deleteImage() {
                const imagePreview = document.getElementById('imagePreview');
                if (uploadedImage) {
                    imagePreview.removeChild(uploadedImage);
                    uploadedImage = null;
                }
                // imagePreview.innerHTML = 'No image selected.';
            }
        </script>
    </body>
</html>