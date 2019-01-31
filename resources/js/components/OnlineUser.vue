<style>
    .red{
        color:red;
    }
    .green{
        color: green;
    }
    .red, .green{

       margin-top: -20px;
       display: flex;
       flex-direction: row-reverse;
       margin-right: 30%;
        
    }

</style>


<template lang="html">
    <div>
        
        <i class="fa fa-circle green" v-if="checkUser()"></i>
        <i class="fa fa-circle red" v-else></i>
     </div>
    
</template>

<script>
    export default {

        props: ['friend', 'onlineusers'],
        methods: {
            checkUser: function(){
                return _.find(this.onlineusers, {id: this.friend.id});
            }
        }

    }
        
</script>

