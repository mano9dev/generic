<template>
    <div class="login-box">
        <div class="login-logo">
          <a routerLink="dashboard"><b>Generic </b>App</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form @submit.prevent="submitForm(user)" autocomplete="off">
              <div class="input-group mb-3">
                <input type="email" autocomplete="off" autofocus name="email" v-model="user.username" class="form-control" placeholder="Email" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" autocomplete="off" name="password" v-model="user.password" class="form-control" placeholder="Password" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <!-- /.col -->
                <div class="col-6">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Connexion</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

            <!-- <div class="social-auth-links text-center mb-3">
              <p>- OR -</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
              </a>
            </div> -->
            <!-- /.social-auth-links -->

            <p class="mb-1">
              <a href="#">I forgot my password</a>
            </p>
            <p class="mb-0">
              <a routerLink="register" class="text-center">Register a new membership</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
    </div>
</template>

<script>
export default {
  data(){
    return {
      user :{
         
      }
    }
  },
  mounted(){
    
    this.user.username='janedoe@gmail.com';
    this.user.password='Jane-19';
    // this.submitForm(user);
  },
  methods:{
    submitForm(user){
      const data = {
        grant_type : 'password',
        client_id : '606515c9d8282ab7cc09390c371d09650a16b0bad83719294b2c26cc658aaf62d104904f9e4c5ab6',
        client_secret : 'ZtjpZP7rBMW4MuEPVz2OXLBLxeRxwlfW4299GmBe',
        username : user.username,
        password : user.password,
        scope : ''
      };
      
      axios.post('/api/login',user)
      .then( response => {
        console.log('response',response.data);

        sessionStorage.setItem('api',response.data.user.api_token);
        sessionStorage.setItem('user',JSON.stringify(response.data.user));

          this.$router.push('/dashboard');
        })
      .catch( err => console.log('error',err));

    },
    logout(){

      sessionStorage.removeItem('api');
      sessionStorage.removeItem('user');
      // localStorage.removeItem('api');
      // localStorage.removeItem('user');

      this.$rooter.push('login');
    }
  }
}
</script>

