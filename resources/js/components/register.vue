<template>
    <div>
        <h1>Register</h1>
        <form @submit.prevent="register">
            <input v-model="email" type="email" placeholder="Email" required>
            <input v-model="password" type="password" placeholder="Password" required>
            <input v-model="password_confirmation" type="password" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <div v-if="error">{{ error }}</div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: '',
            password: '',
            password_confirmation: '',
            error: null
        };
    },
    methods: {
        async register() {
            try {
                const response = await axios.post('/api/register', {
                    email: this.email,
                    password: this.password,
                    password_confirmation: this.password_confirmation
                });
                // Gérer la réponse - par exemple rediriger ou afficher un message de succès
            } catch (err) {
                this.error = 'Failed to register';
            }
        }
    }
};
</script>
