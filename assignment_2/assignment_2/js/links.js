function validateLink(obj){
    var filled = true;

    if (obj['link'] === '' || obj['url'] === ''){
        filled = false;
        $('#form-alert')[0].append("Fill all fields!");
    }
    return filled;
}

function newLink(){
    var inputLink = {
        link: $('input#inputLink')[0].value,
        URL: $('input#inputURL')[0].value,
    };
    if (validateLink(inputLink)){
        $('#form-alert').hide();
        $('#myLinks').append($('<li><a target="_blank" href="'+inputLink['URL']+'">'+inputLink['link']+'</a></li>'));
    }else{
        $('#form-alert').show();
    }
}

$(function() {
    $('div.row.wp-row').append('<div class="col-md-6"><ul id="myLinks"><li><a href="https://www.volkskrant.nl/" target="_blank">Volkskrant</a></li>' +
        '<li><a href="https://www.telegraaf.nl/?utm_source=google&utm_medium=organic" target="_blank">Telegraaf</a></li>' +
        '<li><a href="https://www.trouw.nl/" target="_blank">De Trouw</a></li></ul></div>');
    $('#fadeButton').on('click',function() {
        $('#myLinks').fadeToggle(1200);
    });
    $('#addLinkButton').on('click', function(){
        newLink()
    });
});