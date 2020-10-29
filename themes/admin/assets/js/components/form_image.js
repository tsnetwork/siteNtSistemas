

$('.user-image-div').click((e) => {
    e.preventDefault();
    selectImage();
})

$('input[name=image]').change((e) => {
    e.preventDefault();
    previewImage()
});

function selectImage() {
    $('input[name=image]').trigger('click');
}


function previewImage() {
    var imagem = document.querySelector('input[name=image]').files[0];
    var preview = document.querySelector('#form_image');

    var reader = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if (imagem) {
        reader.readAsDataURL(imagem);
    }
}