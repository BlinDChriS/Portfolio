// function link
function link(addr){
    window.location.href=addr;
  }
  
  // à l'envoi du document
  let form = document.getElementById('formmssg');
  let mssg = document.getElementById('mssgResult');
  
  // Ecouter > déclencher function asynchrone
  form.addEventListener('submit',async function(event){
      //suspendre envoie
      event.preventDefault();
  
      // formate les données du formulaire (Json)
      let data = new FormData(form);

      // fetch : en attente
      let response = await fetch(form.getAttribute('action'),{
        method: 'POST',
        headers:{
          'X-Requested-With':'xmlhttprequest'
        },
        body : data
      })

      // NetWork error;
      if(response.ok === false){
        mssg.innerHTML = "NetWork Error " + await response.status;
      }

      // result
      else{
        mssg.innerHTML = await response.json();
        document.forms['formmssg'].reset();
      }
  });
