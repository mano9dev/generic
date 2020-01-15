<template>
  <div>
    <vuetable 
    ref="vuetable"
    :api-mode="false"
    :fields="fields"
    :per-page="perPage"
    :data-manager="dataManager"
    pagination-path="pagination"
    @vuetable:pagination-data="onPaginationData"
    >

    <div slot="actions" slot-scope="props">
      <a href="#" class="btn btn-sm btn-primary" @click.prevent="update(props.rowData)" ><i class="fas fa-edit"></i></a>
    </div>
    </vuetable>

    <div style="padding-top:10px">
      <vuetable-pagination ref="pagination"
        @vuetable-pagination:change-page="onChangePage"
      ></vuetable-pagination>
    </div>
    
  </div>
</template>

<script>
import Vuetable from "vuetable-2";
import VuetablePagination from "vuetable-2/src/components/VuetablePagination";
import _ from "lodash";

// import ModalForm from "./ModalForm";
export default {

  data(){
    return {
      fields : ['id','nom','prenoms','email','telephone','adresse','actions'],
      perPage: 10,
      lines : [],
    }
  },
  components:{
    Vuetable,
    VuetablePagination,
    // ModalForm
  },
  watch : {
    lines(newvalue, oldvalue){
      this.$refs.vuetable.refresh();
    }
  },
  
  mounted(){
    this.$http.get('/api/structure/enseignant').then( response => {
      this.lines = response.data;
      console.log('lines', this.lines);
    })
    .catch(error => console.log( error));
  },

  methods:{
    onPaginationData(paginationData) {
      this.$refs.pagination.setPaginationData(paginationData);
    },
    onChangePage(page) {
      this.$refs.vuetable.changePage(page);
    },
    dataManager(sortOrder, pagination) {
      if (this.lines.length < 1) return;

      let local = this.lines;

      // sortOrder can be empty, so we have to check for that as well
      if (sortOrder.length > 0) {
        console.log("orderBy:", sortOrder[0].sortField, sortOrder[0].direction);
        local = _.orderBy(
          local,
          sortOrder[0].sortField,
          sortOrder[0].direction
        );
      }

      pagination = this.$refs.vuetable.makePagination(
        local.length,
        this.perPage
      );
      console.log('pagination:', pagination)
      let from = pagination.from - 1;
      let to = from + this.perPage;

      return {
        pagination: pagination,
        data: _.slice(local, from, to)
      };
    },

    update(value){
      const data= value;
      this.$root.$emit('enseignant:edit',data);
    }
  },
  computed : {
    fullname(){
      return this.enseignant.nom + ' '+this.enseignant.prenoms;
    }
  }
}
</script>

<style>

</style>