
(function ($) {
    "use strict";
    var input = $('.validate-input .input100');
    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });
    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });
    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        } else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }
    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }
    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
})(jQuery);
function choose_file_js() {
    document.getElementById("directory").disabled = true;
    document.getElementById("directory").value = "";
    document.getElementById("directory").required = false;
    document.getElementById("directory").title = "Please check directory!";
    document.getElementById("file").title = "Input path to file upload.";
    document.getElementById("file").disabled = false;
    document.getElementById("file").focus();
    document.getElementById("file").required = true;
}
function choose_directory_js() {
    document.getElementById("file").disabled = true;
    document.getElementById("file").value = "";
    document.getElementById("file").required = false;
    document.getElementById("file").title = "Please check file!";
    document.getElementById("directory").title = "Input path to file upload";
    document.getElementById("directory").disabled = false;
    document.getElementById("directory").focus();
    document.getElementById("directory").required = true;
}