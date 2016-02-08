var $cog = $('.rotate'),
    $body = $(document.body),
    bodyHeight = $body.height();

$(window).scroll(function () {
    $cog.css({
        'transform': 'rotate(' + ($body.scrollTop() / bodyHeight * 360) + 'deg)'
    });
});

///
