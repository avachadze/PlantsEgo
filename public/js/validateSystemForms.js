$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='addSensor']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        name: "required",
        topic: "required"
      },
      // Specify validation error messages
      messages: {
        name: "Por favor, introduzca un nombre para identificar el sensor",
        lastname: "Por favor, introduzca su apellido",
        password: {
          required: "Por favor proporcione una contraseña",
          minlength: "Su contraseña debe tener al menos 5 caracteres."
        },
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
    
    $("form[name='addPlant']").validate({
        // Specify validation rules
        rules: {
          // The key name on the left side is the name attribute
          // of an input field. Validation rules are defined
          // on the right side
          firstname: "required",
          lastname: "required",
          email: {
            required: true,
            // Specify that email should be validated
            // by the built-in "email" rule
            email: true
          },
          password: {
            required: true,
            minlength: 5
          }
        },
        // Specify validation error messages
        messages: {
          firstname: "Por favor, introduzca su nombre",
          lastname: "Por favor, introduzca su apellido",
          password: {
            required: "Por favor proporcione una contraseña",
            minlength: "Su contraseña debe tener al menos 5 caracteres."
          },
          email: "Por favor, introduce una dirección de correo electrónico válida"
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
      $("form[name='addSystem']").validate({
        // Specify validation rules
        rules: {
          // The key name on the left side is the name attribute
          // of an input field. Validation rules are defined
          // on the right side
          firstname: "required",
          lastname: "required",
          email: {
            required: true,
            // Specify that email should be validated
            // by the built-in "email" rule
            email: true
          },
          password: {
            required: true,
            minlength: 5
          }
        },
        // Specify validation error messages
        messages: {
          firstname: "Por favor, introduzca su nombre",
          lastname: "Por favor, introduzca su apellido",
          password: {
            required: "Por favor proporcione una contraseña",
            minlength: "Su contraseña debe tener al menos 5 caracteres."
          },
          email: "Por favor, introduce una dirección de correo electrónico válida"
        },
        submitHandler: function(form) {
          form.submit();
        }
      });
  });