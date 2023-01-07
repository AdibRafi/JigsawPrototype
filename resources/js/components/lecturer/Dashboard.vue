<template>
    <div class="font-sans text-gray-900 antialiased">
        <div class="pt-6 bg-gray-100 justify-center rounded-xl min-h-screen">
            <div class="flex flex-wrap items-center p-6">
                <div v-for="data in datas" key="data">
                <div class="card w-96 bg-green-700 text-primary-content m-4">
                    <div class="card-body">
                                <h2 class="card-title">{{ data.name }}</h2>
                                <p>{{ data.code }}</p>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script setup>
const datas = [
    {
        name: 'Class1',
        code: 'TGD1202'
    },
    {
        name: 'Class2',
        code: 'TCP1302'
    },
    {
        name: 'Class3',
        code: 'TMU2231'
    },
    {
        name: 'Class4',
        code: 'TSP3301'
    }

]
</script>

<style>

</style>
