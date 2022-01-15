<template>
<div class="card">
  <div class="card-header d-block">
    {{ $t("Backend") }}
    <button
      class="btn btn-link btn-sm float-right"
      type="button"
      data-toggle="collapse"
      data-target="#customizer-frontend"
      aria-expanded="false"
      aria-controls="customizer-frontend"
    >
      <i class="fas collapse-icon"></i>
    </button>
  </div>
  <div class="collapse multi-collapse show" id="customizer-frontend">
  <div class="card-body">
    Some placeholder content for the first collapse component of this
    multi-collapse example. This panel is hidden by default but revealed
    when the user activates the relevant trigger.
  </div>
  </div>
</div>
</template>

<script>
export default {
    data(){
      return {
        
      }
    }
}
</script>