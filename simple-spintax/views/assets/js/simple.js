jQuery(function($) {
    $(document).ready(function() {
        $('.simple-loader').hide();

        $('.btn-go-spin').on('click', (e) => {
            e.preventDefault();
            let spintemplate = $('#spin-template').val();
            let kw = $('#kw').val();
            let title = $('#title').val();
            let excerpt = $('#excerpt').val();
            let make = 'posts';
            let capitalize = $("#capitalize_kw").is(':checked');
            let kwasslug = $("#kwasslug").is(':checked');
            let ctrsymbol = $("#ctrsymbol").val();
            
            if($("#make_posts").is(':checked')) {  
                make = 'posts';
            }
            
            if($("#make_pages").is(':checked')) {  
                make = 'pages';
            }
            
            $.ajax({
                url:"/wp-admin/admin-ajax.php",
                type: 'POST',
                data: {
                    action: 'simple_go_spin',
                    kw: kw,
                    title: title,
                    excerpt: excerpt,
                    spintemplate: spintemplate,
                    make: make,
                    capitalize: capitalize,
                    ctrsymbol: ctrsymbol,
                    kwasslug: kwasslug
                },
                success: function(res){
                    if(res.code === 200 && res.success) {
                        let type = res.data.type === 'post' ? 'artículo' : 'páginas';
                        alert(res.data.count + " " + type + " creados");
                    }
                }
            });
        });
    });
});