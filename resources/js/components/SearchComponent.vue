<template>
    <div>
   <form @submit.prevent="getResults" >
                <div class="form-group">
                    <label for="">Enter keyword</label>
                    <input type="text" v-model="query" placeholder="Search here...">
                </div>
                <div class="form-group">
                    <label for="">Choose Column Name</label>
                    <select v-model="parame">
                    <option value="STATUS">STATUS</option>
                    <option value="DDC_CODE">DDC_CODE</option>
                    <option value="TRADE_NAME">TRADE_NAME</option>
                    <option value="SCIENTIFIC_CODE">SCIENTIFIC_CODE</option>
                    <option value="SCIENTIFIC_NAME">SCIENTIFIC_NAME</option>
                    <option value="INGREDIENT_STRENGTH">INGREDIENT_STRENGTH</option>
                    <option value="DOSAGE_FORM_PACKAGE">DOSAGE_FORM_PACKAGE</option>
                    <option value="ROUTE_OF_ADMIN">ROUTE_OF_ADMIN</option>
                    <option value="PACKAGE_PRICE">PACKAGE_PRICE</option>
                    <option value="GRANULAR_UNIT">GRANULAR_UNIT</option>
                    <option value="MANUFACTURER">MANUFACTURER</option>
                    <option value="REGISTERED_OWNER">REGISTERED_OWNER</option>
                    <option value="UPDATED_DATE">UPDATED_DATE</option>
                    <option value="SOURCE">SOURCE</option>

                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
    <table border = "1">
            <tr>
            <td>STATUS</td>
            <td>DDC_CODE</td>
            <td>TRADE_NAME</td>
            <td>SCIENTIFIC_CODE</td>
            <td>SCIENTIFIC_NAME</td>
            <td>INGREDIENT_STRENGTH</td>
            <td>DOSAGE_FORM_PACKAGE</td>
            <td>ROUTE_OF_ADMIN</td>
            <td>PACKAGE_PRICE</td>
            <td>GRANULAR_UNIT</td>
            <td>MANUFACTURER</td>
            <td>REGISTERED_OWNER</td>
            <td>UPDATED_DATE</td>
            <td>SOURCE</td>
        </tr>
    
         <tr v-for="search in post" :key="search._id">
            <td>{{ search.STATUS }}</td>
            <td>{{ search.DDC_CODE }}</td>
            <td>{{ search.TRADE_NAME }}</td>
            <td>{{ search.SCIENTIFIC_CODE }}</td>
            <td>{{ search.SCIENTIFIC_NAME }}</td>
            <td>{{ search.INGREDIENT_STRENGTH }}</td>
            <td>{{ search.DOSAGE_FORM_PACKAGE }}</td>
            <td>{{ search.ROUTE_OF_ADMIN }}</td>
            <td>{{ search.PACKAGE_PRICE }}</td>
            <td>{{ search.GRANULAR_UNIT }}</td>
            <td>{{ search.MANUFACTURER }}</td>
            <td>{{ search.REGISTERED_OWNER }}</td>
            <td>{{ search.UPDATED_DATE }}</td>
            <td>{{ search.SOURCE }}</td>
            </tr>  
   
    </table>
    </div> 
</template>

<script>

export default {
    data() {
        return {
            post:[],
            query:null,
            parame:null
        }
    },
    methods:{
        getResults(){
            axios.get('/search',{params:{query:this.query,parame:this.parame}})
            .then(response=>this.post=response.data)
        }
    }
}
</script>