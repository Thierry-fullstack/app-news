import {showMessage} from "../message/message.js";

/* verify checkbox if checked in loginForm */
const controlRemember = function(champ,dial,label){
    if(champ.checked){
        let message="";
        showMessage(dial,message);
        return true;
    }else if(!(champ.checked)){
        let message="Se souvenir de moi";
        showMessage(dial,message);
        return false;
    }
}

/* verify checkbox if checked in register Form */
const controlCheckbox = function(champ,dial,label)
{
    if(champ.checked){
        let message="";
        showMessage(dial,message);
        label.classList.add('text-success');
        return true;
    }else if(!(champ.checked)){
        let message="Accepter le contrat";
        showMessage(dial,message);
        return false;
    }
}


export {controlRemember,controlCheckbox}
