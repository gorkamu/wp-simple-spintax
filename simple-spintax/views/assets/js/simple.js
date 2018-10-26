jQuery(function($) {
    $(document).ready(function() {
        $('.btn-go-spin').on('click', (e) => {
            e.preventDefault();
            let original = $('#original').val();
            $.ajax({
                url:"/wp-admin/admin-ajax.php",
                type: 'POST',
                data: {
                    action: 'simple_go_spin',
                    original: original
                },
                success: function(res){
                    if(res.code === 200 && res.success) {
                        $('#spinned').text(res.data.spinned);
                    }else{

                    }
                }
            });
        });
    });
});