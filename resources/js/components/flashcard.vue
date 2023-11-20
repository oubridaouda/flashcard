<template>
    <div class="d-flex flex-row justify-content-center align-items-center">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-wrap">
                        <div class="card-header one">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                        <div class="card-content">
                            <h1 class="card-title">Title</h1>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <button class="card-btn two">css3</button>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back one">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-wrap">
                        <div class="card-header three">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                        <div class="card-content">
                            <h1 class="card-title">Title</h1>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <button class="card-btn two">css3</button>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back three">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-wrap">
                        <div class="card-header four">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                        <div class="card-content">
                            <h1 class="card-title">Title</h1>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <button class="card-btn two">css3</button>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back four">
                    <h1>John Doe</h1>
                    <p>Architect & Engineer</p>
                    <p>We love that guy</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <div class="card-wrap">
                        <div class="card-header two">
                            <i class="fab fa-css3-alt"></i>
                        </div>
                        <div class="card-content">
                            <h1 class="card-title">Title</h1>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <button class="card-btn two">css3</button>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back two">
                    <h1>Question :</h1>
                    <p>Architect & Engineer</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: 'Hello Vue!'
        }
    },
    methods: {
        reverseMessage() {
            this.message = this.message.split('').reverse().join('');
        }
    }
}
</script>

<style>
/* Styles locaux pour ExampleComponent */
</style>
