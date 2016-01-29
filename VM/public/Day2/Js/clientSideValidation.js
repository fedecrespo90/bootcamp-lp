var form;

/*detectors are added to "Travel!" button and the <form> element*/
function start()
{
    var button = document.getElementById("submitbutton");
    button.addEventListener("click", send);
    form = document.querySelector("form[name='information']");
    form.addEventListener("invalid", validation, true);
    form.addEventListener("input", check); /*the "check" function is executed each time the user enters or modifies the content of the field*/
}

function send()
{
    var valid = form.checkValidity();
    if (valid) {
        form.submit();  /*Only submit the form when no more invalid conditions*/
    }
}

function validation(e)
{
    var elem = e.target;
    elem.style.background = '#FFDDDD';      /*style for passenger label in case of error*/
}

function check(e)
{
    var elem = e.target;
    if (elem.validity.valid) {
        elem.style.background = '#FFFFFF';  /*the element is valid*/
    }else{
        elem.style.background = '#FFDDDD';  /*the element is invalid*/
    }
}

/*after the document is loaded, is activated*/
addEventListener("load", start);
