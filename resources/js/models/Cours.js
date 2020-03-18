const axios = require('axios');
export default class Cours {

  constructor() {

  }

  static all() {
    const promise = new Promise((resolve, reject) => {
      axios.get('/api/structure/cours')
        .then((response) => {

          resolve(response.data);
        })
        .catch((error) => {
          reject(error)
        })
    })

    return promise;
  }

  static create(cours) {

    return new Promise((resolve, reject) => {
      axios.post('/api/structure/cours', cours)
        .then(response => {
          resolve(response.data)
        })
        .catch(error => { reject(console.log('error', error)) })
    })
  }
}