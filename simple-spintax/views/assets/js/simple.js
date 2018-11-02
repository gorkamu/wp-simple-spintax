jQuery(function($) {
    $(document).ready(function() {
        $('.simple-loader').hide();

        $('.btn-go-spin').on('click', (e) => {
            e.preventDefault();
            $('.simple-plagiarism-label').text("");
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
                        $('.btn-check-plagiarism').prop("disabled", false);
                    }else{

                    }
                }
            });
        });

        $('.btn-check-plagiarism').on('click', (e) => {
            e.preventDefault();
            $('.simple-plagiarism-label').text("");
            let spinned = $('#spinned').val();
            if(spinned !== "") {
                $.ajax({
                    url:"/wp-admin/admin-ajax.php",
                    type: 'POST',
                    data: {
                        action: 'simple_plagiarism_check',
                        spinned: spinned
                    },
                    beforeSend: function() {
                        $('.simple-loader').show();
                    },
                    complete: function() {
                        $('.simple-loader').hide();
                    },
                    success: function(res){
                        $('.simple-loader').hide();
                        if(res.code === 200 && res.success) {
                            $('.simple-plagiarism-label').text(`Plagiarism Check: ${res.data.result}%`);
                        }else{

                        }
                    }
                });
            }
        });
    });
});