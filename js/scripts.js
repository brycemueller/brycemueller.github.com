
$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    formSuccess();
});

function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}
