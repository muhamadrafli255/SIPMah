$(function () {
    initDatatable()

})

function initDatatable() {
    const dtMember = renderDatatable(
        '#dtMember',
        '/api/datatables/members',
        [
            {
                data: 'id', name: 'id', class: 'table-fit text-right', orderable: false, searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            {
                data: 'nis', name:'nis', orderable: true, searchable: true
            },
            {
                data: 'name', name:'name', orderable: true, searchable: true
            },
            {
                data: 'email', name:'email', orderable: true, searchable: true
            },
            {
                data: 'status_id', name:'status_id', orderable: true, searchable: true
            },
            
        ],
        function (data, type, row) {
            const path = 'members/' + row.id
            let updateBtn = '',
            updateStatusBtn = ''

            // if (permission.update) {
                updateBtn = '<a href="'+ path +'/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fas fa-fw fa-edit"></i></a>'
            // } 

            content = updateBtn +' '+ updateStatusBtn

            return content
        },
        [[ 1, 'asc' ]],
        function(d) {
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtMember, $('#dtMember').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtMember, $('#dtMember').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtMember, $('#dtMember').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtMember, $('#dtMember').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtMember, $('#dtMember').parents('.dt-container').find('.dt-pdf'))
}

function updateStatus(id, name) {
    Swal.mixin({
        icon: 'warning',
        customClass: {
            confirmButton: 'btn btn-primary waves-effect waves-light mr-2',
            cancelButton: 'btn btn-default waves-effect waves-light'
        },
        buttonsStyling: false
    }).fire({
        html: `<h4>Status Jenis Akun</h4>
        <p class="mb-0">Apakah anda yakin ingin mengubah status ${name}?</p>`,
        showCancelButton: true,
        confirmButtonText: 'OK',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            $('body').append(`
                <form action="roles/${id}/edit-status" method="POST" class="d-none" id="updateStatus">
                    <input type="hidden" name="_token" value="${$('meta[name=csrf-token]').attr('content')}">
                    <input type="hidden" name="_method" value="PUT">
                </form>
            `)

            $('#updateStatus').trigger('submit')
        }
    })
}