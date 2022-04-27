$(document).ready(function(){ //after the document is ready this will execute
    //adding users
    $(document).on("submit", "#addAccountDB", function(e){
        e.preventDefault(); //prevent data delete in the form
        //Ajax
        $.ajax({
            url:"/ajax/ajax.php",
            type: "POST",
            dataType: "json",
            data: new FormData(this),
            processData: false,
            contentType: false, 
            beforeSend: function(){
                console.log("Wait... Data is Loading");
            },
            success: function(response){ //
                console.log(response);
            },
            error:function(request, error){ //Printing Error
                console.log(arguments);
                console.log("Error" + error);
            },
        });
    });
});