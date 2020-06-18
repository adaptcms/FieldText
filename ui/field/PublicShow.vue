<template>
  <div>
    {{ value }}
  </div>
</template>

<script>
export default {
  props: [
    'value',
    'field',
    'model',
    'module',
    'action'
  ]
}
</script>
