<template lang="html">
	<div class="chat-log">
		<chat-message v-for="message in messages" :message="message"></chat-message>
	</div>
</template>

<script>
    export default{
        data(){
            return {
                messages: [
                    {
                        message: 'One Hey!',
                        user: 'Yoda'
                    },
                    {
                        message: 'Two Hey!',
                        user: 'Luke'
                    }
                ]
            }
        }
    }
</script>

<style lang="css">

</style>