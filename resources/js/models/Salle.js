const axios = require('axios');
export default class Salle {

  constructor() {

  }

  static all() {
    const promise = new Promise((resolve, reject) => {
      axios.get('/api/structure/salle')
        .then((response) => {

          resolve(response.data);
        })
        .catch((error) => {
          reject(error)
        })
    })

    return promise;
  }

  static create(salle) {

    return new Promise((resolve, reject) => {
      axios.post('/api/structure/salle', salle)
        .then(response => {
          resolve(response.data)
        })
        .catch(error => { reject(console.log('error', error)) })
    })
  }
}