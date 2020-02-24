<template>

<div class="container">
    <form>
        <h1 style="text-align:center">Sign Up to the System</h1>
        <div class="form-group">
            <label for="name">Name: {{modal.name}}</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" v-model="modal.name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address:  {{modal.email}}</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" v-model="modal.email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password:{{modal.password}}</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" v-model="modal.password">
        </div>
        <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button @click.prevent="click" class="btn btn-primary">Submit</button>
    </form>

</div>
</template>



<script>

export default {
    name: "SignUp",
    created(){

    },
    data(){
        return {
            modal:{
                name: '',
                email: '',
                password: ''
            }
        }

    },

    methods:{
        
        click(){
            axios
            .post('/api/sign-up/',this.modal)
            .then(response => {
            alert('blah blah');
            console.log(response)
            this.info = response
            })
        }
        // addUser(){
        //     fetch('/api/sign-up', {
                
        //         method:'post',
        //         body: JSON.stringify(this.modal),
        //         headers:{
        //             'content-type': 'application/json'
        //         }
        //     })
        //     .then(res => res.json())
        //     .then(data => {
        //         this.users.name = "";
        //         this.users.email = "";
        //         this.users.password = "";
        //         alert("user added");
        //     })
        //     .catch(err => console.log(err));
        // }


    },

    beforeCreate: function(){ 

    //alert('Before Create');

    },

    created: function(){ 

    //alert('Created');

    },

    beforeMount: function(){ 

    //alert('Before Mount');

    },

    mounted () {
        // axios
        // .post('/api/sign-up/' + this.modal)
        // .then(response => {
        //     alert('blah blah');
        //     console.log(response)
        //     this.info = response
        //     })
    },

    beforeUpdate: function(){ 

    //alert('Before Update');

    },

    updated: function(){ 

    //alert('Updated');

    },

    beforeDestroy: function(){ 

    //alert('Before Destroy');

    },

    destroyed: function(){ 

    //alert('Destroyed');

    }
}
</script>



<style scoped>

</style>