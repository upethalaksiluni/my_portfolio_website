<template>
  <AppLayout>
    <Head :title="meta.title" />
    
    <!-- Header Section -->
    <section class="pt-24 pb-12 bg-white dark:bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
            My Skills
          </h1>
          <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            Here are the technologies and tools I work with. I'm constantly learning 
            and expanding my skill set to stay current with industry trends.
          </p>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section class="py-12 bg-gray-50 dark:bg-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-12">
          <div
            v-for="(categorySkills, category) in skills"
            :key="category"
            class="animate-slide-up"
          >
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 text-center">
              {{ category }}
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
              <SkillCard
                v-for="skill in categorySkills"
                :key="skill.id"
                :skill="skill"
              />
            </div>
          </div>
        </div>

        <!-- Empty state -->
        <div v-if="Object.keys(skills).length === 0" class="text-center py-16">
          <WrenchScrewdriverIcon class="h-24 w-24 text-gray-300 dark:text-gray-600 mx-auto mb-4" />
          <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
            No skills found
          </h3>
          <p class="text-gray-600 dark:text-gray-400">
            Skills will be displayed here once they are added.
          </p>
        </div>
      </div>
    </section>

    <!-- Certifications Section -->
    <section class="py-12 bg-white dark:bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
            Certifications
          </h2>
          <p class="text-lg text-gray-600 dark:text-gray-400">
            Professional certifications and completed courses
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div
            v-for="cert in certifications"
            :key="cert.name"
            class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 border border-gray-200 dark:border-gray-700 hover:shadow-lg transition-shadow duration-200"
          >
            <div class="flex items-center mb-4">
              <AcademicCapIcon class="h-8 w-8 text-blue-600 dark:text-blue-400 mr-3" />
              <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                {{ cert.name }}
              </h3>
            </div>
            <p class="text-gray-600 dark:text-gray-400 text-sm">
              {{ cert.description }}
            </p>
            <div class="mt-3">
              <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                {{ cert.level }}
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Components/Layout/AppLayout.vue'
import SkillCard from '@/Components/UI/SkillCard.vue'
import { WrenchScrewdriverIcon, AcademicCapIcon } from '@heroicons/vue/24/outline'

defineProps({
  skills: Object,
  meta: Object
})

const certifications = [
  {
    name: 'Oracle Module Beginners',
    description: 'Database fundamentals and SQL programming with Oracle',
    level: 'Beginner'
  },
  {
    name: 'Creating a Good SQL Database',
    description: 'Database design principles and optimization techniques',
    level: 'Level 3'
  },
  {
    name: 'Node.js for Beginners',
    description: 'Front-end development with Node.js runtime environment',
    level: 'Beginner'
  }
]
</script>
