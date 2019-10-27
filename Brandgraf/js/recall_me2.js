/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {

 $("input,textarea").jqBootstrapValidation(
    {
     preventSubmit: true,
     submitError: function($form, event, errors) {
      // something to have when submit produces an error ?
      // Not decided if I need it yet
     },
     submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
       // get values from FORM
       var name2 = $("input#name2").val();  
       var phone2 = $("input#phone2").val(); 
       var email2 = $("input#email2").val();
       var comment2 = $("textarea#comment2").val();  
       var question = $("input#question").val();
        var firstName = name; // For Success/Failure Message
           // Check for white space in name for Success/Fail message
        if (firstName.indexOf(' ') >= 0) {
  firstName = name.split(' ').slice(0, -1).join(' ');
         }        
$.ajax({
                url: "recall_me2.php",
             type: "POST",
             data: {name2: name2, phone2: phone2, email2: email2, comment2: comment2, question: question},
             cache: false,
             success: function() {  
             // Success message
                $('#success2').html("<div class='alert alert-success'>");
                $('#success2 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
             .append( "</button>");
               $('#success2 > .alert-success')
             .append("<strong>Спасибо! Ваше сообщение отправлено.</strong>");
    $('#success2 > .alert-success')
  .append('</div>');

   
    //clear all fields
    $('#contactForm1').trigger("reset");

setTimeout(function() {
                $("#myModal").modal('hide');
           }, 2000);

        },
     error: function() { 
  // Fail message
   $('#success2').html("<div class='alert alert-danger'>");
             $('#success2 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
              .append( "</button>");
             $('#success2 > .alert-danger').append("<strong>Извините "+firstName+" кажется проблемы на сервере отправки писем...</strong> Вы не могли бы написать напрямую на адрес <a href='info@brandgraf.ru?Subject=Перезвоните мне'>info@brandgraf.ru</a> ? Приносим извинения за это неудобство!");
          $('#success2 > .alert-danger').append('</div>');
  //clear all fields
  $('#contactForm1').trigger("reset");
      },
           })
         },
         filter: function() {
                   return $(this).is(":visible");
         },
       });

      $("a[data-toggle=\"tab\"]").click(function(e) {
                    e.preventDefault();
                    $(this).tab("show");
        });
  });


/*When clicking on Full hide fail/success boxes */ 
$('#name2').focus(function() {
     $('#success2').html('');
  });