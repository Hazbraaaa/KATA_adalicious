<template>
    <h2>Adalicious</h2>
    <h3>Vue cuisine</h3>
    <div class="flex flex-col gap-4 m-2">
        <OrderItem v-for="order in orderList" :id="order.id" :name="order.name" :image="order.image" :alt="order.alt" />
    </div>
</template>

<script setup>
import OrderItem from "../components/OrderItem.vue";


</script>