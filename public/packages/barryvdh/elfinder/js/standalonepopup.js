$(document).on('click','.popup_selector',function (event) {
    event.preventDefault();
    var updateID = $(this).attr('data-inputid'); // Btn id clicked
    var elfinderUrl = '/elfinder/popup/';

    // trigger the reveal modal with elfinder inside
    var triggerUrl = elfinderUrl + updateID;
    $.colorbox({
        href: triggerUrl,
        fastIframe: true,
        iframe: true,
        width: '95%',
        height: '88%'
    });
});

// function to update the file selected by elfinder
function processSelectedFile(filePath, requestingField) {
    $('#' + requestingField).val('/' + filePath).trigger('change');
    var tmpstr = requestingField.split('ge')[1];

    if(check_multi_elfider_input !== undefined) {
       document.getElementById("img" + tmpstr).src = document.getElementById(requestingField).value;
    }
    else {
        $('.img-uploaded').attr('src', '/' + filePath).trigger('change');
    }
}