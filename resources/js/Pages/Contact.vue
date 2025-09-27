<template>
  <AppLayout>
    <Head :title="meta.title" />
    
    <!-- Header Section -->
    <section class="pt-24 pb-12 bg-white dark:bg-gray-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
            Get In Touch
          </h1>
          <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
            I'm always interested in new opportunities and collaborations. 
            Let's discuss how we can work together!
          </p>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="py-12 bg-gray-50 dark:bg-gray-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
          <!-- Contact Information -->
          <div class="animate-slide-up">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
              Let's Connect
            </h2>
            
            <div class="space-y-6">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <EnvelopeIcon class="h-6 w-6 text-blue-600 dark:text-blue-400" />
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-medium text-gray-900 dark:text-white">Email</h3>
                  <a
                    href="mailto:upethalaksiluni@gmail.com"
                    class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200"
                  >
                    upethalaksiluni@gmail.com
                  </a>
                </div>
              </div>

              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <PhoneIcon class="h-6 w-6 text-blue-600 dark:text-blue-400" />
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-medium text-gray-900 dark:text-white">Phone</h3>
                  <a
                    href="tel:+94707458315"
                    class="text-gray-600 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition-colors duration-200"
                  >
                    +94 707 458 315
                  </a>
                </div>
              </div>

              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <MapPinIcon class="h-6 w-6 text-blue-600 dark:text-blue-400" />
                </div>
                <div class="ml-4">
                  <h3 class="text-lg font-medium text-gray-900 dark:text-white">Location</h3>
                  <p class="text-gray-600 dark:text-gray-400">Colombo, Sri Lanka</p>
                </div>
              </div>
            </div>

            <!-- Social Links -->
            <div class="mt-8">
              <h3 class="text-lg font-medium text-gray-900 dark:text-white mb-4">
                Follow Me
              </h3>
              <div class="flex space-x-4">
                <a
                  v-for="social in socialLinks"
                  :key="social.name"
                  :href="social.href"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="p-3 bg-white dark:bg-gray-900 rounded-lg shadow-md hover:shadow-lg transform hover:scale-105 transition-all duration-200 border border-gray-200 dark:border-gray-700"
                  :aria-label="social.name"
                >
                  <component :is="social.icon" class="h-6 w-6 text-gray-600 dark:text-gray-400" />
                </a>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="animate-slide-up" style="animation-delay: 0.3s;">
            <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg p-8 border border-gray-200 dark:border-gray-700">
              <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                Send Me a Message
              </h2>

              <form @submit.prevent="submitForm" class="space-y-6">
                <div>
                  <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Name *
                  </label>
                  <input
                    id="name"
                    v-model="form.name"
                    type="text"
                    required
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 transition-colors duration-200"
                    placeholder="Your full name"
                  />
                  <p v-if="errors.name" class="mt-1 text-sm text-red-600 dark:text-red-400">
                    {{ errors.name }}
                  </p>
                </div>

                <div>
                  <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Email *
                  </label>
                  <input
                    id="email"
                    v-model="form.email"
                    type="email"
                    required
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 transition-colors duration-200"
                    placeholder="your.email@example.com"
                  />
                  <p v-if="errors.email" class="mt-1 text-sm text-red-600 dark:text-red-400">
                    {{ errors.email }}
                  </p>
                </div>

                <div>
                  <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Subject
                  </label>
                  <input
                    id="subject"
                    v-model="form.subject"
                    type="text"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 transition-colors duration-200"
                    placeholder="What's this about?"
                  />
                </div>

                <div>
                  <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Message *
                  </label>
                  <textarea
                    id="message"
                    v-model="form.message"
                    rows="5"
                    required
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white dark:bg-gray-800 text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400 transition-colors duration-200 resize-vertical"
                    placeholder="Tell me about your project or inquiry..."
                  ></textarea>
                  <p v-if="errors.message" class="mt-1 text-sm text-red-600 dark:text-red-400">
                    {{ errors.message }}
                  </p>
                </div>

                <button
                  type="submit"
                  :disabled="isSubmitting"
                  class="w-full flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 disabled:opacity-50 disabled:cursor-not-allowed transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl"
                >
                  <PaperAirplaneIcon v-if="!isSubmitting" class="h-5 w-5 mr-2" />
                  <div v-else class="animate-spin rounded-full h-5 w-5 border-b-2 border-white mr-2"></div>
                  {{ isSubmitting ? 'Sending...' : 'Send Message' }}
                </button>
              </form>

              <!-- Success/Error Messages -->
              <div v-if="successMessage" class="mt-4 p-4 bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-md">
                <div class="flex">
                  <CheckCircleIcon class="h-5 w-5 text-green-400 mr-2" />
                  <p class="text-sm text-green-700 dark:text-green-400">{{ successMessage }}</p>
                </div>
              </div>

              <div v-if="errorMessage" class="mt-4 p-4 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-md">
                <div class="flex">
                  <ExclamationTriangleIcon class="h-5 w-5 text-red-400 mr-2" />
                  <p class="text-sm text-red-700 dark:text-red-400">{{ errorMessage }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref, reactive } from 'vue'
import { Head } from '@inertiajs/vue3'
import AppLayout from '@/Components/Layout/AppLayout.vue'
import {
  EnvelopeIcon,
  PhoneIcon,
  MapPinIcon,
  PaperAirplaneIcon,
  CheckCircleIcon,
  ExclamationTriangleIcon
} from '@heroicons/vue/24/outline'
import axios from 'axios'

defineProps({
  meta: Object
})

const form = reactive({
  name: '',
  email: '',
  subject: '',
  message: ''
})

const errors = ref({})
const isSubmitting = ref(false)
const successMessage = ref('')
const errorMessage = ref('')

const socialLinks = [
  {
    name: 'GitHub',
    href: 'https://github.com/upethalaksiluni',
    icon: 'GitHubIcon'
  },
  {
    name: 'LinkedIn',
    href: 'https://www.linkedin.com/in/upetha-laksiluni-9238a0278/',
    icon: 'LinkedInIcon'
  }
]

const submitForm = async () => {
  // Reset messages
  errors.value = {}
  successMessage.value = ''
  errorMessage.value = ''
  isSubmitting.value = true

  try {
    const response = await axios.post('/contact', form)
    
    if (response.data.success) {
      successMessage.value = response.data.message
      // Reset form
      form.name = ''
      form.email = ''
      form.subject = ''
      form.message = ''
    }
  } catch (error) {
    if (error.response?.data?.errors) {
      errors.value = error.response.data.errors
    } else {
      errorMessage.value = error.response?.data?.message || 'An error occurred. Please try again.'
    }
  } finally {
    isSubmitting.value = false
  }
}
</script>