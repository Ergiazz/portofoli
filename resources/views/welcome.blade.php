<x-layout style="transform: translateX(200px)">
    <x-navbar></x-navbar>

    <x-herosection></x-herosection>
    <main class=" px-sm-5" style="; background-color: #f7f7f7;">

        <div  id="abput" class=" " style=" background-color: #f7f7f7; padding-top: 100px ; ">

        <div data-aos="fade-up" data-aos-duration="1500" class="d-sm-flex justify-content-between px-lg-5 px-4">
            <div class="text-center text-sm-start">
                <h3 class="fw-bold text-info">About<span class="ctext"> Me:</span>  </h3>
                <p class="">Lorem ipsum dolor si amet consectetur, adipisicing elit. In sapiente nemo rem praesentium quos ex!</p>
            </div>
            <a href="/about">
                <input type="button" class="p-2 px-4 text-light w-100 rounded bg-info border-0"  value="View all">
            </a>
        </div>

        <x-about></x-about>
        
    </div>

        <div data-aos="fade-up" data-aos-duration="1000" id="project" class="px-lg-5 px-4  " style=" background-color: #f7f7f7; padding-top: 50px ; ">
            <div class="d-sm-flex justify-content-between ">
                <div class="text-center text-sm-start">
                    <h3 class="fw-bold text-info">Project<span class="ctext"> Me:</span>  </h3>
                    <p class="">Lorem ipsum dolor si amet consectetur, adipisicing elit. In sapiente nemo rem praesentium quos ex!</p>
                </div>
                <a href="/projec">
                    <input type="button" class="p-2 px-4 text-light w-100 rounded bg-info border-0"  value="View all">
                </a>
            </div>

          <br>
            <div class="row m-0">
                <x-project>
                    <x-slot:imgname>coffe</x-slot:imgname>
                    <x-slot:judul>coffeShop</x-slot:judul>
                </x-project>
                <x-project>
                    <x-slot:imgname>peminjaman</x-slot:imgname>
                    <x-slot:judul>Supetech</x-slot:judul>
                </x-project>
                <x-project>
                    <x-slot:imgname>portofolio</x-slot:imgname>
                    <x-slot:judul>Portofolio</x-slot:judul>
                </x-project>
                <x-project>
                    <x-slot:imgname>space</x-slot:imgname>
                    <x-slot:judul>roketgame</x-slot:judul>
                </x-project>

              </div>
          <br>
        </div>





    </main>
    <x-footer></x-footer>


</x-layout>