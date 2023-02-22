<script>
    /* find menu with (menu-list-member) class */
var menu_list_members = $('.menu-list-member');
var search_lists = $('.search-list');
var menu_search_result_container = $('.menu-search-result-container');
var menu_search_result_list = $('.menu-search-result-list');
var menu_search_result_msg = $('.menu-search-result-msg');

$('.search-button').on('click', function(e) {
    setTimeout(() => {
        $('.menu-search-input').focus();
    },500);
    $('.menu-search-input').val('');
    menu_search_result_list.html('');
    menu_search_result_container.attr('hidden', true);
});

$('.menu-search-input').on('keyup', function(e) {
    let text = $(this).val();
    let result = '';
    if(text.length) {
        menu_search_result_container.attr('hidden', false);
        menu_list_members.each(function(e) {
            if($(this).text().toLowerCase().includes(text.toLowerCase())) {
                result += '<li class="list-group-item">' + $(this).prop("outerHTML") + '</li>';
            }
        });

        if(!result.length) {
            menu_search_result_msg.text('No Menu Found.');
        }

        menu_search_result_list.html(result);
    } else {
        menu_search_result_container.attr('hidden', true);
        menu_search_result_list.html('');
        menu_search_result_msg.html('');
    }
});
</script>
