<style>
    .red{
        border-color: #ff0000 transparent transparent transparent;


    }
    .green{
        border-color:green transparent transparent transparent;

    }
    .green, .red{
        float: left;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 50px 50px 0 0;
        display: inline-block;
    }


</style>


<template lang="html">

        <i class="green" v-if="checkUser()"></i>
        <i class=" red" v-else></i>


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
