//$("#contactForm").validator().on("submit", function (event) {
//    if (event.isDefaultPrevented()) {
//        formError();
//        alert("Didn't work");
//    } else {
//        // everything looks good!
//        event.preventDefault();
//        submitForm();
//        alert("JS worked");
//    }
//});

$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "brycemueller.com/php/process.php",
        data: "$name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}

function formError(){
    $("#contactForm")[0].reset();
    submitMSG(true, "Message Failed!")
}