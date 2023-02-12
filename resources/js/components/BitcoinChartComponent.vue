<template>
    <div>
        <div class="alert alert-danger" role="alert" v-show="! this.chartData.datasets.length">
            <span class="text-danger">No data for chart</span>    
        </div>
        <div v-if="this.loaded">
            <Bar :data="chartData" />
        </div>
    </div>
</template>
  
<script lang="ts">
import axios from 'axios';
import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale
} from 'chart.js'
import { Bar } from 'vue-chartjs'

ChartJS.register(CategoryScale, LinearScale, BarElement, Title, Tooltip, Legend)

export default {
    name: 'App',
    components: {
    Bar
    },
    created() {
        this.fetchdata();
    },
    data() {
    return {
        chartData: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Deceber'],
            datasets: [],
        },
        loaded: false
    }
    },
    methods: {
        fetchdata() {
            axios.get('/get-data', this.form)
            .then(( response ) => {
                response.data.data.forEach(element => {
                    this.chartData.datasets.push({
                        label: this.chartData.labels[element.month - 1],
                        backgroundColor: '#f87979',
                        data: [element.ask, element.bid, element.high, element.last_price, element.low, element.mid, element.volume]
                    })
                });
                this.loaded = true;
                
            }).catch( (error) => {
                console.log(error);
            });
        },
    },
}
</script>