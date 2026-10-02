/**
 * @typedef {Object} FormResponse
 * @property {string} code
 * @property {Object} errors
 * @property {string} html
 */
const form_add_article = document.body.querySelector('#add_article_form');
const control_post = document.body.querySelector('#control_post');
if(form_add_article){
  //const inputAll = form_add_article.querySelectorAll('input');
  //const content = form_add_article.querySelector('textarea');

  const soumettre = form_add_article.querySelector('#add_post_submit');

  form_add_article.addEventListener('submit',function(e){
      e.preventDefault();
      fetch(this.action,{
          method: 'POST',
          body: new FormData(e.target),
      })
          .then(response=>response.json())
          .then(json=>{
              handleResponse(json)
          })
  });

  /**
  * @param {FormResponse} response
  */
  const handleResponse = function (response) {
      removeErrors();
      switch (response.code){
          case 'FORM_ADD_SUCCESSFULLY':
              recordDone(soumettre);
              window.location.href = "/author/post/list";

              break;
          case 'FORM_BAD_RESPONSE':
              handleErrors(response.errors);
              break;
      }
  }

    /**
     *
     * @param {Object} errors
     */
    const handleErrors = function(errors){
        if(errors.length === 0) return;
        for(const key in errors) {
            let element = document.querySelector(`#add_post_${key}`);
            console.log(element)
            element.classList.add('is-invalid');
            let div = document.createElement('div');
            div.classList.add('invalid-feedback', 'd-block');
            div.innerText = errors[key];
            element.after(div);
        }
    }

    /**
     *
     * @param field
     */
    const recordDone = function(field){
        field.setAttribute('disabled','disabled');
        form_add_article.reset();
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


}
