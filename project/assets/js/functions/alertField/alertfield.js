
/* login */
const alertLoginField = function(champ,label)
{
    champ.classList.remove('is-valid');
    champ.classList.add("is-invalid");
    if(label.classList.contains('text-success')) {
        label.classList.remove('text-success');
    }
    label.classList.remove('text-info-emphasis');
    label.classList.add('text-danger');
    return false;
}

const alertFieldRegister = function(champ,info=null,label,erreur=null)
{
    champ.classList.remove('is-valid');
    champ.classList.add("is-invalid");
    if(info.classList.contains('text-info-emphasis')){
        info.classList.remove('text-info-emphasis');
    }
    info.classList.remove('text-success');
    info.classList.add('text-danger');
    if(label.classList.contains('text-success')) {
        label.classList.remove('text-success');
    }
    if(erreur) {
        if (erreur.classList.contains('valid-feedback')) {
            erreur.classList.remove('valid-feedback')
            erreur.innerHTML = "";
        }
    }
    label.classList.add('text-danger');
    return false;
}


/* function on submit button Register Form */
const alertChamps = function (champ=null,label) {
    if(champ.classList.contains('is-valid')) {
        champ.classList.remove('is-valid');
        label.classList.remove('text-success');
    }
    champ.classList.add("is-invalid");
    label.classList.add('text-danger');
}

export { alertLoginField,alertFieldRegister,alertChamps }
