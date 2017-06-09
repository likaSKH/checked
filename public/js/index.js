$(document).ready(function () {

    var $animation_elements = $('.animation-element');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function () {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');

    $("#ind").width('100%');

    $("#juridical").click(function (e) {

        //border
        $("#jur").width('100%');
        $("#ind").width('0');
        //individuals or not
        $("#ind-form").attr('class', 'hide');
        $("#jur-form").attr('class', 'show');

        //names

        $("#password").attr({name:'', type:''});
        $("#password-confirm").attr({name:'', type:''});
        $("#email").attr({name:'', type:''});

        $("#passwordJur").attr({name:'password', type:'password'});
        $("#passwordJur-confirm").attr({name:'password_confirmation', type:'password'});
        $("#emailJur").attr({name:'email', type:'email'});

    });


    $("#individuals").click(function (e) {
        //border
        $("#jur").width('0');
        $("#ind").width('100%');
        //individuals or not
        $("#ind-form").attr('class', 'show');
        $("#jur-form").attr('class', 'hide');


        $("#password").attr({name:'password', type:'password'});
        $("#password-confirm").attr({name:'password_confirmation', type:'password'});
        $("#email").attr({name:'email', type:'email'});

        $("#passwordJur").attr({name:'', type:''});
        $("#passwordJur-confirm").attr({name:'', type:''});
        $("#emailJur").attr({name:'', type:''});
    });

});