$('.faq-ques').click(function () {
    $('.single-faq').removeClass('open')
    let parent = $(this).parent().toggleClass('open');

})


$(document).ready(function () {
    $('.view-password').click(function () {
        let passwordInput = $('#password');
        let passType = passwordInput.attr('type');

        if (passType === 'password') {
            passwordInput.attr('type', 'text');
            $(this).removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            passwordInput.attr('type', 'password');
            $(this).removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });

    function updateHiddenInput() {
        var tags = [];
        $('.single-tag span').each(function () {
            tags.push($(this).text());
        });
        $('#hiddenTags').val(tags.join(','));
    }

    function updateHiddenInput() {
        var tags = [];
        $('.single-tag span').each(function () {
            tags.push($(this).text());
        });
        $('#hiddenTags').val(tags.join(','));
    }

    $('#tags').on('keypress', function (e) {
        $(this).removeClass('error');
        if (e.which === 13) {
            e.preventDefault();
            var tagValue = $(this).val().trim();
            var isDuplicate = false;
            $('.single-tag span').each(function () {
                if ($(this).text() === tagValue) {
                    isDuplicate = true;
                }
            });

            if (tagValue && !isDuplicate) {
                $('.tag-section').append('<div class="single-tag"><span>' + tagValue + '</span> <i class="fa fa-times"></i></div>');
                $(this).val('');
                $(this).removeClass('error');
                updateHiddenInput();
            } else if (isDuplicate) {
                $(this).addClass('error');
            }
        }
    });

    $('.tag-section').on('click', '.fa-times', function () {
        $(this).parent('.single-tag').remove();
        updateHiddenInput();
    });
});



$('.view-noti').click(function () {
    $('.all-notifications').toggleClass('open')
})


$('.menu-bar').click(function () {
    $('.menu').addClass('open')
    $('.close-bar').addClass('open')
})
$('.close-bar').click(function () {
    $('.menu').removeClass('open')
})

$('#recent_type').change(function () {
    let type = $(this).val()

    if (type == "mine") {
        window.location.href = "/main/my-queries";
    }
})