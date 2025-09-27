<template>
  <span>{{ displayText }}<span class="animate-pulse">|</span></span>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const props = defineProps({
  strings: {
    type: Array,
    required: true
  },
  typeSpeed: {
    type: Number,
    default: 100
  },
  backSpeed: {
    type: Number,
    default: 50
  },
  startDelay: {
    type: Number,
    default: 500
  },
  backDelay: {
    type: Number,
    default: 2000
  }
})

const displayText = ref('')
const currentStringIndex = ref(0)
const currentCharIndex = ref(0)
const isDeleting = ref(false)
let timeoutId = null

const type = () => {
  const currentString = props.strings[currentStringIndex.value]
  
  if (isDeleting.value) {
    displayText.value = currentString.substring(0, currentCharIndex.value - 1)
    currentCharIndex.value--
  } else {
    displayText.value = currentString.substring(0, currentCharIndex.value + 1)
    currentCharIndex.value++
  }

  let delay = isDeleting.value ? props.backSpeed : props.typeSpeed
  
  if (!isDeleting.value && currentCharIndex.value === currentString.length) {
    delay = props.backDelay
    isDeleting.value = true
  } else if (isDeleting.value && currentCharIndex.value === 0) {
    isDeleting.value = false
    currentStringIndex.value = (currentStringIndex.value + 1) % props.strings.length
    delay = props.typeSpeed
  }

  timeoutId = setTimeout(type, delay)
}

onMounted(() => {
  setTimeout(type, props.startDelay)
})

onUnmounted(() => {
  if (timeoutId) {
    clearTimeout(timeoutId)
  }
})
</script>