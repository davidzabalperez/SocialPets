<style scoped>
    .panel-block {
        flex-direction: row;
        width: 100%;
        border: none;
        padding: 0;
    }
    input{
        border-radius: 0;
        border:0;padding:10px;background:whitesmoke;
        margin-bottom: 10px;
        border-radius: 7px;
        width: 40%;
        margin-left: 30%;
        color: black;

    }
    .auto-width{
        width: auto;
    }

</style>
<template lang="html">
    <div class="panel-block field">
        <div class="control">
            <input type="text" class="input" placeholder="Escribe aquí" v-on:keyup.enter="sendChat" v-model="chat">
        </div>
        <div class="control auto-width">
            <input type="button" class="btn btn-success" value="Enviar" v-on:click="sendChat">
        </div>

    </div>
    
</template>
<script>
    export default {
        props: ['chats', 'userid', 'friendid'],
        data(){
            return {
                chat: ''
            }
        },
        methods: {
            sendChat: function(e){
                if(this.chat != ''){
                    var data = {
                        chat: this.chat,
                        friend_id: this.friendid,
                        user_id: this.userid
                    }
                    this.chat = '';

                    axios.post('/chat/sendChat', data).then((response)=>{
                        this.chats.push(data)
                    })
                }
            }
        }

    }
</script>

