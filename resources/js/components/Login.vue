<template>
    
<div class="container">
    <form>
        <h1 style="text-align:center">Login to the System</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address : {{lmodal.email}}</label>
            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter email" v-model="lmodal.email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password: {{lmodal.password}} </label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" v-model="lmodal.password">
            {{error.password}}
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button @click.prevent="click" class="btn btn-primary">Submit</button>
        
    </form>

</div>

</template>


<script>
export default {
    name: 'Login',
    created(){

    },
    data(){
        return{
            lmodal:{
                email:'',
                password:''
            },
            error:{
                email:'',
                password:''
                },
        }
    },
    
    methods:{
        click(){
            axios
            .post('/api/Login/',this.lmodal)
            .then(response => {
                alert('aaaaaaah');
                console.log(response.data)
                let data = response.data;
                if(response.data.status == 'success'){
                    console.log('suc');
                }else{
                    console.log(data.error);
                    this.error.password = data.error;
                }
                // this.info = response
            })
        }
        
        // log(){
        //     let response = '';
        //     let data = response.data;
        //     if()
        // }
    }
}
</script>

<style scoped>

</style>