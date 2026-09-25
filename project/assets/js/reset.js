import {showMessage,confirmPositif,confirmNegatif} from "./functions/message/message.js";
import {controlPasswordOne,controlPasswordTwo} from "./functions/password/password.js";
import {successLoginField} from "./functions/successfield/successField.js";
import {alertLoginField} from "./functions/alertField/alertfield.js";


window.onload = () => {
    const newPasswordForm = document.body.querySelector('#resetPasswordForm');
    if (newPasswordForm) {
        let mdp = "";
        const passwordsInput = newPasswordForm.querySelectorAll("input[type='password']");
        const labelsField = newPasswordForm.querySelectorAll('label');
        /* info dialog */
        const dialogMdp = document.body.querySelector('#dialogNewMdp');
        const all_password_criteria = document.body.querySelectorAll("li[data-password-criteria]");
        const all_confirm_criteria = document.body.querySelectorAll("li[data-password-criteria-2]");
        /* button submit */
        const submitButton = newPasswordForm.querySelector('#change_password_form_submit');
        /* begin */
        let message = 'Saisir nouveau mot de passe';
        showMessage(dialogMdp, message);

        /* eventlistener on password field one */
        passwordsInput[0].addEventListener('focus',function ({currentTarget}){
            password_criteria.style.display="block";
            message = '10 caractères : (AZaz09!"#$%&)';
            showMessage(dialogMdp,message);
            confirm_criteria.style.display="none";
            let password = currentTarget.value;
            if(password.length ===0)
            {
                all_password_criteria.forEach((li)=>li.className="");
                password_length_criteria.textContent = '10 caractères';
            }

        });
        passwordsInput[0].addEventListener('input',function ({currentTarget}){
            confirm_criteria.style.display="none";
            let password = currentTarget.value;
            controlPasswordOne(this,password) ? successLoginField(this,labelsField[0]):alertLoginField(this,labelsField[0]);
        });
        passwordsInput[0].addEventListener('blur',function ({currentTarget}){
            confirm_criteria.style.display="none";
            let password = currentTarget.value;
            controlPasswordOne(this,password) ? successLoginField(this,labelsField[0]):alertLoginField(this,labelsField[0]);
        });

        /* eventlistener on password field two  */
        passwordsInput[1].addEventListener('focus',function({currentTarget}){
            password_criteria.style.display="none";
            confirm_criteria.style.display="block";
            message = 'Confirmez mot de passe'
            showMessage(dialogMdp,message);
            let password = currentTarget.value;
            if(password.length ===0){
                all_confirm_criteria.forEach((li)=>li.className="");
                confirm_length_criteria.textContent = '10 caractères';   // confirm_length_criteria
            }


        });
        passwordsInput[1].addEventListener('input',function({currentTarget}){
            password_criteria.style.display="none";
            let password = currentTarget.value;
            if(controlPasswordTwo(this,password)? successLoginField(this,labelsField[1]):alertLoginField(this,labelsField[1]))
            {
                mdp=(this.value === passwordsInput[0].value)? successLoginField(this,labelsField[1]):alertLoginField(this,labelsField[1]);
                mdp ? confirmPositif(dialogMdp):confirmNegatif(dialogMdp);
            }
        });

        passwordsInput[1].addEventListener('blur',function({currentTarget}){
            password_criteria.style.display="none";
            let password = currentTarget.value;
            if(controlPasswordTwo(this,password)? successLoginField(this,labelsField[1]):alertLoginField(this,labelsField[1]))
            {
                mdp=(this.value === passwordsInput[0].value)? successLoginField(this,labelsField[1]):alertLoginField(this,labelsField[1]);
                mdp ? confirmPositif(dialogMdp):confirmNegatif(dialogMdp);
            }
        });

        /* eventlistener on button submit  */
        submitButton.addEventListener('click',function(e){

            let counter = 0;
            for(let i =0; i <passwordsInput.length; i++)
            {
                if(passwordsInput[i].value ==='' || passwordsInput[i].classList.contains('is-invalid'))
                {
                    alertLoginField(passwordsInput[i],labelsField[i]);
                    counter++;
                }
            }
            if(counter>0 || counter === passwordsInput.length)
            {
                e.preventDefault();
                e.stopImmediatePropagation();
                return false;
            }
        });


    } /* end if */

} /* end window.onload */
