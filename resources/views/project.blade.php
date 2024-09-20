<x-layout>
    <x-navbar></x-navbar>
    <main style="padding-top: 50px">

        <div id="project" class="p-lg-5 p-4 text-center text-sm-start " style=" background-color: #f5f5f5; padding-top: 100px ; ">
            <h3 data-aos="fade-right" data-aos-duration="1000"  class="fw-bold text-info">Project<span class="ctext"> and Experienced:</span>  </h3>
              <p data-aos="fade-right" data-aos-duration="1000"   class="">Lorem ipsum dolor si amet consectetur, adipisicing elit. In sapiente nemo rem praesentium quos ex!</p>
          <br>
            <div data-aos="fade-up" data-aos-duration="1000" class="row ">
              <x-project>
                <x-slot:imgname>coffe</x-slot:imgname>
                <x-slot:judul>coffeShop</x-slot:judul>
            </x-project>
            <x-project>
                <x-slot:imgname>peminjaman</x-slot:imgname>
                <x-slot:judul>Supertech</x-slot:judul>
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
              <div data-aos="fade-up" data-aos-duration="1000" class="row ">
                <x-project>
                  <x-slot:imgname>khodam</x-slot:imgname>
                  <x-slot:judul>cekkhodam</x-slot:judul>
              </x-project>
              <x-project>
                  <x-slot:imgname>todolit</x-slot:imgname>
                  <x-slot:judul>Todolist</x-slot:judul>
              </x-project>
              <x-project>
                  <x-slot:imgname>compaany</x-slot:imgname>
                  <x-slot:judul>Companyprofile</x-slot:judul>
              </x-project>
              <x-project>
                  <x-slot:imgname>yandev</x-slot:imgname>
                  <x-slot:judul>companyprofile</x-slot:judul>
              </x-project>
              </div>
        </div>

    

    <x-footer></x-footer>

    </main>

</x-layout>