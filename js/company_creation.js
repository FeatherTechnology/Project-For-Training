$(document).ready(function () {
    $(document).on('click', '#add_branch, #back_btn', function () {
        swapTableAndCreation();
    });
})
function swapTableAndCreation() {
    if ($('.branch_table_content').is(':visible')) {
        $('.branch_table_content').hide();
        $('#add_branch').hide();
        $('.branch_creation_content').show();
        $('#back_btn').show();
    }
    else {
        $('.branch_table_content').show();
        $('#add_branch').show(); // Show the Add Branch button
        $('.branch_creation_content').hide();
        $('#back_btn').hide();
    }
}
    