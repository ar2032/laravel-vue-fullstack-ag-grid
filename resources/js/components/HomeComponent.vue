<template>
<div class="container">
<div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home component</div>
                    <ul>
                        <li v-for="post in laravelData.data" :key="post._id">{{ post.STATUS }}</li>
                    </ul>

                    <Pagination :data="laravelData" @pagination-change-page="getResults" />
                </div>
            </div>
        </div>
</div>
</template>

<script>
import LaravelVuePagination from 'shetabit-laravel-vue-pagination';

 export default{
  components: {
            'Pagination': LaravelVuePagination
  },
  data() {
    return {
        laravelData: {}
    };
 },
 
    mounted(){
    this.getResults();
    },
    methods:{
            getResults(page = 1) {
                axios.get('api/home?page=' + page)
                    .then(response => {
                        this.laravelData = response.data;
                    });
            }

    },

}
 </script>


