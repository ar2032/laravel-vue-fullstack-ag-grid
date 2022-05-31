<template>
<ag-grid-vue
    style="width: 1000px; height: 550px"
    class="ag-theme-alpine"
    :pagination="pagination"
    :paginationPageSize="paginationPageSize"
    :sideBar="sideBar"
    :autoGroupColumnDef="autoGroupColumnDef"
    :columnDefs="columnDefs"
    :rowData="rowData"
  >
  </ag-grid-vue>
</template>

<script>
import "ag-grid-community/dist/styles/ag-grid.css";
import "ag-grid-community/dist/styles/ag-theme-alpine.css";
import { AgGridVue } from "ag-grid-vue";
import axios from 'axios';
import 'ag-grid-enterprise';

 export default{
  components: {
    AgGridVue
  },
  data() {
    return {
      columnDefs: null,
      rowData: null,
      pagination:true,
      paginationPageSize: 10,
    };
 },
 created() {
    this.autoGroupColumnDef = {
      minWidth: 250,
    };
    this.sideBar = 'columns';
  },
 
    mounted(){
    this.columnDefs = [
      
      { field: "STATUS",filter: true,rowGroup: true,enableRowGroup: true },
      { field: "DDC_CODE"},
      { field: "TRADE_NAME"},
      { field: "SCIENTIFIC_CODE"},
      { field: "SCIENTIFIC_NAME"},
      { field: "INGREDIENT_STRENGTH"},
      { field: "DOSAGE_FORM_PACKAGE"},
      { field: "ROUTE_OF_ADMIN",rowGroup: true,enableRowGroup: true,enablePivot: true},
      { field: "PACKAGE_PRICE",aggFunc: 'sum'},
      { field: "GRANULAR_UNIT",aggFunc: 'sum'},
      { field: "MANUFACTURER"},
      { field: "REGISTERED_OWNER"},
      { field: "UPDATED_DATE",},
      { field: "SOURCE",rowGroup: true,enableRowGroup: true},

    ];
    axios.get('/api/home')
    .then(response=>this.rowData=response.data.data)
    },
    
}
 </script>


