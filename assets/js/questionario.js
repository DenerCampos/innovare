/**
 * Questionario
 * 
 * @author Dener Campos
 */

$(document).ready(function() {
    //Sortable da lista de perguntas    
    $( "#lista-perguntas" ).sortable({
      placeholder: "ui-state-highlight"
    });
    $( "#lista-perguntas" ).disableSelection();

    //teste
    let pergunta = {
        id: 1,
        numero: 1,
        titulo: "Vamos avaliar agora a solução..."
    };
    novaPergunta(pergunta);
    //teste

    //Adiciona nova pergunta
    function novaPergunta(pergunta = null){
        let perguntaMenu = $('<a>', {
                                id: pergunta.id,
                                class: "nav-link",
                                "data-toggle": "pill",
                                href: "#corpo-"+pergunta.id,
                                role: "tab",
                                "aria-controls": "#corpo-"+pergunta.id,
                                "aria-selected": "true",
                                html: pergunta.numero + ") " + pergunta.titulo.substring(0,20) + "..."
                            });
        let corpo = $("<div>", {
            html: $("")
        });
        let perguntaCorpo = $('<div>', {
                                id: "corpo-"+pergunta.id,
                                class: "tab-pane fade",
                                role: "tabpanel",
                                html: pergunta.titulo
                            });

        perguntaMenu.appendTo("#lista-perguntas");
        perguntaCorpo.appendTo("#v-pills-tabContent");
    }

});