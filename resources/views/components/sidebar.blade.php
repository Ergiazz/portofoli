<div id="sidebar" class=" h-100 d-none position-fixed left-0  w-50 justi d-flex gap-4 align-items-center flex-column bg-white" style="z-index: 100; padding-top: 120px; top: 35px; pointer-events: painted">
    <x-navlink href="/" class="{{ request()->is('/') ? 'bg-info text-light' : '' }}">Home</x-navlink>
    <x-navlink href="about" class="{{ request()->is('about') ? 'bg-info text-light' : '' }}">About</x-navlink>
    <x-navlink href="projec" class="{{ request()->is('projec') ? 'bg-info text-light' : '' }}">Project</x-navlink>
    <x-navlink href="contact" class="{{ request()->is('contact') ? 'bg-info text-light' : '' }}">Contact</x-navlink>
</div>