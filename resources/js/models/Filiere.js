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
  
}