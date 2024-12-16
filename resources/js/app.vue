<template>
    <div class="flex h-screen">
        <Sidebar />
        <div class="flex-1 flex flex-col">
            <Header />
            <main class="flex-1 p-6 bg-gray-50">
                <component :is="currentPage" />
            </main>
        </div>
    </div>
</template>

<script>
import Sidebar from "./components/Sidebar.vue";
import Header from "./components/Header.vue";
import HomePage from "./pages/Home.vue";
import AboutPage from "./pages/About.vue";

export default {
    components: {
        Sidebar,
        Header,
        HomePage,
        AboutPage,
    },
    data() {
        return {
            currentPage: "HomePage",
        };
    },
    mounted() {
        const route = window.location.pathname;
        this.currentPage = route === "/about" ? "AboutPage" : "HomePage";
    },
};
</script>
