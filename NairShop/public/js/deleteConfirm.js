$('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
    e.preventDefault();
    var $form=$(this);

    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".name").text();

    $('#title').text($text);
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .on('click', '#delete-btn', function(){
            $form.submit();
        });
});