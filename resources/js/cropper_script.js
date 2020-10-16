$(function() {
    var show_img = document.getElementById('show_image');
    var file_selector = $("#cropper_file_selector");
    var origin_img;
    var img_source;
    var cropper;


    $('#crop_modal').on('shown.bs.modal', function() {
        cropper = new Cropper(show_img, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '#preview_img'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $(".imgFileUpload").on('click', function() {
        origin_img = $(this);
        var p_id = "#" + $(this).parent().attr('id');
        img_source = $(p_id + " .img_source");
        file_selector.click();
    })

    file_selector.change(function(e) {
        var files = e.target.files;

        var done = function(url) {
            $(show_img).attr("src", url);
            $('#crop_modal').modal('show');
        };
        if (files && files.length > 0) {
            var file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });


    $("#crop_btn").on('click', function() {
        var canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });

        canvas.toBlob(function(blob) {
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
                img_source.val(base64data); // base64data = ;
                origin_img.attr("src", base64data);
                $('#crop_modal').modal('hide');
            }
        });
    });

});