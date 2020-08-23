    function previewImages() {
        $('#img-preview').empty()
        if (this.files) $.each(this.files, readAndPreview);

        function readAndPreview(i, file) {
            const reader = new FileReader();
            $(reader).on("load", function () {
                $('#img-preview').append('<div class="col-md-3" style="height: 200px;margin-bottom: 16px">' +
                    '<img id="img-preview" class="img-thumbnail h-100" src="' + this.result + '" style="object-fit: cover"/>' +
                    '</div>');
            });
            reader.readAsDataURL(file);
        }
    }
    $('#fileuploads').on("change", previewImages);

