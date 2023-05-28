(function ($) {

    var form = $("#signup-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            photo: {
                required: false,
                extension: "jpg|jpeg|png"
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },

            name: {
                required: true,
                maxlength: 50
            },
            nik: {
                required: true,
                maxlength: 16,
                minlength: 16
            },
            place: {
                required: true,
                maxlength: 50
            },
            birth: {
                required: true,
                date: true
            },
            phonenumber: {
                required: true,
                minlength: 10,
                maxlength: 15,
                digits: true
            },
            medicalrecords: {
                digits: true,
                maxlength: 5,
                minlength: 5
            }
        },
        messages: {
            image: {
                extension: "Please select a valid image file with jpg, jpeg, or png extension"
            },
            email: {
                required: "Please enter your Email",
                email: "Please enter a valid email address!"
            },
            password: {
                required: "Please enter your Password",
                minlength: "Please enter password at least 8 characters"
            },


            nik: {
                required: "Please enter your NIK",
                maxlength: "Please enter no more than 16 characters",
                minlength: "Please enter password at least 16 characters"
            },
            name: {
                required: "Please enter your Name",
                maxlength: "Please enter no more than 50 characters"
            },
            place: {
                required: "Please enter your Place of Birth",
                maxlength: "Please enter no more than 50 characters"
            },
            birth: {
                required: "Please enter your Date of Birth",
                date: "The date must be in the format YYYY-MM-DD",
            },
            phonenumber: {
                required: "Please enter your Phone Number",
                minlength: "Please enter phone number at least 10 characters",
                maxlength: "Please enter no more than 15 characters",
                digits: "Phone number can only contain digits"
            },
            medicalrecords: {
                digits: "Medical records must only contain digits",
                maxlength: "Medical records cannot exceed 5 characters",
                minlength: "Medical records must have at least 5 characters"
            }
        },
        onfocusout: function (element) {
            $(element).valid();
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parent().parent().find('.form-group').addClass('form-error');
            $(element).removeClass('valid');
            $(element).addClass('error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parent().parent().find('.form-group').removeClass('form-error');
            $(element).removeClass('error');
            $(element).addClass('valid');
        }
    });
    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "fade",
        labels: {
            previous: 'Previous',
            next: 'Next',
            finish: 'Finish',
            current: ''
        },
        titleTemplate: '<h3 class="title">#title#</h3>',
        onInit: function (event, currentIndex) {
            // Suppress (skip) "Warning" step if the user is old enough.
            if (currentIndex === 0) {
                form.find('.action').addClass('test');
            }
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            form.submit();
        },
        onStepChanged: function (event, currentIndex, priorIndex) {


        }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });

})(jQuery);
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.your_picture_image')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
