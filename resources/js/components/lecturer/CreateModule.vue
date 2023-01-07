<template>
    <div class="font-sans text-gray-900 antialiased">
        <div class="pt-6 bg-gray-100 justify-center rounded-xl min-h-screen">
            <div class="flex flex-col items-center pt-6">
                <!--                <h1 class="text-xl font-bold">MODULE</h1>-->
                <ul class="steps w-96">
                    <li class="step step-primary">Topic</li>
                    <li class="step step-primary">Modules</li>
                    <li class="step step">Options</li>
                    <li class="step step">Verify</li>
                </ul>
                <div v-for="items in 4" class="m-4">
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <div class="card-body">
                            <h1 class="font-bold">Module {{ items }}</h1>
                            <InputForm label-name="Module Name"/>
                            <InputForm label-name="KeyPoints"/>
                            <div class="card-actions justify-end mt-5">
                                <input type="file"
                                       class="file-input file-input-bordered file-input-primary w-full max-w-xs">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-96 bg-base-100 shadow-xl m-4">
                    <div class="card-body">
                        <h2 class="card-title">Make sure to check!</h2>
                        <div class="card-actions justify-end">
                            <submit-button button-name="Proceed"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import InputForm from "../reusable/inputForm.vue";
import SubmitButton from "../reusable/submitButton.vue";

</script>

<style scoped>

</style>
