<template>
  <validator-provider :name="name" :rules="rules">
    <div slot-scope="{ errors }">
      <div class="md-form">
        <input type="text" placeholder="Libelle de la filière" v-model="filiere.libelleFil" id="libellefil" class="form-control">
        <!-- <label for="libellefil">Libelle de la filière</label> -->
        <p>{{ errors[0] }}</p>
      </div>
    </div>
  </validator-provider>
</template>

<script>
export default {
  props : {
    type: {
      type: String,
      default : "text"
    },
    id:{
      type: String,
      required : false
    },
    name: {
      type: String
    },
    label: {
      type: String
    },
    rules: {
      type: String
    }
  },
  data(){
    return {

    }
  }
}
</script>

