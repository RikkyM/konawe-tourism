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

    // document.querySelector('#harga').addEventListener('input', () => {
    //     harga.value = formatRupiah(harga.value, 'Rp. ');
    // })

    const hargainput = document.querySelectorAll('#harga');

    hargainput.forEach(harga => {
        harga.addEventListener('input', () => {
            harga.value = formatRupiah(harga.value, 'Rp. ')
        })
    })

    function NumberOnly(element) {
        element.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        })
    }

    const whatsapp = document.querySelector("#whatsapp");

    NumberOnly(whatsapp);

    // kategori dropdown
    const kategoriAdd = document.querySelector('#kategoriAdd')
    const modalKategori = document.querySelector("#modalKategori");
    const addKategoriBtn = document.querySelector('#addKategoriBtn');
    const addKategoriModal = document.querySelector('#addKategoriModal');
    const addKategoriForm = document.querySelector("#addKategoriForm");
    const cancelModalKategori = document.querySelector('#cancelModalKategori');

    const editKategoriBtn = document.querySelectorAll('#editKategoriBtn');
    const editKategoriModal = document.querySelector('#editKategoriModal')
    const editKategoriForm = document.querySelector("#editKategoriForm");
    const cancelModalKategoriEdit = document.querySelector('#cancelModalKategoriEdit');

    function toggleKategori() {
        modalKategori.classList.toggle('opacity-0')

        modalKategori.classList.toggle('pointer-events-auto');
        modalKategori.classList.toggle('pointer-events-none');
    }

    function openModal(tombol, modal, form) {
        tombol.addEventListener('click', () => {
            @this.kategori_wisata = '';
            toggleKategori();
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-auto');
            modal.classList.toggle('pointer-events-none');

            form.classList.toggle('opacity-0');
            form.classList.add('delay-[.3s]');
            form.classList.remove('delay-0');

            modal.classList.remove('delay-[.4s]')

            modal.addEventListener('click', e => {
                if (e.target == modal) {
                    @this.kategori_wisata = '';
                    form.classList.add('opacity-0', 'delay-0');
                    form.classList.remove('delay-[.3s]');
                    modal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
                    modal.classList.remove('pointer-events-auto');
                }
            })
        })
    }

    openModal(addKategoriBtn, addKategoriModal, addKategoriForm)

    cancelModalKategori.addEventListener('click', () => {
        @this.kategori_wisata = '';
        addKategoriForm.classList.add('opacity-0', 'delay-0');
        addKategoriForm.classList.remove('delay-[.3s]');
        addKategoriModal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
        addKategoriModal.classList.remove('pointer-events-auto');
    })

    cancelModalKategoriEdit.addEventListener('click', () => {
        @this.kategori_wisata = '';
        editKategoriForm.classList.add('opacity-0', 'delay-0');
        editKategoriForm.classList.remove('delay-[.3s]');
        editKategoriModal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
        editKategoriModal.classList.remove('pointer-events-auto');
    })

    kategoriAdd.addEventListener('click', () => {
        toggleKategori();
    })

    Livewire.on('kategori', () => {
        addKategoriForm.classList.add('opacity-0', 'delay-0');
        addKategoriForm.classList.remove('delay-[.3s]');
        addKategoriModal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
        addKategoriModal.classList.remove('pointer-events-auto');
    })

    Livewire.on('openWisataModal', () => {
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-auto');
        modal.classList.toggle('pointer-events-none');

        add.classList.toggle('opacity-0');
        add.classList.add('delay-[.3s]')
        add.classList.remove('delay-0')

        modal.classList.remove('delay-[.4s]')
    })

    Livewire.on('kategoriEdit', () => {
        editKategoriForm.classList.add('opacity-0', 'delay-0');
        editKategoriForm.classList.remove('delay-[.3s]');
        editKategoriModal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
        editKategoriModal.classList.remove('pointer-events-auto');
    })

    Livewire.on('openEdit', () => {
        editKategoriModal.classList.toggle('opacity-0')
        editKategoriModal.classList.toggle('pointer-events-auto');
        editKategoriModal.classList.toggle('pointer-events-none');

        editKategoriForm.classList.toggle('opacity-0');
        editKategoriForm.classList.add('delay-[.3s]');
        editKategoriForm.classList.remove('delay-0');

        editKategoriModal.classList.remove('delay-[.4s]')
    })

    const modalEditWisata = document.querySelector('#modalEditWisata');
    const edit = document.querySelector("#edit");
    const cancelEditWisata = document.querySelector('#cancelEditWisata');

    cancelEditWisata.addEventListener('click', () => {
        edit.classList.add('opacity-0', 'delay-0');
        edit.classList.remove('delay-[.3s]');
        modalEditWisata.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
        modalEditWisata.classList.remove('pointer-events-auto');
        @this.nama_wisata = '';
        @this.harga = '';
        @this.deskripsi = '';
        @this.data_kategori = '';
        @this.gambar = '';
        @this.latitude = '';
        @this.longitude = '';
        @this.whatsapp = '';
        @this.kategori_wisata = '';
    })

    let mapEdit, markerEdit;

    const imageInputEdit = document.getElementById('imageEdit');
    const previewEdit = document.getElementById('previewEdit');
    const resetBtnEdit = document.getElementById('reset-btnEdit');
    const textEdit = document.querySelector('#textEdit');

    imageInputEdit.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                previewEdit.src = e.target.result;
                previewEdit.classList.remove('hidden');
            };
            reader.readAsDataURL(file);
            textEdit.classList.add('hidden')
            resetBtnEdit.classList.remove('hidden')
        } else {
            previewEdit.src = '';
            previewEdit.classList.add('hidden');
            textEdit.classList.remove('hidden')
        }
    });

    resetBtnEdit.addEventListener('click', () => {
        imageInputEdit.value = '';
        previewEdit.src = '';
        previewEdit.classList.add('hidden');
        textEdit.classList.remove('hidden')
        resetBtnEdit.classList.add('hidden')
    });

    modalEditWisata.addEventListener('click', e => {
        if (e.target == modalEditWisata) {
            edit.classList.add('opacity-0', 'delay-0');
            edit.classList.remove('delay-[.3s]');
            modalEditWisata.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]');
            modalEditWisata.classList.remove('pointer-events-auto');
            @this.nama_wisata = '';
            @this.data_kategori = '';
            @this.harga = '';
            @this.deskripsi = '';
            @this.gambar = '';
            @this.whatsapp = '';
            if (markerEdit) {
                mapEdit.removeLayer(markerEdit);
                markerEdit = null;
                @this.latitude = '';
                @this.longitude = '';
            }
        }
    });

    Livewire.on('modalEditWisata', (imgUrl) => {
        modalEditWisata.classList.toggle('opacity-0');
        modalEditWisata.classList.toggle('pointer-events-auto');
        modalEditWisata.classList.toggle('pointer-events-none');

        edit.classList.toggle('opacity-0');
        edit.classList.add('delay-[.3s]');
        edit.classList.remove('delay-0');

        modalEditWisata.classList.remove('delay-[.4s]');

        previewEdit.src = imgUrl
        previewEdit.classList.remove('hidden');
        textEdit.classList.add('hidden');

        imageInputEdit.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    previewEdit.src = e.target.result;
                    previewEdit.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
                textEdit.classList.add('hidden')
                resetBtnEdit.classList.remove('hidden')
            } else {
                previewEdit.src = '';
                previewEdit.classList.add('hidden');
                textEdit.classList.remove('hidden')
            }
        });

        if (!mapEdit) {
            mapEdit = L.map('mapEdit', {
                attributionControl: false,
                center: [@this.latitude, @this.longitude],
                zoom: 12
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(mapEdit);
        }

        if (markerEdit) {
            markerEdit.setLatLng([@this.latitude, @this.longitude]);
        } else {
            markerEdit = L.marker([@this.latitude, @this.longitude]).addTo(mapEdit);
        }

        mapEdit.setView([@this.latitude, @this.longitude], 12);

        mapEdit.on('click', function(e) {
            var latitude = e.latlng.lat;
            var longitude = e.latlng.lng;

            @this.latitude = latitude;
            @this.longitude = longitude;

            if (markerEdit) {
                markerEdit.setLatLng(e.latlng);
            } else {
                markerEdit = L.marker(e.latlng).addTo(mapEdit);
            }
        });
    });

    Livewire.on('show-notif', () => {
        resetModal();
        closeModal()
        imageInput.value = '';
        preview.src = '';
        preview.classList.add('hidden');
        text.classList.remove('hidden')
        resetBtn.classList.add('hidden')
    })

    Livewire.on('show-notifEdit', () => {
        edit.classList.add('opacity-0', 'delay-0');
        edit.classList.remove('delay-[.3s]');
        modalEditWisata.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
        modalEditWisata.classList.remove('pointer-events-auto');
        if (markerEdit) {
            mapEdit.removeLayer(markerEdit);
            markerEdit = null;
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
        previewEdit.src = '';
        previewEdit.classList.add('hidden');
        textEdit.classList.remove('hidden')
        resetBtnEdit.classList.add('hidden')
    })

    const deleteModal = document.querySelector('#deleteModal');
    const del = document.querySelector('#delete');
    const cancelDelete = document.querySelector('#cancelDelete');
    const dl = document.querySelectorAll('#dl')

    dl.forEach(item => {
        console.log(item);
    })

    cancelDelete.addEventListener('click', () => {
        del.classList.add('opacity-0', 'delay-0');
        del.classList.remove('delay-[.3s]');
        deleteModal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
        deleteModal.classList.remove('pointer-events-auto');
    })

    Livewire.on('deleteConfirmation', () => {
        deleteModal.classList.toggle('opacity-0')
        deleteModal.classList.toggle('pointer-events-auto');
        deleteModal.classList.toggle('pointer-events-none');

        del.classList.toggle('opacity-0');
        del.classList.add('delay-[.3s]');
        del.classList.remove('delay-0');

        deleteModal.classList.remove('delay-[.4s]')

    })

    deleteModal.addEventListener('click', e => {
        if (e.target == deleteModal) {
            del.classList.add('opacity-0', 'delay-0');
            del.classList.remove('delay-[.3s]');
            deleteModal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
            deleteModal.classList.remove('pointer-events-auto');
        }
    })

    Livewire.on('delete', () => {
        del.classList.add('opacity-0', 'delay-0');
        del.classList.remove('delay-[.3s]');
        deleteModal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
        deleteModal.classList.remove('pointer-events-auto');
        dl.forEach(item => {
            console.log(item);
        })
    })
</script>
