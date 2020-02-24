<template>
    

    <div class="container">
    <form>
        <h1 style="text-align:center">Add Post</h1>
        <div class="form-group">
            <label for="name">Title: </label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" v-model="bmodal.title">
        </div>
        <div class="form-group">
            <label for="inputCat">Category:</label>
            <input type="text" class="form-control" id="category" placeholder="Enter category" v-model="bmodal.category">
        </div>
        <div class="form-group">
            <label for="inputAge">Age-group:</label>
            <input type="text" class="form-control" id="age" placeholder="Enter Age" v-model="bmodal.age">
        </div>
        <div class="form-group">
            <label for="inputDes">Description:</label>
            <input type="text" class="form-control" id="description" placeholder="Enter description" v-model="bmodal.description">
        </div>
        <button @click.prevent="click" class="btn btn-primary">Submit</button>
    </form>

</div>

</template>

<script>
export default {
    name:'BlogPost',
    data(){
        return{
            bmodal:{
                title: '',
                category: '',
                age: '',
                description: ''
            }

        }
        
    },
    methods:{

        click(){
            axios
            .post('/api/blogpost/create',this.bmodal)
            .then(response =>{
                // alert('blogPost');
                console.log(response);
                this.info = response;
                this.$router.push({name: 'blogpostview'});
            })

        }
    }
}
</script>


<style scoped>

</style>