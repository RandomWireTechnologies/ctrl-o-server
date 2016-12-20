!function (document, window, $) {
    "use strict";
    $('#basic-table').DataTable();
    $('table.display').DataTable();
    $('#example-complex_header').DataTable();
    $('.edit-table').DataTable();
    $('#table-individual tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
    });

    // DataTable
    var table = $('#table-individual').DataTable();

    // Apply the search
    table.columns().every(function () {
        var that = this;

        $('input', this.footer()).on('keyup change', function () {
            if (that.search() !== this.value) {
                that
                        .search(this.value)
                        .draw();
            }
        });
    });
    var t = $('#table-addrow').DataTable();
    var counter = 1;

    $('#addRow').on('click', function () {
        t.row.add([
            counter + '.1',
            counter + '.2',
            counter + '.3',
            counter + '.4',
            counter + '.5'
        ]).draw(false);

        counter++;
    });

    // Automatically add a first row of data
    $('#addRow').click();
    $("#dataeditableTable").editableTableWidget().numericInputExample().find("td:first");
}(document, window, jQuery);