<script>
    const add = () => {
        alert('Yatta!');
    }

    const deleteData = (id) => {
        alert('Yatta!');
    }

    const edit = (id) => {
        alert('Yatta!');
    }

    $(function() {
        // SECTION set CSRF token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
        // !SECTION set CSRF token
        // SECTION Datatable
        var table = $('#table').DataTable({
            order: [],
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            filter: true,
            processing: true,
            responsive: true,
            serverSide: true,
            scroller: {
                loadingIndicator: false
            },
            pagingType: "full_numbers",
            ajax: {
                url: '/passing-grade/table'
            },
            "aaSorting": [0],
            "bFilter": false,
            "columns": [{
                    data: 'DT_RowIndex',
                    searchable: false,
                    orderable: false,
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'passing_grade',
                    name: 'passing_grade'
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });
        // !SECTION Datatable
    });
</script>
