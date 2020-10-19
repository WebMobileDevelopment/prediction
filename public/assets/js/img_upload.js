$(function() {
    var img_selector = $("#img_selector");
    var prev_img = $("#prev_img");
    var base64_img = $("#base64_img");

    prev_img.on('click', function() {
        img_selector.click();
    })

    img_selector.change(function(e) {
        var files = e.target.files;
        if (files && files[0]) {
            var FR = new FileReader();
            FR.addEventListener("load", function(ev) {
                prev_img.attr('src', ev.target.result);
                base64_img.val(ev.target.result);
            });
            FR.readAsDataURL(this.files[0]);
        }
    });
});