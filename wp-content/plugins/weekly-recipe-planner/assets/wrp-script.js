jQuery(document).ready(function($) {
    var wrp_selectedRecipes = [];

    function wrp_toggleRecipeSelection(recipeId, button) {
        if (!wrp_selectedRecipes.includes(recipeId)) {
            wrp_selectedRecipes.push(recipeId);
            button.text('Added');
        } else {
            wrp_selectedRecipes = wrp_selectedRecipes.filter(id => id !== recipeId);
            button.text('Add to List');
        }
    }

    function wrp_redirectToSummaryPage() {
        if (wrp_selectedRecipes.length > 0) {
            var summaryPageUrl = '../summary-page-url/?recipe_ids=' + wrp_selectedRecipes.join(',');
            window.location.href = summaryPageUrl;
        } else {
            alert('Please select at least one recipe.');
        }
    }

    function wrp_showRecipePopup(recipeId) {
        $.post(wrp_ajax.ajax_url, {
            action: 'wrp_get_recipe_details',
            recipe_id: recipeId
        }, function(response) {
            if (response.success) {
                var popupContent = '<h2>' + response.data.title + '</h2>';
                if (response.data.hero_image) {
                    popupContent += '<img src="' + response.data.hero_image + '" alt="' + response.data.title + '" class="hero-image">';
                }
                popupContent += '<h3>Ingredients</h3><ul>';
                $.each(response.data.ingredients, function(index, ingredient) {
                    popupContent += '<li>' + ingredient.name + ' ' + ingredient.quantity + ' ' + ingredient.unit + '</li>';
                });
                popupContent += '</ul><h3 class="recipe-popup-content-instructions-title">Instructions</h3>';
                $.each(response.data.instructions, function(index, instruction) {
                    popupContent += '<div class="instruction-step">';
                    if (instruction.image) {
                        popupContent += '<img src="' + instruction.image + '" alt="Step image">';
                    }
                    popupContent += '<div class="step-number">' + (index + 1) + '</div>';
                    popupContent += '<div class="step-content">';
                    popupContent += '<p>' + instruction.text + '</p>';
                    popupContent += '</div>';
                    popupContent += '</div>';
                });

                $('#recipe-popup-body').html(popupContent);
                $('#recipe-popup').show();
                $('body').addClass('no-scroll');
            } else {
                alert('Error: ' + response.data);
            }
        });
    }

    function wrp_closeRecipePopup() {
        $('#recipe-popup').hide();
        $('body').removeClass('no-scroll');
    }

    function wrp_filterRecipesByCategory(category) {
        if (category === 'all') {
            $('.recipe-item').show();
        } else {
            $('.recipe-item').hide();
            $('.recipe-item').each(function() {
                var categories = $(this).data('category').toString().split(' ');
                if (categories.includes(category.toString())) {
                    $(this).show();
                }
            });
        }
        $('.filter-button').removeClass('active');
        $('[data-category="' + category + '"]').addClass('active');
    }

    function wrp_searchRecipes(searchTerm) {
        $('.recipe-item').each(function() {
            var title = $(this).data('title');
            if (title.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }

    function wrp_updateRecipesSummary(recipes) {
        var recipesHtml = '';
        $.each(recipes, function(index, recipe) {
            var thumbnail = recipe.thumbnail ? '<img src="' + recipe.thumbnail + '" alt="' + recipe.title + '" class="recipe-thumbnail">' : '';
            recipesHtml += '<div class="recipe-item">';
            recipesHtml += thumbnail;
            recipesHtml += '<h3 class="recipe-title" data-recipe-id="' + recipe.ID + '">' + recipe.title + '</h3>';
            recipesHtml += '<div>' + recipe.content + '</div>';
            recipesHtml += '</div>';
        });
        $('#recipes-content').html(recipesHtml);

        // Handle the image and title click to show the popup
        $('.recipe-title').on('click', function() {
            var recipeId = $(this).data('recipe-id');
            wrp_showRecipePopup(recipeId);
        });
    }

    function wrp_updateIngredientsSummary(people, recipeIds) {
        $.post(wrp_ajax.ajax_url, {
            action: 'wrp_get_summary',
            recipe_ids: recipeIds.split(','),
            people: people
        }, function(response) {
            if (response.success) {
                var ingredientsHtml = '<ul>';
                $.each(response.data.ingredients, function(index, ingredient) {
                    var quantity = ingredient.quantity * people;
                    ingredientsHtml += '<li>' + ingredient.name + ' ' + quantity + ' ' + ingredient.unit + '</li>';
                });
                ingredientsHtml += '</ul>';
                $('#ingredients-content').html(ingredientsHtml);

                wrp_updateRecipesSummary(response.data.recipes);
            } else {
                alert('Error: ' + response.data);
            }
        });
    }

    // Event Handlers
    if ($('.add-recipe-button').length) {
        $('.add-recipe-button').on('click', function() {
            var recipeId = $(this).data('recipe-id');
            wrp_toggleRecipeSelection(recipeId, $(this));
        });
    }

    if ($('#next-step').length) {
        $('#next-step').on('click', function() {
            wrp_redirectToSummaryPage();
        });
    }

    if ($('.recipe-image, .recipe-title').length) {
        $('.recipe-image, .recipe-title').on('click', function() {
            var recipeId = $(this).data('recipe-id');
            wrp_showRecipePopup(recipeId);
        });
    }

    if ($('#recipe-popup-close').length) {
        $('#recipe-popup-close').on('click', function() {
            wrp_closeRecipePopup();
        });

        $('#recipe-popup').on('click', function(e) {
            if ($(e.target).is('#recipe-popup')) {
                wrp_closeRecipePopup();
            }
        });

        $('#recipe-popup-content').on('mousewheel DOMMouseScroll', function(e) {
            var scrollTop = this.scrollTop,
                scrollHeight = this.scrollHeight,
                height = this.clientHeight,
                delta = (e.originalEvent.wheelDelta) ? e.originalEvent.wheelDelta : -e.originalEvent.detail,
                up = delta > 0;

            var prevent = function() {
                e.stopPropagation();
                e.preventDefault();
                e.returnValue = false;
                return false;
            };

            if (!up && -delta > scrollHeight - height - scrollTop) {
                this.scrollTop = scrollHeight;
                return prevent();
            } else if (up && delta > scrollTop) {
                this.scrollTop = 0;
                return prevent();
            }
        });

        $('#recipe-popup-content').on('scroll touchmove mousewheel', function(e) {
            e.stopPropagation();
        });
    }

    if ($('.filter-button').length) {
        $('.filter-button').on('click', function() {
            var selectedCategory = $(this).data('category');
            wrp_filterRecipesByCategory(selectedCategory);
        });
    }

    if ($('#recipe-search').length) {
        $('#recipe-search').on('keyup', function() {
            var searchTerm = $(this).val().toLowerCase();
            wrp_searchRecipes(searchTerm);
        });
    }

    var recipeIds = new URLSearchParams(window.location.search).get('recipe_ids');
    var people = new URLSearchParams(window.location.search).get('people');
    if (recipeIds) {
        wrp_updateIngredientsSummary(people, recipeIds);
    } else {
        $('#recipes-content').html('<p>No recipes selected.</p>');
    }

    if ($('#people-number-summary').length) {
        $('#people-number-summary').on('change', function() {
            var selectedPeople = $(this).val();
            if (selectedPeople) {
                wrp_updateIngredientsSummary(selectedPeople, recipeIds);
            }
        });

        // Increase/Decrease Button Handlers
        var input = document.getElementById('people-number-summary');
        if (input) {
            var decreaseButton = document.getElementById('decrease');
            var increaseButton = document.getElementById('increase');

            function updateValue(newVal) {
                input.value = newVal;
                var recipeIds = new URLSearchParams(window.location.search).get('recipe_ids');
                wrp_updateIngredientsSummary(newVal, recipeIds);
            }

            if (decreaseButton) {
                decreaseButton.addEventListener('click', function() {
                    var currentValue = parseInt(input.value);
                    if (currentValue > parseInt(input.min)) {
                        updateValue(currentValue - 1);
                    }
                });
            }

            if (increaseButton) {
                increaseButton.addEventListener('click', function() {
                    var currentValue = parseInt(input.value);
                    if (currentValue < parseInt(input.max)) {
                        updateValue(currentValue + 1);
                    }
                });
            }

            input.addEventListener('change', function() {
                var newValue = parseInt(input.value);
                if (newValue >= parseInt(input.min) && newValue <= parseInt(input.max)) {
                    updateValue(newValue);
                } else {
                    input.value = wrp_peopleNumber;
                }
            });
        }
    }

    // Function to handle scrolling of the filter buttons
    function scrollFilter(direction) {
        const container = document.querySelector('.filter-buttons');
        const scrollAmount = 500; // Adjust the scroll amount (5 times faster)

        if (container) {
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }
    }

    // Add event listeners to the arrow buttons
    const leftArrow = document.querySelector('.filter-arrow.left');
    const rightArrow = document.querySelector('.filter-arrow.right');

    if (leftArrow && rightArrow) {
        leftArrow.addEventListener('click', function() {
            scrollFilter('left');
        });

        rightArrow.addEventListener('click', function() {
            scrollFilter('right');
        });
    }
});
