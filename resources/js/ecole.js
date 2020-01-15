
const axios = require('axios');

class Ecole {
  
  getEnseignants() {
   const promise = new Promise((resolve, reject) =>{

     axios.get('/api/structure/matiere')
     .then( (response)=>{
       resolve(response)
     } )
     .catch( error => { return reject(error) })
   });

   return promise;
  }
  getMatieres(){
    const promise = new Promise((resolve, reject) =>{
      axios.get('/api/structure/matiere').then(response => {
        resolve(response);
      })
      .catch(error => reject(error));
    })

    return promise;
  }
  getFilieres(){
    const promise = new Promise((resolve,reject) => {
      axios.get('/api/structure/filiere')
      .then( (response)=>{
        resolve(response);
      } )
      .catch((error) => {
        reject(error)
      })
    })

    return promise;
  }

  createFiliere(data){
    const promise = new Promise((resolve,reject) =>{
      axios.post('/api/structure/filiere',data)
      .then( response => resolve(response))
      .catch( error => { reject(error)})
    })

    return promise;
  }
}

const ecole = new Ecole;

export default ecole;