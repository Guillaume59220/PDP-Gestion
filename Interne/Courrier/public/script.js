

function formSubmit(id) {
    form = $("#" + id);
    if (form.length == 0) {
        console.log("Formulaire " + id + " inconnu");
        return;
    }
    for (i = 1; i < arguments.length; i = i + 2) {
        if (arguments[i + 1] != null)
            $('#' + arguments[i]).val(arguments[i + 1]);
    }
    form.submit();
}