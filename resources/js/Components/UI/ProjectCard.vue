<template>
  <div class="project-card bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden border border-gray-200 dark:border-gray-700">
    <!-- Project Image -->
    <div class="relative h-48 bg-gradient-to-br from-blue-400 to-purple-500">
      <img
        v-if="project.image"
        :src="`/images/${project.image}`"
        :alt="project.title"
        class="w-full h-full object-cover"
      />
      <div v-else class="flex items-center justify-center h-full">
        <CodeBracketIcon class="h-16 w-16 text-white/80" />
      </div>
      
      <!-- Featured badge -->
      <div v-if="project.featured" class="absolute top-3 right-3">
        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-400 text-yellow-800">
          <StarIcon class="h-3 w-3 mr-1" />
          Featured
        </span>
      </div>
    </div>

    <!-- Project Content -->
    <div class="p-6">
      <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
        {{ project.title }}
      </h3>
      
      <p class="text-gray-600 dark:text-gray-400 mb-4 line-clamp-3">
        {{ project.description }}
      </p>

      <!-- Technologies -->
      <div class="flex flex-wrap gap-2 mb-4">
        <span
          v-for="tech in project.technologies"
          :key="tech"
          class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200"
        >
          {{ tech }}
        </span>
      </div>

      <!-- Action Buttons -->
      <div class="flex gap-3">
        <a
          v-if="project.github_url"
          :href="project.github_url"
          target="_blank"
          rel="noopener noreferrer"
          class="inline-flex items-center px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-200"
        >
          <CodeBracketIcon class="h-4 w-4 mr-1" />
          Code
        </a>
        
        <a
          v-if="project.demo_url"
          :href="project.demo_url"
          target="_blank"
          rel="noopener noreferrer"
          class="inline-flex items-center px-3 py-2 border border-transparent rounded-md text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200"
        >
          <EyeIcon class="h-4 w-4 mr-1" />
          Demo
        </a>
      </div>
    </div>
  </div>
</template>

<script setup>
import { CodeBracketIcon, EyeIcon, StarIcon } from '@heroicons/vue/24/outline'

defineProps({
  project: Object
})
</script>

<style scoped>
.line-clamp-3 {
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>
