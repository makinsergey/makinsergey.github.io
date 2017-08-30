$("#contactForm2").submit(function(event){
	// cancels the form submission
	event.preventDefault();
	submitForm();
});

function submitForm(){
    // Переменные с данными из формы
    var name2 = $("#name2").val();
    var phone2 = $("#phone2").val();
    $.ajax({
        type: "POST",
        url: "process_form.php",
        data: "name2="+ name2 + "&phone2="+ phone2,
        // success : function(text){
        //     if(text == "success"){
        //         formSuccess();
        //     }
        // }
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
            $('#contactForm2').trigger("reset");
        },
    });
}
function  formSuccess(){
    $( "#msgSubmit").removeClass( "hidden");
}