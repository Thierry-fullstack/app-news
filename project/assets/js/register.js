import {showMessage} from "./functions/message/message.js";
import {controlEmail} from "./functions/email/email.js";
import {successFieldRegister} from "./functions/successfield/successField.js";
import {alertFieldRegister} from "./functions/alertField/alertfield.js";
import {controlPasswordRegister} from "./functions/password/password.js";
import {controlCheckbox} from "./functions/checkbox/checkbox.js";
import {controlFieldsRegistration} from "./functions/fields/controlFields.js";

window.onload = () => {
    const form = document.body.querySelector('#registration_form');
    if(form){
            const inputAll = form.getElementsByTagName('input');
            const labelAll = form.querySelectorAll('label');
            let inputEffect = [];
            let labelEffect = [];
            for(let  i=0; i < inputAll.length; i++){
                if(inputAll[i].type !=='hidden'){
                    inputEffect[i]=inputAll[i];
                    labelEffect[i]=labelAll[i];
                }
            }
        /* div error on input fields */
        const emailError1 = form.querySelector('#registration_form_email_error1');
        const plainpasswordError1 = form.querySelector('#registration_form_plainPassword_error1');
        const agreeTermsError1 = form.querySelector('#registration_form_agreeTerms_error1');
        /* button submit */
        const buttonSubmit = form.querySelector('[type=submit]');
        /* field general info */
        const dialogRegister = document.body.querySelector('#dialogRegister');

        /* all ul li of document */
        const tagLiAll = document.body.querySelectorAll("ul li.contact-item");
        // Parcourir la liste avec une boucle forEach extraire li class contect-item
        /* left info of state elements */
        const infoAll = [];
        tagLiAll.forEach((li) => {
            if (li.classList.contains('contact-item'))
                infoAll.push(li.firstElementChild);
        });
     //   console.log(infoAll)
        /* element info special regex password */
        const all_password_criteria = document.body.querySelectorAll("li[data-password-criteria]");
        /* begin */
        let validfields = [];
        let message = "* Champs obligatoires"
        showMessage(dialogRegister, message);
        inputEffect[0].addEventListener('focus',function(){
            message ='Indiquez votre email';
            showMessage(dialogRegister,message);
        })
        inputEffect[0].addEventListener('input',function(){
            controlEmail(this)?
                successFieldRegister(this,infoAll[0],labelEffect[0],emailError1): alertFieldRegister(this,infoAll[0],labelEffect[0],emailError1);
            controlFieldsRegistration(inputEffect,dialogRegister);
        })
        inputEffect[0].addEventListener('blur',function(){
           validfields[0] = controlEmail(this)?
                successFieldRegister(this,infoAll[0],labelEffect[0],emailError1): alertFieldRegister(this,infoAll[0],labelEffect[0],emailError1);
            controlFieldsRegistration(inputEffect,dialogRegister);
        })
        inputEffect[1].addEventListener('focus',function ({currentTarget}){
                message = 'Votre mot de passe';
                showMessage(dialogRegister,message);
                let password = currentTarget.value;
                if(password.length === 0){
                    all_password_criteria.forEach((li)=>(li.className =""));
                    password_length_criteria.textContent = " 10 caractères ";
                }
                password_criteria.style.display = "block";
        })
        inputEffect[1].addEventListener('input',function ({currentTarget}){
            let password = currentTarget.value;
            controlPasswordRegister(this,password)?
                successFieldRegister(this,infoAll[1],labelEffect[1],plainpasswordError1):alertFieldRegister(this,infoAll[1],labelEffect[1],plainpasswordError1);
            controlFieldsRegistration(inputEffect,dialogRegister);
        });
        inputEffect[1].addEventListener('blur',function ({currentTarget}){
            let password = currentTarget.value;
            validfields[1] = controlPasswordRegister(this,password)?
                successFieldRegister(this,infoAll[1],labelEffect[1],plainpasswordError1):alertFieldRegister(this,infoAll[1],labelEffect[1],plainpasswordError1);
            controlFieldsRegistration(inputEffect,dialogRegister);

            message = "Accepter les rgpd";
            showMessage(dialogRegister,message);
        });
        inputEffect[2].addEventListener('focus',function(){
            message = "Accepter les rgpd";
            showMessage(dialogRegister,message);
        })
        inputEffect[2].addEventListener('input',function(){
            controlCheckbox(this,dialogRegister,labelEffect[2])?
                successFieldRegister(this,infoAll[2],labelEffect[2],agreeTermsError1):alertFieldRegister(this,infoAll[2],labelEffect[2],agreeTermsError1);
            controlFieldsRegistration(inputEffect,dialogRegister);
        })
        inputEffect[2].addEventListener('blur',function(){
            validfields[2] = controlCheckbox(this,dialogRegister,labelEffect[2])?
                successFieldRegister(this,infoAll[2],labelEffect[2],agreeTermsError1):alertFieldRegister(this,infoAll[2],labelEffect[2],agreeTermsError1);
            controlFieldsRegistration(inputEffect,dialogRegister);
        })

        buttonSubmit.addEventListener('click',function (event){
            let counter = 0;
            for(let i=0; i < inputEffect.length; i++){
                if(inputEffect[i].type !=='checkbox' && inputEffect[i].value ===''){
                    counter++;
                }
                if(inputEffect[i].type==='checkbox' && !(inputEffect[i].checked)){
                    counter++
                }
            }
            if(counter>0 || validfields.length !==3){
                event.preventDefault();
                event.stopImmediatePropagation();
                return false;
            }
        })

    }
}
