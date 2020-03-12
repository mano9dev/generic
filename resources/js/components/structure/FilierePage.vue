<template>
  <div class="wrapper">
	  <!-- <nav-bar> </nav-bar>
	  <side-bar> </side-bar> -->
	  <div class="content-wrapper">

	    <!-- Content Header (Page header) -->
	    <div class="header bg-primary-g pb-6">
	      <div class="container-fluid">
	        <div class="header-body">
	          <div class="row align-items-center py-4">
	            <div class="col-lg-6 col-7">
	              <div class="d-none d-md-inline-block ml-md-4 mb-md-4">
                  <h6 class="h6 text-white d-inline-block mb-0">{{title}}</h6>
                  <!-- <nav aria-label="breadcrumb" >
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark bg-transparent">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                  </nav> -->
                </div>
	            </div>
	            <div class="col-lg-6 col-5"></div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <!-- /.content-header -->

	    <!-- Main content -->
	    <section class="content">
	      <div class="container-fluid-2 mt--8">
	        <div class="card card-2">
	          <div class="card-body">
	            <h4 class="my-auto">Create some awesome thing</h4>
	          </div>
	        </div>
	        
	      </div><!-- /.container-fluid -->

	      <div class="container-fluid-2">
	        <div class="card card-2">
	          <div class="card-header">
							<div class="row">	
								<div class="col-6">
										<h3 class="card-title">{{title}}</h3>
								</div>
								<div class="col-6">
									<div class="btn-toolbar justify-content-end" role="toolbar" aria-label="Toolbar with button groups">
										<div class="btn-group btn-group-sm">
											<button type="button" @click="filiereModalShow()" class="btn bg-gradient-success"> <i class="fas fa-sm fa-plus"></i> Nouveau</button>
										</div>
									</div>
								</div>
							</div>
	          </div>
	          <div class="card-body">
	            <div class="row">
								<div class="col-md-12">
									
								</div>
	              <div class="col-md-12">
	                <filiere-table></filiere-table>
	              </div>
	            </div>
	          </div>    
	        </div>
	      </div>
	    </section>
	    <!-- /.content -->
			<!-- Filiere Modal -->
			<filiere-edit ref="filieremodal"></filiere-edit>

	  </div>
	</div>
</template>

<script>
import {mapState, mapGetters} from "vuex";
import FiliereTable from "../utils/Table/FiliereTable";
import FiliereEdit from "../utils/FiliereEdit";
export default {
  data(){
    return {
      title:'Filiere'
    }
	},

	// store : this.$parent.$store,

	components : {
		FiliereTable,
		FiliereEdit
	},
	methods :{
		filiereModalShow(){
			// this.$refs.filieremodal.title='Gestion des Filières';
			$('#filiere-modal').modal('show');
		}
	},
  mounted(){

		console.log('Component mounted')
  }
}
</script>
