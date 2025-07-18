<template>
    <h2>Adalicious</h2>
    <h3>Bonjour {{ customer }}</h3>
    <div class="flex flex-col gap-4 m-2">
        <MealItem v-for="meal in mealList" :id="meal.id" :name="meal.name" :image="meal.image" :alt="meal.alt" />
    </div>
</template>

<script setup>
import MealItem from "../components/MealItem.vue";

</script>