jQuery(document).ready(function($) {
    $('#recipe-importer-form').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append('action', 'process_recipes');

        $('#recipe-importer-message').html('<p>Uploading and processing recipes...</p>');

        $.ajax({
            url: RecipeImporterAjax.ajax_url,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.success) {
                    $('#recipe-importer-message').html('<p>' + response.data + '</p>');
                } else {
                    $('#recipe-importer-message').html('<p>Error: ' + response.data + '</p>');
                }
            },
            error: function(xhr, status, error) {
                $('#recipe-importer-message').html('<p>An error occurred: ' + error + '</p>');
            }
        });
    });
});
