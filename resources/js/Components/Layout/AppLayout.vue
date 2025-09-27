<template>
  <div class="min-h-screen bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <!-- Navigation -->
    <Header />
    
    <!-- Main Content -->
    <main class="relative">
      <slot />
    </main>
    
    <!-- Footer -->
    <Footer />
    
    <!-- Dark Mode Toggle -->
    <button
      @click="toggleDarkMode"
      class="fixed bottom-6 right-6 z-50 p-3 bg-white dark:bg-gray-800 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200 dark:border-gray-700"
      aria-label="Toggle dark mode"
    >
      <SunIcon v-if="isDark" class="h-6 w-6 text-yellow-500" />
      <MoonIcon v-else class="h-6 w-6 text-gray-600" />
    </button>
  </div>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue'
import { Head } from '@inertiajs/vue3'
import Header from './Header.vue'
import Footer from './Footer.vue'
import { SunIcon, MoonIcon } from '@heroicons/vue/24/outline'

const props = defineProps({
  title: String,
  meta: Object
})

const isDark = ref(false)

const toggleDarkMode = () => {
  isDark.value = !isDark.value
  localStorage.setItem('darkMode', isDark.value)
  updateDarkMode()
}

const updateDarkMode = () => {
  if (isDark.value) {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }
}

onMounted(() => {
  // Check for saved theme preference or default to light mode
  const savedTheme = localStorage.getItem('darkMode')
  isDark.value = savedTheme === 'true'
  updateDarkMode()
})

watch(isDark, updateDarkMode)
</script>