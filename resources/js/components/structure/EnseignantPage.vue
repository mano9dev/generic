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
								<div class="col-md-6">
									<h3 class="card-title">{{title}}</h3>
								</div>
								<div class="col-md-6">
									<button type="button" @click="create()" class="btn btn-block bg-gradient-success"> <i class="fas fa-sm fa-plus"></i> Ajouter</button>
								</div>
							</div>
	          </div>
	          <div class="card-body">
	            <div class="row">
	              <div class="col-md-12">
									<enseignant-table> </enseignant-table>
	              </div>
	            </div>
	          </div>    
	        </div>
	      </div>
	    </section>
	    <!-- /.content -->

			<!-- Edit Global enseignant Modal -->
			<enseignant-edit :id="'enseignant-edit'" ref="enseignantModal"> </enseignant-edit>
			<!-- Edit Global enseignant Modal -->
	  </div>
	</div>
</template>

<script>
	import EnseignantTable from "../utils/Table/EnseignantTable";
	import EnseignantEdit from "../utils/EnseignantEdit";
	export default {
		components: {
			EnseignantTable,
			EnseignantEdit
		},

		props : {
			title : {
				type : String,
				default : 'Enseignant'
			}
		},
		data(){
			return {
				
			}
		},
		methods : {
			create(){
				this.$refs.enseignantModal.showModal();
			}
		},
		mounted(){
			
		},
	}
</script>