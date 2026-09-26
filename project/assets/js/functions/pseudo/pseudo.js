
/*
*check field Pseudo
* ^.{6,10}#[0-9]{2}$
 */
const controlPseudo = function (champ,info,label) {
    const pseudoRegex = new RegExp('^[a-zA-Z0-9 -\'èçàéïâ]{6,30}$');
    return champ.value.match(pseudoRegex) ;
}

export {controlPseudo};
