const showMessage = function(balise,text)
{
    balise.innerHTML =text;
}

const confirmNegatif = function (diag)
{
    let message = 'Controlez votre saisie'
    showMessage(diag,message);
}


const confirmPositif =  function (diag)
{
    let message = 'Soumettre votre saisie';
    showMessage(diag,message);
    confirm_criteria.style.display="none";
}

export {showMessage,confirmNegatif,confirmPositif}
