$(document).ready(function(){
    $('#idCard').prop('disabled', true);

    $('#enableID').click(function(){
        if($(this).is(':checked'))
        {
            $('#idCard').prop('disabled', false);
        }
        else
        {
            $('#idCard').prop('disabled', true);
        }
    });
});
// Initialize Select2
$(document).ready(function() {
    $('#selectWithSearch').select2();
});
