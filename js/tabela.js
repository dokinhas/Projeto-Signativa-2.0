$('.mydatatable').DataTable({
    initComplete: function () {
        this.api().columns().every(function () {
            let column = this;
            let select = $('<select><option.value = "" ></option></select>')

                .appendTo($(column.footer()).empty())
                .on('change', function () {
                    let val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                    );

                    column
                        .search(val ? '^' + val + '$' : '', true, false)
                        .draw();
                });

            column.data().unique().sort().each(function (d, j) {
                select.append('<option value="' + d + '">' + d + '</option>')
            });
        });
    }
});

// $(document).ready(function() {
//     $('.mydatatable').DataTable( {
//         "ajax": "data/arrays.txt"
//     } );
// } );