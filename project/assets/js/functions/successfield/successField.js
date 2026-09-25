

/* login */
const successLoginField = function(champ,label)
{
    champ.classList.remove('is-invalid');
    champ.classList.add("is-valid");
    if(label.classList.contains('text-danger')) {
        label.classList.remove('text-danger');
    }
    label.classList.remove('text-info-emphasis');
    label.classList.add('text-success');
    return true;
}


const successFieldRegister = function(champ,info,label,erreur)
{
    champ.classList.remove('is-invalid');
    champ.classList.add("is-valid");
    if(info.classList.contains('text-info-emphasis')){
        info.classList.remove('text-info-emphasis');
    }
    info.classList.remove('text-danger');
    info.classList.add('text-success');
    if(label.classList.contains('text-danger')) {
        label.classList.remove('text-danger');
    }
    if(erreur) {
        if (erreur.classList.contains('invalid-feedback')) {
            erreur.classList.remove('invalid-feedback');
            erreur.innerHTML = '';
        }
    }
    label.classList.add('text-success');
    return true;
}


export { successLoginField,successFieldRegister }
