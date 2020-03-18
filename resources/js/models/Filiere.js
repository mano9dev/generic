const axios = require('axios');
export default class Filiere {

  constructor(libelle,code){
    this.libelleFil=libelle;
    this.codeFil=code;
  }

  static all (){
    const promise = new Promise((resolve, reject) => {
      axios.get('/api/structure/filiere')
        .then((response) => {
          
          resolve(response.data);
        })
        .catch((error) => {
          reject(error)
        })
    })

    return promise;
  }
  
  static create(filiere){

    return new Promise((resolve, reject) =>{
      axios.post('/api/structure/filiere', filiere)
      .then(response => {
        resolve(response.data)
      })
      .catch(error => { reject(console.log('error', error)) })
    })
  }
}