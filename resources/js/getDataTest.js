import { ref } from 'vue';

const getDataTest = () => {
   const datas = ref([]);
   const error = ref(null)


   const load = async () => {
      try {
         let data = await fetch('http://localhost:3000/products')
         if (!data.ok) {
            throw Error('no data available')
         }
         datas.value = await data.json();
      } catch (err) {
         error.value = err.message
         console.log(error.value)
      }
   }
   return { datas, error, load }
}

export default getDataTest