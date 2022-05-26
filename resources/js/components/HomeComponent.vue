<template>
<div class="container">
<div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home component</div>
                   
                        <table border = "1">
                        <tr>
                        
                        <td scope="col">STATUS</td>
                        <td scope="col">DDC_CODE</td>
                        <td scope="col">TRADE_NAME</td>
                        <td scope="col">SCIENTIFIC_CODE</td>
                        <td scope="col">SCIENTIFIC_NAME</td>
                        <td scope="col">INGREDIENT_STRENGTH</td>
                        <td scope="col">DOSAGE_FORM_PACKAGE</td>
                        <td scope="col">ROUTE_OF_ADMIN</td>
                        <td scope="col">PACKAGE_PRICE</td>
                        <td scope="col">GRANULAR_UNIT</td>
                        <td scope="col">MANUFACTURER</td>
                        <td scope="col">REGISTERED_OWNER</td>
                        <td scope="col">UPDATED_DATE</td>
                        <td scope="col">SOURCE</td>
                        
                        </tr>
                        <tr v-for="post in laravelData.data" :key="post._id">
                            
                            
                            <td>{{ post.STATUS }}</td>
                            <td>{{ post.DDC_CODE }}</td>
                            <td>{{ post.TRADE_NAME }}</td>
                            <td>{{ post.SCIENTIFIC_CODE }}</td>
                            <td>{{ post.SCIENTIFIC_NAME }}</td>
                            <td>{{ post.INGREDIENT_STRENGTH }}</td>
                            <td>{{ post.DOSAGE_FORM_PACKAGE }}</td>
                            <td>{{ post.ROUTE_OF_ADMIN }}</td>
                            <td>{{ post.PACKAGE_PRICE }}</td>
                            <td>{{ post.GRANULAR_UNIT }}</td>
                            <td>{{ post.MANUFACTURER }}</td>
                            <td>{{ post.REGISTERED_OWNER }}</td>
                            <td>{{ post.UPDATED_DATE }}</td>
                            <td>{{ post.SOURCE }}</td>
                           
                            
                        </tr>
                        </table>
                    

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


