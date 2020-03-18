const axios = require('axios');

export default class Enseignant {

  constructor(){
    
  }

  static create(enseignant){

    return new Promise((resolve, reject) => {
      axios.post('/api/structure/enseignant', enseignant)
      .then(response => {
        resolve(response.data)
      })
      .catch(error => reject(console.log('Enseignant.create error', error)))
    })
  }

  static all(){
    return new Promise((resolve, reject) => {
      axios.get('/api/structure/enseignant')
      .then((response) => {
        resolve(response.data)
      })
      .catch(error => reject(console.log('Enseignant.all error', error)))
    })
  }
}