/*(function ($) {
    Drupal.behaviors.ajaxExample = {
        attach: function (context, settings) {
            $('#load_more_ajax', context).click(function(){
                jQuery("#ajax-target").load("/load-more/2");
                return false;
            });
        }
    };
}(jQuery));*/

(function($) {
    Drupal.behaviors.load_more_ajax = {
        'attach': function(context) {
            $('#load_more_ajax', context).bind('click', function() {
                $('.ajax-progress-throbber').show();
                var num = $(this).data('num');
                $('#load_more_ajax').data('num', (num + 1));
                $.get('/load-more/' + parseInt(num, 10), null, html);

                if(num >= 3) {
                    $('#load_more_ajax').hide();
                }

                setTimeout(function(){
                    $('.ajax-progress-throbber').hide();
                }, 1000);

                return false;
            });
        }
    }

    var html = function(response) {
        $('#ajax-target').replaceWith(response.data);
    }
})(jQuery);