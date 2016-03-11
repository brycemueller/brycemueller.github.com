
$("#contactForm").submit(function(event){
    event.preventDefault();
    formSuccess();
});

function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}
