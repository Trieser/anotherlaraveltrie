<template>
    <aside class="bg-gray-800 text-white w-64 h-screen flex flex-col">
        <div class="p-4 text-xl font-bold text-center border-b border-gray-600">
            My Sidebar
        </div>
        <nav class="flex-1 p-4 space-y-4">
            <a
                href="/"
                class="w-full block text-left px-4 py-2 rounded hover:bg-gray-700 transition"
            >
                Home
            </a>
            <a
                href="/about"
                class="w-full block text-left px-4 py-2 rounded hover:bg-gray-700 transition"
            >
                About
            </a>
        </nav>
        <div class="p-4 text-center text-sm border-t border-gray-600">
            &copy; 2024 My App
        </div>
    </aside>
</template>

<script>
export default {
    name: "Sidebar",
};
</script>
