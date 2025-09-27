<template>
  <header class="fixed w-full top-0 z-40 bg-white/90 dark:bg-gray-900/90 backdrop-blur-md border-b border-gray-200 dark:border-gray-700 transition-all duration-300">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <Link href="/" class="text-xl font-bold text-gray-900 dark:text-white">
            Upetha.dev
          </Link>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-8">
            <Link
              v-for="item in navigation"
              :key="item.name"
              :href="item.href"
              :class="[
                isCurrentRoute(item.href)
                  ? 'text-primary-600 border-b-2 border-primary-600'
                  : 'text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400',
                'px-3 py-2 text-sm font-medium transition-colors duration-200'
              ]"
            >
              {{ item.name }}
            </Link>
          </div>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden">
          <button
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white p-2"
            aria-label="Toggle menu"
          >
            <Bars3Icon v-if="!mobileMenuOpen" class="h-6 w-6" />
            <XMarkIcon v-else class="h-6 w-6" />
          </button>
        </div>
      </div>

      <!-- Mobile Navigation -->
      <div v-show="mobileMenuOpen" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700">
          <Link
            v-for="item in navigation"
            :key="item.name"
            :href="item.href"
            @click="mobileMenuOpen = false"
            :class="[
              isCurrentRoute(item.href)
                ? 'text-primary-600 bg-primary-50 dark:bg-primary-900/20'
                : 'text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 hover:bg-gray-50 dark:hover:bg-gray-800',
              'block px-3 py-2 text-base font-medium rounded-md transition-colors duration-200'
            ]"
          >
            {{ item.name }}
          </Link>
        </div>
      </div>
    </nav>
  </header>
</template>

<script setup>
import { ref } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'
import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline'

const page = usePage()
const mobileMenuOpen = ref(false)

const navigation = [
  { name: 'Home', href: '/' },
  { name: 'About', href: '/about' },
  { name: 'Skills', href: '/skills' },
  { name: 'Projects', href: '/projects' },
  { name: 'Contact', href: '/contact' },
]

const isCurrentRoute = (href) => {
  return page.url === href || (href !== '/' && page.url.startsWith(href))
}
</script>
