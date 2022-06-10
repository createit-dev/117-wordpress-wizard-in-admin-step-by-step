(function($) {

    $(".js-save-and-go").click(function(){
        const $that = $(this);
        const backUrl = $that.attr("href");

        $('.js-form-wizard input[name=redirectToUrl]').val(backUrl);

        $(".js-form-wizard #submit5").click();
    });

    $(".js-submit").click(function(){
        $(".js-form-wizard #submit5").click();
    });

})( jQuery );