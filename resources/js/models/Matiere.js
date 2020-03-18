const axios = require('axios');
export default class Matiere {

  constructor() {
    
  }

  static all() {
    const promise = new Promise((resolve, reject) => {
      axios.get('/api/structure/matiere')
        .then((response) => {

          resolve(response.data);
        })
        .catch((error) => {
          reject(error)
        })
    })

    return promise;
  }

  static create(matiere) {

    return new Promise((resolve, reject) => {
      axios.post('/api/structure/matiere', matiere)
        .then(response => {
          resolve(response.data)
        })
        .catch(error => { reject(console.log('error', error)) })
    })
  }
}