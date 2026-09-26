import {showMessage} from "./functions/message/message.js";
import {controlEmail} from "./functions/email/email.js";
import {successLoginField} from "./functions/successfield/successField.js";
import {alertLoginField} from "./functions/alertField/alertfield.js";
import {checkFielResetPassword} from "./functions/clearField/clearfield.js";


window.onload = () => {
    const resetPasswordForm = document.body.querySelector('#resetPasswordForm');
    if (resetPasswordForm) {
        /* inputs email && submit */
        const inputEmail = resetPasswordForm.querySelector('#reset_password_request_form_email');
        const inputSubmit = resetPasswordForm.querySelector('#reset_password_request_form_submit');
        /* info how top do */
        const dialogResetPassword = document.body.querySelector('#dialog-reset-password');
        /* label email */
        const labelEmail = resetPasswordForm.querySelector('#label_email');

        /* begin */
        let message = 'Indiquez votre adresse email';
        showMessage(dialogResetPassword,message);

        /* eventlistener on email input */
        inputEmail.addEventListener('focus', function () {
            checkFielResetPassword(this,dialogResetPassword);
        });
        inputEmail.addEventListener('input', function () {
            controlEmail(this,labelEmail) ? successLoginField(this,labelEmail): alertLoginField(this,labelEmail);
            checkFielResetPassword(this,dialogResetPassword);
        });
        inputEmail.addEventListener('blur', function () {
            controlEmail(this,labelEmail) ? successLoginField(this,labelEmail): alertLoginField(this,labelEmail);
            checkFielResetPassword(this,dialogResetPassword);
        });

        /* eventlistener on submit button */
        inputSubmit.addEventListener('click',function(event){

            if(inputEmail.value ==='' || inputEmail.classList.contains('is-invalid'))
            {
                alertLoginField(inputEmail,labelEmail);
                event.preventDefault();
                event.stopImmediatePropagation();
                return false;
            }
        });

    } /* end if */

}/* end windows onload */
