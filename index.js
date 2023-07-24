 !function(e){"function"!=typeof e.matches&&(e.matches=e.msMatchesSelector||e.mozMatchesSelector||e.webkitMatchesSelector||function(e){for(var t=this,o=(t.document||t.ownerDocument).querySelectorAll(e),n=0;o[n]&&o[n]!==t;)++n;return Boolean(o[n])}),"function"!=typeof e.closest&&(e.closest=function(e){for(var t=this;t&&1===t.nodeType;){if(t.matches(e))return t;t=t.parentNode}return null})}(window.Element.prototype);


document.addEventListener('DOMContentLoaded', function() {

   /* Записываем в переменные массив элементов-кнопок и подложку.
      Подложке зададим id, чтобы не влиять на другие элементы с классом overlay*/
   var modalButtons = document.querySelectorAll('.js-open-modal'),
       overlay      = document.querySelector('.js-overlay-modal'),
       closeButtons = document.querySelectorAll('.js-modal-close'),
       modalButtons2 = document.querySelectorAll('.js-open-modal2'),
       overlay2      = document.querySelector('.js-overlay-modal2'),
       closeButtons2 = document.querySelectorAll('.js-modal-close2'),
       modalButtons3 = document.querySelectorAll('.js-open-modal3'),
       overlay3      = document.querySelector('.js-overlay-modal3'),
       closeButtons3 = document.querySelectorAll('.js-modal-close3');


   /* Перебираем массив кнопок */
   modalButtons.forEach(function(item){

      /* Назначаем каждой кнопке обработчик клика */
      item.addEventListener('click', function(e) {

         /* Предотвращаем стандартное действие элемента. Так как кнопку разные
            люди могут сделать по-разному. Кто-то сделает ссылку, кто-то кнопку.
            Нужно подстраховаться. */
         e.preventDefault();

         /* При каждом клике на кнопку мы будем забирать содержимое атрибута data-modal
            и будем искать модальное окно с таким же атрибутом. */
         var modalId = this.getAttribute('data-modal'),
             modalElem = document.querySelector('.modal[data-modal="' + modalId + '"]');


         /* После того как нашли нужное модальное окно, добавим классы
            подложке и окну чтобы показать их. */
         modalElem.classList.add('active');
         overlay.classList.add('active');
      }); // end click

   }); // end foreach

   modalButtons2.forEach(function(item){

    /* Назначаем каждой кнопке обработчик клика */
    item.addEventListener('click', function(e) {

       /* Предотвращаем стандартное действие элемента. Так как кнопку разные
          люди могут сделать по-разному. Кто-то сделает ссылку, кто-то кнопку.
          Нужно подстраховаться. */
       e.preventDefault();

       /* При каждом клике на кнопку мы будем забирать содержимое атрибута data-modal
          и будем искать модальное окно с таким же атрибутом. */
       var modalId2 = this.getAttribute('data-modal'),
           modalElem2 = document.querySelector('.modal2[data-modal="' + modalId2 + '"]');


       /* После того как нашли нужное модальное окно, добавим классы
          подложке и окну чтобы показать их. */
       modalElem2.classList.add('active');
       overlay2.classList.add('active');
    }); // end click

 }); // end foreach
 modalButtons3.forEach(function(item){

   /* Назначаем каждой кнопке обработчик клика */
   item.addEventListener('click', function(e) {

      /* Предотвращаем стандартное действие элемента. Так как кнопку разные
         люди могут сделать по-разному. Кто-то сделает ссылку, кто-то кнопку.
         Нужно подстраховаться. */
      e.preventDefault();

      /* При каждом клике на кнопку мы будем забирать содержимое атрибута data-modal
         и будем искать модальное окно с таким же атрибутом. */
      var modalId3 = this.getAttribute('data-modal'),
          modalElem3 = document.querySelector('.modal3[data-modal="' + modalId3 + '"]');


      /* После того как нашли нужное модальное окно, добавим классы
         подложке и окну чтобы показать их. */
      modalElem3.classList.add('active');
      overlay3.classList.add('active');
   }); // end click

}); // end foreach



   closeButtons.forEach(function(item){

      item.addEventListener('click', function(e) {
         var parentModal = this.closest('.modal');

         parentModal.classList.remove('active');
         overlay.classList.remove('active');

        
      });

   }); // end foreach

   closeButtons2.forEach(function(item){

    item.addEventListener('click', function(e) {
       var parentModal2 = this.closest('.modal2');

       parentModal2.classList.remove('active');
       overlay2.classList.remove('active');

      
    });

 }); // end foreach

 closeButtons3.forEach(function(item){

   item.addEventListener('click', function(e) {
      var parentModal3 = this.closest('.modal3');

      parentModal3.classList.remove('active');
      overlay3.classList.remove('active');

     
   });

}); // end foreach


    document.body.addEventListener('keyup', function (e) {
        var key = e.keyCode;

        if (key == 27) {

            document.querySelector('.modal.active').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');
            document.querySelector('.modal2.active').classList.remove('active');
            document.querySelector('.overlay2').classList.remove('active');
            document.querySelector('.modal3.active').classList.remove('active');
            document.querySelector('.overlay3').classList.remove('active');
        };
    }, false);

    overlay2.addEventListener('click', function() {
        document.querySelector('.modal2.active').classList.remove('active');
        this.classList.remove('active');
    });


    overlay.addEventListener('click', function() {
        document.querySelector('.modal.active').classList.remove('active');
        this.classList.remove('active');
    });

    overlay3.addEventListener('click', function() {
      document.querySelector('.modal3.active').classList.remove('active');
      this.classList.remove('active');        
    
  });




}); // end ready