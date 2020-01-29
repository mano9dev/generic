
const axios = require('axios');

const Ecole = class Ecole {
  
  // Enseignant
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

  createEnseignant(enseignant){
    
    return axios.post('/api/structure/enseignant',enseignant);
  }


  // Matiere
  getMatieres(){
    const promise = new Promise((resolve, reject) =>{
      axios.get('/api/structure/matiere').then(response => {
        resolve(response);
      })
      .catch(error => reject(error));
    })

    return promise;
  }

  // Filiere
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

export default Ecole;