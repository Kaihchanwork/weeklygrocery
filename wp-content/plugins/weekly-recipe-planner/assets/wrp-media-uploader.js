jQuery(document).ready(function($) {
    $('#upload-banner-button').click(function(e) {
        e.preventDefault();

        var image = wp.media({
            title: 'Upload Banner Image',
            multiple: false
        }).open()
        .on('select', function() {
            var uploaded_image = image.state().get('selection').first();
            var image_url = uploaded_image.toJSON().url;
            $('#wrp_banner_image').val(image_url);
        });
    });
});
