<template>
    <h2 class="flex text-4xl justify-center">Adalicious</h2>
    <h3 class="flex text-xl justify-center">Bonjour {{ customer }} Lolo le Zozo</h3>
    <div class="flex flex-col gap-4 m-2">
        <MealItem v-for="meal in menu" :id="meal.id" :name="meal.name" :description="meal.description" :image="meal.image" :alt="meal.alt"/>
    </div>
</template>

<script setup>
import MealItem from "../components/MealItem.vue";
import { ref, onMounted } from 'vue';

const menu = ref([]);

function loadMenu() {
    fetch("http://localhost:8000/api/menu", {
      method: 'GET',
    })
      .then(response => response.json())
      .then(data => {
        menu.value = data;
      })
      .catch(error => {
        console.log(error);
      });
}

onMounted(() => {
  loadMenu();
})
</script>