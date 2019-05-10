function validateForm(){
    var name = document.forms["register"]["InputName"]
    var age = document.forms["register"]["InputAge"]
    var city = document.forms["register"]["InputCity"]
    var email = document.forms["register"]["InputEmail"]
    var number = document.forms["register"]["InputNumber"]

    if (name.value == "") {
        alert("Name must be entered.");
        name.focus();
        return false;
    }

}

function writeFormData(){
    var objects = [];
    $('form').on('submit', function(e){
        var name = $('#InputName').val(), age = $('#InputAge').val(), city = $('#InputCity').val(), email = $('#InputEmail').val(), number = $('#InputNumber').val();
        objects.push({item:{'name':name, 'age':age, 'city':city, 'email':email, 'number':number}});
        console.log(JSON.stringify(objects));
        e.preventDefault();
        document.getElementById("demo").innerHTML = objects.toString();
    });
}

$(document).ready(function() {
    $("#contact-tab").click(function() {
        $("#links").hide()
    });

    $("#contact-tab").click(function() {
        $("#contact").show()
    });

    $("#link-tab").click(function() {
        $("#contact").hide()
    });

    $("#link-tab").click(function() {
        $("#links").show()
    });

});

