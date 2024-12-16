<template>
    <header
        class="bg-gray-900 text-white p-4 flex justify-between items-center"
    >
        <h1 class="text-lg font-bold">My App</h1>
        <nav>
            <a href="/" class="px-4 py-2 text-sm hover:bg-gray-700 rounded">
                Home
            </a>
            <a
                href="/about"
                class="px-4 py-2 text-sm hover:bg-gray-700 rounded"
            >
                About
            </a>
        </nav>
    </header>
</template>

<script>
export default {
    name: "Header",
};
</script>
