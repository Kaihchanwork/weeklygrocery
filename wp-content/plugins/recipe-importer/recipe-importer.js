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
            xhr: function() {
                var xhr = new window.XMLHttpRequest();

                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 3 || xhr.readyState == 4) {
                        var lines = xhr.responseText.split('\n');
                        lines.forEach(function(line) {
                            if (line.trim()) {
                                try {
                                    var data = JSON.parse(line);
                                    if (data.message) {
                                        $('#recipe-importer-message').append('<p>' + data.message + '</p>');
                                    }
                                } catch (e) {
                                    // Handle non-JSON lines if any
                                }
                            }
                        });
                    }
                };

                return xhr;
            },
            success: function(response) {
                if (response.success) {
                    $('#recipe-importer-message').append('<p>All recipes processed successfully.</p>');
                } else {
                    $('#recipe-importer-message').append('<p>Error: ' + response.data + '</p>');
                }
            },
            error: function(xhr, status, error) {
                $('#recipe-importer-message').html('<p>An error occurred: ' + error + '</p>');
            }
        });
    });
});
