<template>
  <form class="flex flex-col justify-center items-center border rounded-2xl p-2 bg-gray-100">
    <h3>{{ props.image }} {{ props.name }}</h3>
    <p>{{ props.description }}</p>
    <button type="submit" class="border p-2 m-2 bg-cyan-300 rounded-lg">Commander</button>
  </form>
</template>

<script setup>
const props = defineProps({
  id: [String, Number],
  name: String,
  description: String,
  image: String,
  alt: String,
});
</script>