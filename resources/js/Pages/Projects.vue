<template>
  <AppLayout>
    <Head :title="meta.title" />
    
    <!-- Header Section -->
    <section class="pt-24 pb-12 bg-white dark:bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
            My Projects
          </h1>
          <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            Here's a showcase of some of my recent work. Each project represents a unique challenge 
            and demonstrates different aspects of my technical skills.
          </p>
        </div>
      </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-12 bg-gray-50 dark:bg-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <ProjectCard
            v-for="project in projects"
            :key="project.id"
            :project="project"
            class="animate-slide-up"
          />
        </div>

        <!-- Empty state -->
        <div v-if="projects.length === 0" class="text-center py-16">
          <FolderIcon class="h-24 w-24 text-gray-300 dark:text-gray-600 mx-auto mb-4" />
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
            No projects found
          </h3>
          <p class="text-gray-600 dark:text-gray-400">
            Projects will be displayed here once they are added.
          </p>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Components/Layout/AppLayout.vue'
import ProjectCard from '@/Components/UI/ProjectCard.vue'
import { FolderIcon } from '@heroicons/vue/24/outline'

defineProps({
  projects: Array,
  meta: Object
})
</script>
