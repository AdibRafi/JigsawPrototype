<template>
    <div class="font-sans text-gray-900 antialiased">
        <div class="pt-6 bg-gray-100 sm:justify-center sm:pt-6 rounded-xl min-h-screen">
            <div class="flex flex-col items-center pt-6">
                <h1 class=" text-xl"> Create Topic</h1>
                <p> contoh -> {{ name }} | {{ description }}</p>
                <div class="w-7/12 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <form @submit="formSubmit">
                        <div>
                            <InputForm input-id="topic" input-type="text"
                                       label-for="topic" label-name="Topic Name" v-model="name"/>
                        </div>
                        <div class="mt-4">
                            <span class="block font-medium text-gray-700 text-sm">Number of Modules</span>
                            <input type="range" min="0" max="100" value="25" class="mt-2 range range-primary w-80" step="25"/>
                            <div class="w-full flex justify-between text-xs px-2 w-80">
                                <span>2</span>
                                <span>3</span>
                                <span>4</span>
                                <span>5</span>
                                <span>6</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <InputForm input-id="" input-type="text"
                                       label-for="" label-name="Maximum Time for Expert Session" />
                        </div>
                        <div class="mt-4">
                            <InputForm input-id="" input-type="text"
                                       label-for="" label-name="Maximum Time for Jigsaw Session" />
                        </div>

                        <div class="mt-6">
                            <SubmitButton button-name="Proceed" button-method="clickTest"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import InputForm from "../reusable/inputForm.vue";
import { ref } from 'vue';
import SubmitButton from "../reusable/submitButton.vue";

const name = ref('')
const description = ref('')

const clickTest = () => {
   // axios.post
}
</script>
