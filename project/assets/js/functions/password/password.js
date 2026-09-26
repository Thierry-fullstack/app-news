
/* control login form */
const controlPassword = function (champ,label) {
    const passwordRegex = new RegExp('^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{10}$');
    return champ.value.match(passwordRegex) ;
}


/* control register form */

/* element info special regex password */
const password_criteria = document.body.querySelector('#password_criteria');
const password_length_criteria = document.body.querySelector('#password_length_criteria');
const password_special_character_criteria = document.body.querySelector("#password_special_character_criteria");
const password_uppercase_criteria = document.body.querySelector("#password_uppercase_criteria");
const password_number_criteria = document.body.querySelector("#password_number_criteria");
const password_lowercase_criteria = document.body.querySelector("#password_lowercase_criteria");
const all_password_criteria = document.body.querySelectorAll("li[data-password-criteria]");


const controlPasswordRegister = function (champ,password){
    password_length_criteria.className = `password-criteria-${password.length === 10}`;
    password_special_character_criteria.className = `password-criteria-${/[ !"#$%&'()*+,-.\/:;<=>?@\]^_`{|}~]/.test(password)}`;
    password_uppercase_criteria.className = `password-criteria-${/[A-Z]/.test(password)}`;
    password_number_criteria.className = `password-criteria-${/[0-9]/.test(password)}`;
    password_lowercase_criteria.className = `password-criteria-${/[a-zà-ú]/.test(password)}`;
    password_length_criteria.textContent = `( ${password.length} ) sur 10 caractères`;
    const passwordRegex = new RegExp('^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{10}$');
    return champ.value.match(passwordRegex) ;
}

/* filed one new password form */
const controlPasswordOne = function (champ,password){
    password_length_criteria.className = `password-criteria-${password.length === 10}`;
    password_special_character_criteria.className = `password-criteria-${/[ !"#$%&'()*+,-.\/:;<=>?@\]^_`{|}~]/.test(password)}`;
    password_uppercase_criteria.className = `password-criteria-${/[A-Z]/.test(password)}`;
    password_number_criteria.className = `password-criteria-${/[0-9]/.test(password)}`;
    password_lowercase_criteria.className = `password-criteria-${/[a-zà-ú]/.test(password)}`;
    password_length_criteria.textContent = `( ${password.length} ) sur 10 caractères`;
    const passwordRegex = new RegExp('^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{10}$');
    return champ.value.match(passwordRegex) ;
}

/* element info special regex password */
const confirm_criteria = document.body.querySelector('#confirm_criteria');
const confirm_length_criteria = document.body.querySelector('#confirm_length_criteria');
const confirm_special_character_criteria = document.body.querySelector("#confirm_special_character_criteria");
const confirm_uppercase_criteria = document.body.querySelector("#confirm_uppercase_criteria");
const confirm_number_criteria = document.body.querySelector("#confirm_number_criteria");
const confirm_lowercase_criteria = document.body.querySelector("#confirm_lowercase_criteria");
const all_confirm_criteria = document.body.querySelectorAll("li[data-password-criteria-2]");


const controlPasswordTwo = function (champ,password){
    confirm_length_criteria.className = `password-criteria-${password.length === 10}`;
    confirm_special_character_criteria.className = `password-criteria-${/[ !"#$%&'()*+,-.\/:;<=>?@\]^_`{|}~]/.test(password)}`;
    confirm_uppercase_criteria.className = `password-criteria-${/[A-Z]/.test(password)}`;
    confirm_number_criteria.className = `password-criteria-${/[0-9]/.test(password)}`;
    confirm_lowercase_criteria.className = `password-criteria-${/[a-zà-ú]/.test(password)}`;
    confirm_length_criteria.textContent = `( ${password.length} ) sur 10 caractères`;
    const passwordRegex = new RegExp('^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{10}$');
    return champ.value.match(passwordRegex) ;
}

export {controlPassword,controlPasswordRegister,controlPasswordOne,controlPasswordTwo}

