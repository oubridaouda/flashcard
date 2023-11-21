<template>
    <div class="d-flex justify-content-center align-items-center flex-column">

        <div class="container">
            <input type="checkbox" id="flip">
            <div class="cover">
                <div class="front">
                    <img src="../../../public/assets/images/frontImg.jpg" alt="">
                    <div class="text">
                        <span class="text-1">Every new friend is a <br> new adventure</span>
                        <span class="text-2">Let's get connected</span>
                    </div>
                </div>
                <div class="back">
                    <img class="backImg" src="../../../public/assets/images/frontImg.jpg" alt="">
                    <div class="text">
                        <span class="text-1">Complete miles of journey <br> with one step</span>
                        <span class="text-2">Let's get started</span>
                    </div>
                </div>
            </div>
            <div class="forms">
                <div class="form-content">
                    <div class="login-form">
                        <div class="title">Login</div>
                        <form @submit.prevent="login" action="#">
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" placeholder="Enter your email" id="email" v-model="email" required>
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" placeholder="Enter your password" id="password" v-model="password" required>
                                </div>
                                <div class="text"><a href="#">Forgot password?</a></div>
                                <div class="button input-box">
                                    <input type="submit" value="Sumbit">
                                </div>
                                <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
                            </div>
                        </form>
                    </div>
                    <div class="signup-form">
                        <div class="title">Signup</div>
                        <form action="#">
                            <div class="input-boxes">
                                <div class="input-box">
                                    <i class="fas fa-user"></i>
                                    <input type="text" placeholder="Enter your name" required>
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" placeholder="Enter your email" required>
                                </div>
                                <div class="input-box">
                                    <i class="fas fa-lock"></i>
                                    <input type="password" placeholder="Enter your password" required>
                                </div>
                                <div class="button input-box">
                                    <input type="submit" value="Sumbit">
                                </div>
                                <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <p v-if="error">{{ error }}</p>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            password: '',
            error: ''
        }
    },
    methods: {
        async login() {
            try {
                const response = await this.$http.post('/api/login', {
                    email: this.email,
                    password: this.password
                });

                // Gérer la réponse ici, par exemple en stockant le token
                console.log(response);

                // Rediriger l'utilisateur ou faire autre chose
            } catch (e) {
                this.error = 'Failed to login';
            }
        }
    }
}
</script>
