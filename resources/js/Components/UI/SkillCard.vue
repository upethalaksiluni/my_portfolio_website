<template>
  <div class="bg-white dark:bg-gray-900 rounded-lg p-6 shadow-md hover:shadow-lg transition-all duration-200 border border-gray-200 dark:border-gray-700">
    <div class="flex items-center justify-between mb-4">
      <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
        {{ skill.name }}
      </h3>
      <span class="text-sm font-medium text-gray-600 dark:text-gray-400">
        {{ skill.proficiency }}%
      </span>
    </div>
    
    <!-- Skill bar -->
    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 mb-4">
      <div
        class="skill-bar bg-gradient-to-r from-blue-500 to-purple-600 h-2.5 rounded-full"
        :style="{
          width: `${skill.proficiency}%`,
          backgroundColor: skill.color || '#3b82f6'
        }"
      ></div>
    </div>
    
    <!-- Featured badge -->
    <div v-if="skill.featured" class="flex justify-end">
      <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
        <StarIcon class="h-3 w-3 mr-1" />
        Featured
      </span>
    </div>
  </div>
</template>

<script setup>
import { StarIcon } from '@heroicons/vue/24/solid'

defineProps({
  skill: Object
})
</script>