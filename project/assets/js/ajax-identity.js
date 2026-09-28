/**
 * @typedef {Object} FormResponse
 * @property {string} code
 * @property {Object} errors
 * @property {string} html
 */
let form_civility = document.body.querySelector('#add_identity_form');
if(form_civility) {
    const record_done = document.querySelector('#record_done');
    const identity_region = form_civility.querySelector('#identity_region');
    const identity_pseudo = form_civility.querySelector('#identity_pseudo');
    const identity_portrait = form_civility.querySelector('#identity_portrait');
    const identity_skill = form_civility.querySelector('#identity_skill');
    const identity_submit = form_civility.querySelector('#identity_submit');


    identity_region.addEventListener('input', function () {
        if (this.classList.contains('is-invalid')) {
            removeErrorOne(this);
        }
    });
    identity_pseudo.addEventListener('focus', function () {
        if (this.classList.contains('is-invalid')) {
            removeErrorOne(this);
        }
    });
    identity_portrait.addEventListener('focus', function () {
        removeErrorOne(this);
    });
    identity_skill.addEventListener('focus', function () {
        removeErrorOne(this);
    })
    form_civility.addEventListener('submit', function (e) {
        e.preventDefault();
        fetch(this.action, {
            method: 'POST',
            body: new FormData(e.target),
        })
            .then(response => response.json())
            .then(json => {
                handleResponse(json)
            })
    });

/**
* @param {FormResponse} response
*/
const handleResponse = function (response) {
        removeErrors();
        switch (response.code) {
            case 'FORM_ADD_SUCCESSFULLY':
                recordDone(identity_submit)
                break;
            case 'FORM_BAD_RESPONSE':
                handleErrors(response.errors);
                break;
        }
    }
}
/**
 *
 * @param field
 */
const recordDone = function(field){
    field.setAttribute('disabled','disabled');
    form_civility.reset();
    window.location.href = "/";
}
/**
 *
 * @param field
 */
const removeErrorOne = function(field){
        field.classList.remove('is-invalid');
        field.nextSibling.remove();
}


const removeErrors = function(){
    const invalidFeedbackElements = document.querySelectorAll('.invalid-feedback');
    const isInvalidElements = document.querySelectorAll('.is-invalid');
    invalidFeedbackElements.forEach(errorElement => errorElement.remove());
    isInvalidElements.forEach(isInvalidElements => isInvalidElements.classList.remove('is-invalid'));
    }
/**
*
* @param {Object} errors
*/
const handleErrors = function(errors){
        if(errors.length === 0) return;
        for(const key in errors) {
            let element = document.querySelector(`#identity_${key}`);
        element.classList.add('is-invalid');
        let div = document.createElement('div');
        div.classList.add('invalid-feedback', 'd-block');
        div.innerText = errors[key];
        element.after(div);
    }
}


