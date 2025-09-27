<template>
  <AppLayout>
    <Head :title="meta.title" />
    
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-800 dark:to-blue-900 overflow-hidden">
      <!-- Background Elements -->
      <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 left-20 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-float" style="animation-delay: 4s;"></div>
      </div>

      <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- Content -->
          <div class="text-center lg:text-left">
            <div class="animate-slide-up">
              <h1 class="text-4xl md:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                Hi, I'm
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                  Upetha Laksiluni
                </span>
              </h1>
              
              <div class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 mb-8">
                <TypeWriter :strings="titles" />
              </div>
              
              <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 max-w-2xl">
                Building efficient solutions for real-world problems with web, mobile, and game technologies. 
                I'm passionate about creating innovative, impactful software solutions.
              </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start animate-slide-up" style="animation-delay: 0.3s;">
              <Link
                href="/contact"
                class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
              >
                <EnvelopeIcon class="h-5 w-5 mr-2" />
                Get In Touch
              </Link>
              
              <Link
                href="/projects"
                class="inline-flex items-center px-8 py-3 border border-gray-300 dark:border-gray-600 text-base font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
              >
                <EyeIcon class="h-5 w-5 mr-2" />
                View My Work
              </Link>
            </div>
          </div>

          <!-- Profile Image -->
          <div class="flex justify-center lg:justify-end animate-slide-up" style="animation-delay: 0.9s;">
            <div class="relative">
              <div class="w-80 h-80 rounded-full bg-gradient-to-tr from-blue-400 to-purple-500 p-1 shadow-2xl">
                <div class="w-full h-full rounded-full bg-white dark:bg-gray-800 p-2">
                  <img
                    src="/images/profile.jpg"
                    alt="H.T. Upetha Laksiluni"
                    class="w-full h-full rounded-full object-cover"
                  />
                </div>
              </div>
              <!-- Floating icons -->
              <div class="absolute -top-4 -right-4 w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center animate-bounce">
                <CodeBracketIcon class="h-8 w-8 text-blue-600 dark:text-blue-400" />
              </div>
              <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-purple-100 dark:bg-purple-900 rounded-full flex items-center justify-center animate-bounce" style="animation-delay: 1s;">
                <CpuChipIcon class="h-8 w-8 text-purple-600 dark:text-purple-400" />
              </div>
            </div>
          </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
          <ChevronDownIcon class="h-6 w-6 text-gray-400" />
        </div>
      </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">
            Featured Projects
          </h2>
          <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            Here are some of my recent projects that showcase my skills and expertise.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <ProjectCard
            v-for="project in featuredProjects"
            :key="project.id"
            :project="project"
            class="animate-slide-up"
          />
        </div>

        <div class="text-center mt-12">
          <Link
            href="/projects"
            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
          >
            View All Projects
            <ArrowRightIcon class="h-5 w-5 ml-2" />
          </Link>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Components/Layout/AppLayout.vue'
import ProjectCard from '@/Components/UI/ProjectCard.vue'
import TypeWriter from '@/Components/UI/TypeWriter.vue'
import { 
  EnvelopeIcon, 
  EyeIcon, 
  CodeBracketIcon, 
  CpuChipIcon, 
  ChevronDownIcon,
  ArrowRightIcon
} from '@heroicons/vue/24/outline'

defineProps({
  featuredProjects: Array,
  featuredSkills: Object,
  meta: Object
})

const titles = [
  'Software Engineer',
  'Full Stack Developer',
  'Mobile App Developer', 
  'Problem Solver'
]
</script>
