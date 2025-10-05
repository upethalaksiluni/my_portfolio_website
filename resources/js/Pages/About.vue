<template>
  <AppLayout>
    <Head :title="meta.title" />
    
    <!-- Header Section -->
    <section class="pt-24 pb-12 bg-white dark:bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
            About Me
          </h1>
          <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            Learn more about my journey, background, and what drives me as a software engineer.
          </p>
        </div>
      </div>
    </section>

    <!-- About Content -->
    <section class="py-12 bg-gray-50 dark:bg-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- Profile Image -->
          <div class="animate-slide-up">
            <div class="relative">
              <div class="aspect-square rounded-2xl bg-gradient-to-tr from-blue-400 to-purple-500 p-1 shadow-2xl max-w-md mx-auto">
                <div class="w-full h-full rounded-2xl bg-white dark:bg-gray-800 p-2">
                  <img
                    src="/images/profile.jpg"
                    alt="H.T. Upetha Laksiluni"
                    class="w-full h-full rounded-2xl object-cover"
                  />
                </div>
              </div>
            </div>
          </div>

          <!-- About Text -->
          <div class="animate-slide-up" style="animation-delay: 0.3s;">
            <div class="prose prose-lg dark:prose-invert max-w-none">
              <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                Hello, I'm Upetha Laksiluni
              </h2>
              
              <p class="text-gray-600 dark:text-gray-400 mb-6">
                A dedicated software engineer specializing in mobile, web, and game development, 
                with hands-on experience in live projects and a passion for creating innovative, 
                impactful software solutions.
              </p>
              
              <p class="text-gray-600 dark:text-gray-400 mb-6">
                Currently pursuing my BSc in Software Engineering at ICBT Campus (2023–2025) 
                in Colombo, while also completing ongoing certification at C-Clarke Institute. 
                I'm always eager to learn new technologies and take on challenging projects.
              </p>

              <p class="text-gray-600 dark:text-gray-400 mb-8">
                My experience as a Software Engineer Intern at Cyberintel.online has given me 
                valuable insights into working on live projects, backend development, debugging, 
                and system design while collaborating with senior developers.
              </p>

              <!-- Stats -->
              <div class="grid grid-cols-2 gap-6 mb-8">
                <div class="text-center p-4 bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700">
                  <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">10+</div>
                  <div class="text-sm text-gray-600 dark:text-gray-400">Projects Completed</div>
                </div>
                <div class="text-center p-4 bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700">
                  <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">3+</div>
                  <div class="text-sm text-gray-600 dark:text-gray-400">Certifications</div>
                </div>
              </div>

              <!-- Download CV Button -->
              <div class="flex flex-col sm:flex-row gap-4">
                <a
                  href="/downloads/cv.pdf"
                  download
                  class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
                >
                  <DocumentArrowDownIcon class="h-5 w-5 mr-2" />
                  Download CV
                </a>
                
                <Link
                  href="/contact"
                  class="inline-flex items-center justify-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-base font-medium rounded-md text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
                >
                  <EnvelopeIcon class="h-5 w-5 mr-2" />
                  Get In Touch
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Experience & Education -->
    <section class="py-12 bg-white dark:bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
          <!-- Experience -->
          <div class="animate-slide-up">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">
              Work Experience
            </h2>
            
            <div class="relative">
              <div class="absolute left-4 top-0 bottom-0 w-0.5 bg-blue-200 dark:bg-blue-800"></div>
              
              <div class="relative flex items-start mb-8">
                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                  <BriefcaseIcon class="h-4 w-4 text-white" />
                </div>
                <div class="ml-6">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Software Engineer Intern
                  </h3>
                  <p class="text-blue-600 dark:text-blue-400 font-medium">
                    Cyberintel.online
                  </p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm mb-2">
                    Jan 2025 – Present
                  </p>
                  <p class="text-gray-600 dark:text-gray-400">
                    Worked on live projects, backend development, debugging, and system design. 
                    Assisted with database management and collaborated with senior developers.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Education -->
          <div class="animate-slide-up" style="animation-delay: 0.3s;">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-8">
              Education
            </h2>
            
            <div class="relative">
              <div class="absolute left-4 top-0 bottom-0 w-0.5 bg-blue-200 dark:bg-blue-800"></div>
              
              <div class="relative flex items-start mb-8">
                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                  <AcademicCapIcon class="h-4 w-4 text-white" />
                </div>
                <div class="ml-6">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    BSc in Software Engineering
                  </h3>
                  <p class="text-blue-600 dark:text-blue-400 font-medium">
                    ICBT Campus
                  </p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm mb-2">
                    2023 – 2025 • Colombo, Sri Lanka
                  </p>
                  <p class="text-gray-600 dark:text-gray-400">
                    Comprehensive software engineering program covering modern development 
                    practices, algorithms, and system design.
                  </p>
                </div>
              </div>

              <div class="relative flex items-start">
                <div class="flex-shrink-0 w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center">
                  <AcademicCapIcon class="h-4 w-4 text-white" />
                </div>
                <div class="ml-6">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Ongoing Certification
                  </h3>
                  <p class="text-blue-600 dark:text-blue-400 font-medium">
                    C-Clarke Institute
                  </p>
                  <p class="text-gray-500 dark:text-gray-400 text-sm mb-2">
                    2025
                  </p>
                  <p class="text-gray-600 dark:text-gray-400">
                    Specialized certification program focusing on advanced software 
                    development techniques and industry best practices.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Skills Preview -->
    <SkillsPreview :skills="skills" />
  </AppLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3'
import AppLayout from '@/Components/Layout/AppLayout.vue'
import SkillsPreview from '@/Components/Sections/SkillsPreview.vue'
import {
  DocumentArrowDownIcon,
  EnvelopeIcon,
  BriefcaseIcon,
  AcademicCapIcon
} from '@heroicons/vue/24/outline'

defineProps({
  skills: Object,
  meta: Object
})
</script>