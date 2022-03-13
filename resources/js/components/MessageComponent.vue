<template>
    <div class="card chat-box">
        <div class="card-header">
            Chats</div>

        <div class="card-body v-chat-scroll">
            <p class="card-text" v-for="chat in chats"
               :key="chat.id">
                {{ chat.message }}
            </p>
        </div>
        <form class="card-footer" @submit.prevent="send">
            <div class="form-group">
                <input type="text" class="form-control"
                       placeholder="type message">
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                chats: []
            }
        },
        methods: {
            send: function(){
                console.log('Hey')
            }
        },
        created(){
            this.chats.push(
                { message: "hey", id: 1 },
                { message: "hey", id: 2 },
                { message: "hey", id: 3 },
                { message: "hey", id: 4 },
                { message: "hey", id: 5 },
                { message: "hey", id: 6 },
                { message: "hey", id: 7 },
                { message: "hey", id: 8 },
                { message: "hey", id: 9 },
                { message: "hey", id: 10 },
                { message: "hey44", id: 11 },
                { message: "hey44", id: 12 },
                { message: "hey44", id: 13 },
                { message: "herrry44", id: 14 },
                { message: "herry44", id: 15 },
                { message: "herry44", id: 16 },

            )
        }
    }
</script>

<style>
    .chat-box{
        height: 400px;
    }
    .card-body{
        overflow-y: scroll;
    }
</style>
