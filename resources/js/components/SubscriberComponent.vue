<template>
    <form @submit.prevent="subscribe">
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" placeholder="Enter price" v-model="form.price">
        </div>
        <div class="form-group">
            <label for="emailAdress">Email address</label>
            <input type="email" class="form-control" placeholder="Enter email" v-model="form.email">
        </div>
        <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
</template>
<script>
export default {
    data () {
        return {
            form: {
                price: '',
                email: ''
            }
        }
    },
    methods: {
        subscribe () {
            axios.post('/subscribe')
            .then(( response ) => { 
                
            }).catch( (error) => {

            });
        }
    } 
}
</script>