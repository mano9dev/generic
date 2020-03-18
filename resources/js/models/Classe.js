const axios = require('axios');

export default class Classe{
  constructor(){

  }

  static create(classe){
    
    return new Promise((resolve, reject) => {
      axios.post('/api/structure/filiere', filiere)
      .then(response => resolve(response.data))
      .catch(error => reject(console.log('error',error)))
    })
  }
}