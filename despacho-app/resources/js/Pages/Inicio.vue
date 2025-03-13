<template>
    <div class="p-6">
        <h1 class="text-2xl font-bold">{{ title }}</h1>
        <p class="mt-4">{{ message }}</p>
        <button
            class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
            @click="incrementCounter"
        >
            Contador: {{ counter }}
        </button>
    </div>
</template>

<script>
export default {
    // Las props son los datos que recibimos desde Laravel
    props: {
        title: String,
        message: String,
    },
    data() {
        return {
            counter: 0,
        };
    },
    methods: {
        incrementCounter() {
            this.counter++;
        },
    },
};
</script>
