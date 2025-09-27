<template>
  <footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 transition-colors duration-300">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Brand -->
        <div class="col-span-1 md:col-span-2">
          <div class="flex items-center">
            <span class="text-2xl font-bold text-gray-900 dark:text-white">Upetha.dev</span>
          </div>
          <p class="mt-4 text-gray-600 dark:text-gray-400 max-w-md">
            Building efficient solutions for real-world problems with web, mobile, and game technologies.
          </p>
        </div>

        <!-- Quick Links -->
        <div>
          <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider">
            Quick Links
          </h3>
          <ul class="mt-4 space-y-4">
            <li v-for="link in quickLinks" :key="link.name">
              <Link
                :href="link.href"
                class="text-base text-gray-600 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-200"
              >
                {{ link.name }}
              </Link>
            </li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div>
          <h3 class="text-sm font-semibold text-gray-900 dark:text-white uppercase tracking-wider">
            Contact
          </h3>
          <ul class="mt-4 space-y-4">
            <li class="flex items-center text-base text-gray-600 dark:text-gray-400">
              <EnvelopeIcon class="h-5 w-5 mr-2" />
              <a href="mailto:upethalaksiluni@gmail.com" class="hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-200">
                upethalaksiluni@gmail.com
              </a>
            </li>
            <li class="flex items-center text-base text-gray-600 dark:text-gray-400">
              <PhoneIcon class="h-5 w-5 mr-2" />
              <a href="tel:+94707458315" class="hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-200">
                +94 707 458 315
              </a>
            </li>
            <li class="flex items-center text-base text-gray-600 dark:text-gray-400">
              <MapPinIcon class="h-5 w-5 mr-2" />
              <span>Colombo, Sri Lanka</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="mt-12 border-t border-gray-200 dark:border-gray-700 pt-8">
        <div class="flex flex-col md:flex-row justify-between items-center">
          <p class="text-base text-gray-600 dark:text-gray-400">
            &copy; {{ currentYear }} H.T. Upetha Laksiluni. All rights reserved.
          </p>
          <div class="mt-4 md:mt-0">
            <p class="text-sm text-gray-500 dark:text-gray-500">
              Built with ❤️ using Laravel & Vue.js
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { computed } from 'vue'
import { Link } from '@inertiajs/vue3'
import { 
  EnvelopeIcon, 
  PhoneIcon, 
  MapPinIcon 
} from '@heroicons/vue/24/outline'

const currentYear = computed(() => new Date().getFullYear())

const quickLinks = [
  { name: 'Home', href: '/' },
  { name: 'About', href: '/about' },
  { name: 'Projects', href: '/projects' },
  { name: 'Skills', href: '/skills' },
  { name: 'Contact', href: '/contact' }
]
</script>
