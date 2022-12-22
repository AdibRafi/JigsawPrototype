<template>
    <div class="font-sans text-gray-900 antialiased">
        <div class="pt-6 bg-gray-100 sm:justify-center sm:pt-6 rounded-xl min-h-screen">
            <div class="flex flex-col items-center pt-6">
                <h1 class=" text-xl"> Create Topic</h1>
                <p> contoh -> {{ name }} | {{ description }}</p>
                <div class="w-11/12 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <form @submit="formSubmit">
                        <div>
                            <InputForm input-id="topic" input-type="text"
                                       label-for="topic" label-name="Topic" v-model="name"/>
                        </div>
                        <div class="mt-4">
                            <InputForm input-id="module" input-type="text"
                                       label-for="module" label-name="Module" v-model="description"/>
                        </div>
                        <div class="mt-4">
                            <InputForm input-id="" input-type="text"
                                       label-for="" label-name="Expert Session" />
                        </div>
                        <div class="mt-4">
                            <InputForm input-id="" input-type="text"
                                       label-for="" label-name="Jigsaw Session" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <SubmitButton button-name="Create Group" button-method="clickTest"/>
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
