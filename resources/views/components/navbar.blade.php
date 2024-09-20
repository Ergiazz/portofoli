<nav class="d-flex px-3 px-lg-5 py-3 justify-content-between align-items-center bg-light position-fixed top-0 w-100 shadow-sm z-3" style="z-index: 1000; cursor: pointer;">
  <div class=" d-flex gap-2">
  <span class="ctext d-sm-none material-symbols-outlined" onclick="muncul()">
    menu
    </span>
  <h4 class="z-index-990 m-0 fw-bold text-info" >MYportofolio</h4>
</div>

  <ul class="d-none d-lg-flex position-absolute translate-middle gap-3 list-none" style="list-style: none; left: 49%; top: 50%; animation: munculatas 2s alternate">
    <x-navlink href="/" class="{{ request()->is('/') ? 'bg-info text-light' : '' }}">Home</x-navlink>
    <x-navlink href="about" class="{{ request()->is('about') ? 'bg-info text-light' : '' }}">About</x-navlink>
    <x-navlink href="projec" class="{{ request()->is('projec') ? 'bg-info text-light' : '' }}">Project</x-navlink>
    <x-navlink href="contact" class="{{ request()->is('contact') ? 'bg-info text-light' : '' }}">Contact</x-navlink>
  </ul>

  <div class="rounded " style="back">
    <span class="material-symbols-outlined ctext">
      settings
      </span>
  </div>


</nav>
