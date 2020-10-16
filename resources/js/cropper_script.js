$(function() {
    var show_img = document.getElementById('show_image');
    var file_selector = $("#cropper_file_selector");
    var origin_img;
    var img_source;
    var cropper;
    var crop_options = {
        // Define the view mode of the cropper
        viewMode: 3,
        // 0, 1, 2, 3
        // Define the dragging mode of the cropper
        dragMode: 'crop',
        // 'crop', 'move' or 'none'
        // Define the initial aspect ratio of the crop box
        initialAspectRatio: NaN,
        // Define the aspect ratio of the crop box
        aspectRatio: 1,
        // An object with the previous cropping result data
        data: null,
        // A selector for adding extra containers to preview
        preview: '#preview_img',
        // Re-render the cropper when resize the window
        responsive: true,
        // Restore the cropped area after resize the window
        restore: true,
        // Check if the current image is a cross-origin image
        checkCrossOrigin: true,
        // Check the current image's Exif Orientation information
        checkOrientation: true,
        // Show the black modal
        modal: true,
        // Show the dashed lines for guiding
        guides: true,
        // Show the center indicator for guiding
        center: true,
        // Show the white modal to highlight the crop box
        highlight: true,
        // Show the grid background
        background: true,
        // Enable to crop the image automatically when initialize
        autoCrop: true,
        // Define the percentage of automatic cropping area when initializes
        autoCropArea: 0.8,
        // Enable to move the image
        movable: true,
        // Enable to rotate the image
        rotatable: true,
        // Enable to scale the image
        scalable: true,
        // Enable to zoom the image
        zoomable: true,
        // Enable to zoom the image by dragging touch
        zoomOnTouch: true,
        // Enable to zoom the image by wheeling mouse
        zoomOnWheel: true,
        // Define zoom ratio when zoom the image by wheeling mouse
        wheelZoomRatio: 0.1,
        // Enable to move the crop box
        cropBoxMovable: true,
        // Enable to resize the crop box
        cropBoxResizable: true,
        // Toggle drag mode between "crop" and "move" when click twice on the cropper
        toggleDragModeOnDblclick: true,
        // Size limitation
        minCanvasWidth: 0,
        minCanvasHeight: 0,
        minCropBoxWidth: 0,
        minCropBoxHeight: 0,
        minContainerWidth: 200,
        minContainerHeight: 100,
        // Shortcuts of events
        ready: null,
        cropstart: null,
        cropmove: null,
        cropend: null,
        crop: null,
        zoom: null
    };
    if (typeof CUSTOM_CROP_OPTIONS != "undefined") {
        Object.keys(CUSTOM_CROP_OPTIONS).forEach(function(key) {
            crop_options[key] = CUSTOM_CROP_OPTIONS[key];
        });
    }
    $('#crop_modal').on('shown.bs.modal', function() {
        cropper = new Cropper(show_img, crop_options);
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


        var canvas;
        if (crop_options.aspectRatio == 1) {
            canvas = cropper.getCroppedCanvas({
                width: 160,
                height: 160,
            });
        } else {
            canvas = cropper.getCroppedCanvas();
        }


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