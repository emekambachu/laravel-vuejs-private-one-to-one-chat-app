<template>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Friends</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">List</li>
                            <li class="list-group-item">List</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <message-component></message-component>
            </div>

        </div>
    </div>
</template>

<script>
    import MessageComponent from './MessageComponent';
    export default {
        components:{
            MessageComponent
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
