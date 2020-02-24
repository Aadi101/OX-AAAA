<template>
    <div>
        <h1>Edit Post</h1>
        <form @submit.prevent="updatePost">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" v-model="post.title">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Category:</label>
                    <input type="text" class="form-control" v-model="post.category">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Age:</label>
                    <input type="text" class="form-control" v-model="post.age">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" v-model="post.description" rows="5"></textarea>
                </div>
            </div>
        </div><br />
        <div class="form-group">
            <button class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
</template>

<script>
export default {
    data() {
        return {
            post: {}
        }
    },
    created() {
        let uri = `http://127.0.0.1:8000/api/blogpost/edit/${this.$route.params.id}`;
        this.axios.get(uri).then((response) => {
            this.post = response.data;
        });
    },
    methods: {
        updatePost() {
        let uri = `http://127.0.0.1:8000/api/blogpost/update/${this.$route.params.id}`;
        this.axios.post(uri, this.post).then((response) => {
        this.$router.push({name: 'blogpostview'});
        });
        }
    }
}
</script>

<style scoped>

</style>