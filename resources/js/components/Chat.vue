// ES6
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)
 
// ES5
var Vue = require('vue')
Vue.use(require('vue-chat-scroll'))
<style scoped>
    /* width */
    ::-webkit-scrollbar {
    width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
    background: #f1f1f1; 
    }
    
    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #888; 
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: #555; 
    }
    .panel-block{
        flex-direction: column;
        border: none;
    }
    .chat{
        width: 100%;
        padding: 20px;
        box-shadow: inset 0 0 20px 0 grey;
        margin-bottom: 20px;
        border: 1px solid rgb(20, 143, 214);
        color: black;
        max-height: 600px;
        overflow-x: auto;
        opacity: 0.8;
        margin-top: 2%;
    }

    .chat .chat-right, .chat .chat-left{
        max-width: 70%;
        box-shadow: 0 0 8px 0px grey;
        padding: 8px;
        margin: 4px;
        word-break: break-all;
        border-radius: 7px;
    }
    .chat-right{
         float: right;
         background-color: white;
        font-weight: 1000;
    }
    .chat-left{
        float: left;
        background-color: white;
        font-weight: 1000;

    }
    .no-message{
        height: 200px;
        display: flex;
        align-items: center;
        font-size: 20px;
        margin-left: 37%;
        font-weight: bold;
    }
    .container{
        background-color: black;
    }

</style>

<template>
    <div class="panel-block">
        <div class="chat" v-if="chats.length != 0">
            <div v-for="chat in chats" style="overflow:auto;" class="chatbox">
                <div class="chat-right" v-if="chat.user_id == userid">
                    {{ chat.chat }}
                </div>
                <div class="chat-left" v-else>
                    {{ chat.chat }}
                </div>
            </div>
     
        </div>


        <div v-else class="no-message">
            No tienes ningun mensaje.
        </div>
            <chat-composer v-bind:userid="userid" v-bind:chats="chats" v-bind:friendid="friendid"></chat-composer>
    </div>
</template>
<script>
    export default {
        props: ['chats', 'userid', 'friendid']

    }
</script>
