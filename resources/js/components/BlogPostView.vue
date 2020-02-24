<template>
  <div>
    <h1>BlogPosts</h1>
    <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2">
        <router-link :to="{ name: 'blogpost' }" class="btn btn-primary">Create BlogPost</router-link>
      </div>
    </div>
    <br />

    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Category</th>
          <th>Age</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(post) in blogposts" :key="post.id">
          <td>{{ post.id }}</td>
          <td>{{ post.title }}</td>
          <td>{{ post.category }}</td>
          <td>{{ post.age }}</td>
          <td>{{ post.description }}</td>
          <td><router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-primary">Edit</router-link></td>
          <td>
            <button class="btn btn-danger" @click.prevent="deletePost(post.id)">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      //BlogPostView: {},
      blogposts: []
    };
  },
  created() {
    let uri = 'http://127.0.0.1:8000/api/blogpostview';
    this.axios.get(uri).then(response => {
    this.blogposts = response.data.blogpost;
    });
  },
  mounted(){
      

  },

  methods: {
    // fetchData(){
    //     fetch('api/blogpost')
    //     .then(res =>res.json())
    //     .then(data =>{
    //         this.blogposts = res.data.data;
    //     })
    // },
    // loadBlogs(){
    //     axios
    //         .get('/blogspot')
    //         .then(({data}) => (this.BlogPostView = data.data));
    // }
    deletePost(id) {
        let uri = `http://127.0.0.1:8000/api/blogpost/delete/${id}`;
        this.axios.delete(uri).then(response => {
        this.blogposts.splice(this.blogposts.indexOf(id), 1);
        });
    }
  }
};
</script>


<style scoped>
</style>