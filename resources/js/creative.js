$(document).ready(function() {
    // Event handler for the submit button
    $("#submit").on("click", function() {
        var name        = $("#name").val(),
            message     = $("#message").val(),
            date        = getDate(),
            dataString  = "name=" + name + "&message=" + message + "&date=" + date;
        
        // Validation
        if (name == "" || message == "") {
            alert("Please enter your name and message");
        } else {
            $.ajax({
                type: "POST",
                url: "../the-basement/messages.php",
                data: dataString,
                cache: false,
                success: function(html) {
                    $("#section-messages ul").append(html);
                }
            });
        }
        
        return false;
    });
    
    /* ---------------------------------------- */
    /* FUNCTION DEFINITIONS */
    /* ---------------------------------------- */
    
    function getDate() {
        var date;
        date = new Date();
        date = date.getUTCFullYear() + '-' +
                ('00' + (date.getUTCMonth() + 1)).slice(-2) + '-' +
                ('00' + date.getUTCDate()).slice(-2) + ' ' +
                ('00' + date.getUTCHours()).slice(-2) + ':' +
                ('00' + date.getUTCMinutes()).slice(-2) + ':' +
                ('00' + date.getUTCSeconds()).slice(-2);  
        return date;
    }
});