var $form = $("form"),
  $successMsg = $(".alert");
$.validator.addMethod("letters", function(value, element) {
  return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
});
$form.validate({
  rules: {
   
    email: {
      required: true,
      email: true
    }
  },
  messages: {
   
    email: "Please specify a valid email address"
  },
  submitHandler: function() {
    $successMsg.show();
  }
});