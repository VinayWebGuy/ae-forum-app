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


$(document).on('click', '.vote-query', function () {
    let $this = $(this);
    let type = $this.data('type');
    let id = $this.data('id');
    $this.siblings('.voteMe').removeClass('active').addClass('vote-query');

    $this.toggleClass('active');
    if ($this.hasClass('active')) {
        voteQuery(id, type);
    }
});
$(document).on('click', '.cancelvote', function () {
    let $this = $(this);
    let id = $this.data('id');
    $('.voteMe').removeClass('active');

    cancelVote(id);
    // $this.remove();
});



function voteQuery(qid, type) {
    $.ajax({
        type: "GET",
        cache: false,
        data: { qid: qid, type: type },
        url: '/main/vote-query',
        success: function (response) {
            $(`#vote-${qid}`).html(response + `<i class="fa fa-chevron-right cancelvote "
            data-id="${qid}"></i>`)
        }
    })
}
function cancelVote(qid) {
    $.ajax({
        type: "GET",
        cache: false,
        data: { qid: qid },
        url: '/main/cancel-vote',
        success: function (response) {
            $(`#vote-${qid}`).html(response)
        }
    })
}


$(document).ready(function () {
    $('#desc').keydown(function (e) {
        if (e.ctrlKey && e.which === 191) {
            e.preventDefault();

            let textarea = this;
            let start = textarea.selectionStart;
            let end = textarea.selectionEnd;
            let text = $(textarea).val();
            let before = text.substring(0, start);
            let after = text.substring(end, text.length);

            $(textarea).val(before + '^^ ^^' + after);

            textarea.selectionStart = textarea.selectionEnd = start + 2;
        }
    });
    $('#comment').keydown(function (e) {
        if (e.ctrlKey && e.which === 191) {
            e.preventDefault();

            let textarea = this;
            let start = textarea.selectionStart;
            let end = textarea.selectionEnd;
            let text = $(textarea).val();
            let before = text.substring(0, start);
            let after = text.substring(end, text.length);

            $(textarea).val(before + '^^ ^^' + after);

            textarea.selectionStart = textarea.selectionEnd = start + 2;
        }
    });

    $('.codebox-copy').on('click', function () {
        var $this = $(this); // Capture the specific button that was clicked
        var codeContent = $this.parent().text().replace('Copy', ''); // Get the code from the specific .codebox
        navigator.clipboard.writeText(codeContent).then(function () {
            $this.text('Copied!'); // Change text only for the clicked button
            setTimeout(function () { $this.text('Copy'); }, 2000); // Reset the text of the clicked button only
        });
    });
});


