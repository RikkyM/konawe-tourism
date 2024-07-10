<script>
    const modalAdd = document.querySelector('#modalAdd')
    const modal = document.querySelector('#modal');
    const add = document.querySelector('#add');
    const cancelButton = document.querySelector('#cancel');

    function closeModal() {
        add.classList.add('opacity-0', 'delay-0');
        add.classList.remove('delay-[.3s]')
        modal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
        modal.classList.remove('pointer-events-auto');
    }

    function resetModal() {
        if (marker) {
            map.removeLayer(marker);
            marker = null;
            document.getElementById('latitude').value = -4.19191;
            document.getElementById('longitude').value = 122.44854;
        }
        @this.nama_wisata = '';
        @this.harga = '';
        @this.deskripsi = '';
        @this.gambar = '';
        @this.latitude = '';
        @this.longitude = '';
        @this.whatsapp = '';
        @this.gambar = '';
        imageInput.value = '';
        preview.src = '';
        preview.classList.add('hidden');
        text.classList.remove('hidden')
        resetBtn.classList.add('hidden')
    }


    modalAdd.addEventListener('click', () => {
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-auto');
        modal.classList.toggle('pointer-events-none');

        add.classList.toggle('opacity-0');
        add.classList.add('delay-[.3s]')
        add.classList.remove('delay-0')

        modal.classList.remove('delay-[.4s]')

        modal.addEventListener('click', e => {
            if (e.target == modal) {
                closeModal();
                resetModal();


            }
        })

        cancelButton.addEventListener('click', () => {
            resetModal();
            closeModal();
        })
    });

    // Map
    var map = L.map('map', {
        attributionControl: false,
        center: [-4.19191, 122.44854],
        zoom: 12
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    var marker;

    map.on('click', function(e) {
        var latitude = e.latlng.lat;
        var longitude = e.latlng.lng;

        @this.latitude = latitude
        @this.longitude = longitude

        if (marker) {
            marker.setLatLng(e.latlng);
        } else {
            marker = L.marker(e.latlng).addTo(map);
        }
    });

    // preview image
    const imageInput = document.getElementById('image');
    const preview = document.getElementById('preview');
    const resetBtn = document.getElementById('reset-btn');
    const text = document.querySelector('#text');

    imageInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
            text.classList.add('hidden')
            resetBtn.classList.remove('hidden')
        } else {
            preview.src = '';
            preview.classList.add('hidden');
            text.classList.remove('hidden')
        }
    });

    resetBtn.addEventListener('click', () => {
        imageInput.value = '';
        preview.src = '';
        preview.classList.add('hidden');
        text.classList.remove('hidden')
        resetBtn.classList.add('hidden')
    });

    // format rupiah
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    document.querySelector('#harga').addEventListener('input', () => {
        harga.value = formatRupiah(harga.value, 'Rp. ');
    })

    function NumberOnly(element) {
        element.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        })
    }

    const whatsapp = document.querySelector("#whatsapp");

    NumberOnly(whatsapp);

    Livewire.on('show-notif', () => {
        resetModal();
        closeModal()
        imageInput.value = '';
        preview.src = '';
        preview.classList.add('hidden');
        text.classList.remove('hidden')
        resetBtn.classList.add('hidden')
    })
</script>
