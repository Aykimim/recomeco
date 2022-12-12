//Alertas
//<script type='text/javascript'>alert('Mensagem enviada com sucesso');</script>
//FIM Alertas

//Alertas
const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert('Casdastro feito', 'success')
  })
}
//FIM Alertas

//Modal

const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", () => {
  myInput.focus();
});
//FIM Modal



//desabilita o botão no início
document.getElementById("cadastrar").disabled = true;

//cria um event listener que escuta mudanças no input
document.getElementById("ternos").addEventListener("ternos", function(event){

  //busca conteúdo do input
    var conteudo = document.getElementById("ternos").value;

    //valida conteudo do input 
    if (conteudo !== null && conteudo !== '') {
      //habilita o botão
      document.getElementById("cadastrar").disabled = false;
    } else {
      //desabilita o botão se o conteúdo do input ficar em branco
      document.getElementById("cadastrar").disabled = true;
    }
});