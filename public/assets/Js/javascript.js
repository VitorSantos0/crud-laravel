(function(win, doc){
    'use strict';

    //DELETE
    function confirmDel(event){        
        event.preventDefault();
        //console.log(event.target.href);
        let token = doc.getElementsByName("_token")[0].value;

        if(confirm("Quer apagar o registro?")){
            let ajax = new XMLHttpRequest();
            ajax.open("DELETE", event.target.href);
            ajax.setRequestHeader('X-CSRF-TOKEN',token);
            ajax.onreadystatechange = function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    win.location.href="events";
                }
            };
            ajax.send();
        }else{
            return false;
        }
    }

    if(doc.querySelector('.js-del')){
        //Selecionar todos os botoes de deletar
        let btn = doc.querySelectorAll('.js-del');

        for(let i=0; i < btn.length; i++){
            //Quanto botao clicado usar a function para deletar
            btn[i].addEventListener('click', confirmDel, false);
        }
        
    }

})(window,document);