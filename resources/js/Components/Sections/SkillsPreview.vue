<template>
  <section class="py-12 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
          Technical Skills
        </h2>
        <p class="text-lg text-gray-600 dark:text-gray-400">
          Technologies and tools I work with
        </p>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div
          v-for="(categorySkills, category) in skills"
          :key="category"
          class="text-center"
        >
          <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-4">
            {{ category }}
          </h3>
          <div class="space-y-2">
            <div
              v-for="skill in categorySkills.slice(0, 3)"
              :key="skill.id"
              class="text-sm text-gray-600 dark:text-gray-400"
            >
              {{ skill.name }}
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-8">
        <Link
          href="/skills"
          class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200"
        >
          View All Skills
        </Link>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  skills: Object
})
</script>