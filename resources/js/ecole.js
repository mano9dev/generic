
const axios = require('axios');

const Ecole = class Ecole {
  
  /* Enseignant CRUD CODE HERE */
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


  /* Matiere CRUD CODE HERE */
  getMatieres(){
    const promise = new Promise((resolve, reject) =>{
      axios.get('/api/structure/matiere').then(response => {
        resolve(response);
      })
      .catch(error => reject(error));
    })

    return promise;
  }

  /* Filiere CRUD CODE HERE */
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

  createFiliere(filiere){
    const promise = new Promise((resolve,reject) =>{
      axios.post('/api/structure/filiere',filiere)
      .then( response => resolve(response))
      .catch( error => { reject(error)})
    })

    return promise;
  }

  /* Classe CRUD CODE HERE */
  createClasse(classe){

    return axios.post('/api/structure/classe',classe);
  }

  getClasses(){

    return axios.get('/api/structure/classe');
  }
}

export default Ecole;