<template>
    <div>
        <div class="alert alert-success" role="alert" v-show="success && !Object.keys(errors).length">
            Successfully send
        </div>
        <div class="alert alert-danger" role="alert" v-show="Object.keys(errors).length && !success">
            <div v-for="(errorArray, imdex) in errors" :key="imdex">
                <div v-for="(allErrors, imdex) in errorArray" :key="imdex">
                    <span class="text-danger">{{ allErrors}} </span>
                </div>
            </div>
        </div>
        <form @submit.prevent="subscribe">
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="any" class="form-control" placeholder="Enter price" v-model="form.price">
            </div>
            <div class="form-group">
                <label for="emailAdress">Email address</label>
                <input type="email" class="form-control" placeholder="Enter email" v-model="form.email">
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>
</template>
<script>
export default {
    data () {
        return {
            form: {
                price: '',
                email: ''
            },
            errors: {},
            success: false
        }
    },
    methods: {
        subscribe () {
            axios.post('/subscribe', this.form)
            .then(( response ) => {
                
                this.errors = {};
                this.success = response.data.success;
                
            }).catch( (error) => {
                this.errors = error.response.data.errors;
                this.success = false;
            }).finally(() => {
                this.clearForm(this.form);
            });
        },
        clearForm(form) {
            Object.keys(form).forEach(function(key, index) {
                form[key] = '';
            });
        }
    }
}
</script>