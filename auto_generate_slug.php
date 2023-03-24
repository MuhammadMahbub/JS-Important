
	const category_name = document.querySelector("#category_name")
        const cat_slug = document.querySelector("#cat_slug")

        category_name.addEventListener('keyup', function() {
            $('#cat_slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-").replace(/\?/g, '-'));
        })