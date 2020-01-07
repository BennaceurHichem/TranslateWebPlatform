$(function() {

    $.validator.setDefaults({
      errorClass: 'help-block',
      highlight: function(element) {
        $(element)
          .closest('.form-group')
          .addClass('has-error');
      },
      unhighlight: function(element) {
        $(element)
          .closest('.form-group')
          .removeClass('has-error');
      },
      errorPlacement: function (error, element) {
        if (element.prop('type') === 'checkbox') {
          error.insertAfter(element.parent());
        } else {
          error.insertAfter(element);
        }
      }
    });
  
    $.validator.addMethod('strongPassword', function(value, element) {
      return this.optional(element) 
        || value.length >= 6
        && /\d/.test(value)
        && /[a-z]/i.test(value);
    }, 'votre mot de passe doit contenir plus de 10 chiffres/numèros\'.')
  
    $("#traduction_forme").validate({
      rules: {
        email: {
          required: true,
          email: true,
   
        },
        nom: {
          required: true,
          
        },
        prenom: {
          required: true,
          equalTo: '#password'
        },
        adresse: {
          required: true,
         
          
          
        },
        secondName: {
          required: true,
          nowhitespace: true,
          lettersonly: true
        },
        businessName: {
          required: true
        },
        num_tel: {
          required: true,
          digits: true,
          phonesUK: true
        },
        lang_source: {
          required: true,
          lettersonly: true
        },
        lang_origine: {
          required: true,
          lettersonly: true
        },
        
        comment: {
          required: true,
          
        }
      },
    
    });
  
  });