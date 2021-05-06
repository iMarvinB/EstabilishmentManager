function retornaAlertaPainel(type, message) {
    $('#divAlerta'+type).css('display', 'block');
    $("#warningMessage"+type).val(message);
}