<template>
  <div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th v-for="field in fields" :key="field">

          </th>
        </tr>
      </thead>
    </table>
  </div>
</template>

<script>
export default {
  name : 'DataTable',

  props : {
    fields : {
      type : Array,
      required: true
    },
    data: {
      type: [Array,Object],
      default:null
    }
  },
  data(){
    return {
      tableFields
    }
  }
}
</script>

<style>

</style>