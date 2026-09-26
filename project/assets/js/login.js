import {showMessage} from "./functions/message/message.js";
import {controlEmail} from "./functions/email/email.js";
import {controlFieldsLogin} from "./functions/fields/controlFields.js";
import {alertLoginField} from "./functions/alertField/alertfield.js";
import {successLoginField} from "./functions/successfield/successField.js";
import {controlPassword} from "./functions/password/password.js";
import {controlRemember} from "./functions/checkbox/checkbox.js";
import {clearField} from "./functions/clearField/clearfield.js";

window.onload = () =>{
    const formLogin = document.body.querySelector('#loginForm');
    if(formLogin) {
        const inputAll = formLogin.querySelectorAll('input');

        const labelAll = formLogin.querySelectorAll('label');
        const selectInputs = [];
        const selectLabels = [];
        for (let i = 0; i < inputAll.length; i++) {
            if (inputAll[i].type !== 'hidden') {
                selectInputs[i] = inputAll[i];
                selectLabels[i] = labelAll[i];
            }
        }

        /* input submit form */
        const buttonSubmit = formLogin.querySelector('#submitConnect');
        /* show infos */
        const dialogLogin = document.body.querySelector('#dialogLogin');
        /* begin */
        let message = 'Champs obligatoires *';
        showMessage(dialogLogin, message);

        /* eventlistener on input email */
        selectInputs[0].addEventListener('focus', function () {
            message = 'Saisir votre adresse email';
            showMessage(dialogLogin, message);
        });
        selectInputs[0].addEventListener('input', function () {
            controlEmail(this, selectLabels[0]) ? successLoginField(this, selectLabels[0]) : alertLoginField(this, selectLabels[0]);
            controlFieldsLogin(selectInputs, dialogLogin);
        });
        selectInputs[0].addEventListener('blur', function () {
            controlEmail(this, selectLabels[0]) ? successLoginField(this, selectLabels[0]) : alertLoginField(this, selectLabels[0]);
            controlFieldsLogin(selectInputs, dialogLogin);
        });

        /* eventlistener on input password */
        selectInputs[1].addEventListener('focus',function(){
            message = 'Saisir votre mot de passe';
            showMessage(dialogLogin,message);
        });
        selectInputs[1].addEventListener('input',function(){
            controlPassword(this,selectLabels[1])?successLoginField(this,selectLabels[1]):alertLoginField(this,selectLabels[1]);
            controlFieldsLogin(selectInputs,dialogLogin);
        });
        selectInputs[1].addEventListener('blur',function(){
            controlPassword(this,selectLabels[1])?successLoginField(this,selectLabels[1]):alertLoginField(this,selectLabels[1]);
            controlFieldsLogin(selectInputs,dialogLogin);
        });

        /* eventlistener on input checkbox */
        selectInputs[2].addEventListener('focus',function(){
            message = 'conserver mon index_profil';
            showMessage(dialogLogin,message);
        });
        selectInputs[2].addEventListener('input',function(){
            controlRemember(this,dialogLogin,selectLabels[2])? successLoginField(this,selectLabels[2]):clearField(this,selectLabels[2]);
            controlFieldsLogin(selectInputs,dialogLogin);
        });
        selectInputs[2].addEventListener('blur',function(){
            controlRemember(this,dialogLogin,selectLabels[2])? successLoginField(this,selectLabels[2]):clearField(this,selectLabels[2]);
            controlFieldsLogin(selectInputs,dialogLogin);
        });

        /* eventlistener on button submit */
        buttonSubmit.addEventListener('click',function (event){
            let counter = 0;
            for(let i =0; i < selectInputs.length;i++)
            {
                if(selectInputs[i].type !=='checkbox' )
                {
                    if(selectInputs[i].value==='' || selectInputs[i].classList.contains('is-invalid'))
                    {
                        counter++;
                        alertLoginField(selectInputs[i],selectLabels[i]);
                    }

                }
            }
            if(counter > 0) {
                event.preventDefault();
                event.stopImmediatePropagation();
                return false;
            }
        });
    }
}
