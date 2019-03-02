// function link
function link(addr){
    window.location.href=addr;
  }
  
  // parcourir les elements et
  var list=document.getElementsByClassName('square');
  for(var i= 0; i < list.length; i++){
    let obj = list[i];
    obj.style.height = obj.offsetWidth+'px';
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
      }
  });
  
  
  
  function selector(field){
  
    // count img printed
    let imgprint=0;
  
    var list=document.getElementsByClassName('square');
    for(var i= 0; i < list.length; i++){
      let obj = list[i];
      var keywords = obj.children[0].innerHTML;
      var tab = keywords.split(",");
  
      for(var iter= 0; iter < tab.length; iter++){
        if( tab[iter] == field){
          obj.style.display='block';
          imgprint++;
          break;
        } else {
          obj.style.display='none';
        }
      }
    }
  
    if(imgprint == 0){
      document.getElementById('errorGallery').style.display='block';
    } else {
      document.getElementById('errorGallery').style.display='none';
    }
  }
  