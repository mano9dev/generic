<template>
    <div class="login-box">
        <div class="login-logo">
          <a routerLink="dashboard"><b>Generic </b>App</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form @submit.prevent="submitForm(user)">
              <div class="input-group mb-3">
                <input type="email" name="email" v-model="user.email" class="form-control" placeholder="Email" >
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" name="password" v-model="user.password" class="form-control" placeholder="Password" >
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
        email:'',
        password:''
      }
    }
  },
  mounted(){
    var user = {
      email : 'janedoe@gmail.com',
      password : 'Jane-19'
    }
    this.submitForm(user);
  },
  methods:{
    submitForm(user){
      axios.post('/api/login',user)
      .then( response => {
        // console.log('response',response.data);
        // localStorage.setItem('api',response.data.user.api_token);
        // localStorage.setItem('user',JSON.stringify(response.data.user));
        sessionStorage.setItem('api',response.data.user.api_token);
        sessionStorage.setItem('user',JSON.stringify(response.data.user));
        // console.log('login success', true);
          this.$router.push('/');
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

