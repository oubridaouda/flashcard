<template>
    <div>
        <!-- Barre de navigation ou header -->
        <nav>
            <router-link to="/login">Login</router-link>
            <router-link to="/register">Register</router-link>
            <router-link to="/flashcard">Flashcard</router-link>
            <!-- Autres liens ou contenu de navigation -->
        </nav>

        <!-- Contenu principal de l'application -->
        <div>
            <router-view></router-view>
        </div>

        <!-- Footer -->
        <footer>
            <!-- Contenu du footer -->
        </footer>
    </div>
</template>

<script>
export default {
    // Vous pouvez ajouter des données, méthodes, computed properties, etc., ici si nécessaire
};
</script>
