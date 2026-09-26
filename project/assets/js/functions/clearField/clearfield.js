
import {showMessage} from "../message/message.js";

const clearField = function(champ,label)
{
    champ.classList.remove('is-valid');
    if(label.classList.contains('text-success')) {
        label.classList.remove('text-success');
    }
    label.classList.add('text-info-emphasis');
    return false;
}

/* input email on reset-password */
const checkFielResetPassword = function(champ,dial)
{
    if(champ.value !=='' && champ.classList.contains('is-valid'))
    {
        let message="Soumettre votre saisie";
        showMessage(dial,message);
    }
    else if(champ.classList.contains('is-invalid'))
    {
        let message = 'Adresse email invalide';
        showMessage(dial,message);
    }
}

export { clearField,checkFielResetPassword }
