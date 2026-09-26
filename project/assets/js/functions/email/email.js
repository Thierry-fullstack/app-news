
/* check email login & register */
const controlEmail = function (champ) {
    const regexMail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const emailRegex = new RegExp(regexMail);
    return champ.value.match(emailRegex)
}

export {controlEmail};
