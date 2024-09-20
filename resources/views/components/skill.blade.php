<figure data-aos="fade-up" data-aos-duration="1000" class="text-center mx-5">
    <div class="border p-3 rounded-circle">
      <img src= "{{ $src ?? "" }}" alt="" />
    </div>
    <strong class="d-block">{{ $slot }}</strong>
    <figcaption>{{ $keterangan ?? "" }}</figcaption>
  </figure>