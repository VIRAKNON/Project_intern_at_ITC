@extends('layout.app')
@section('inputScore')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Handsontable in Laravel</title>
    <!-- Include Bootstrap 4 CSS -->
    {{-- <link rel="stylesheet" href="{{asset('css/libraries/bootstrap@5.3.1_dist_css_bootstrap.min.css')}}"> --}}
    {{-- <script src="{{asset('js/libraries/bootstrap@5.3.1_dist_js.bundle.min.js')}}"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Handsontable CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable@11.1.0/dist/handsontable.full.min.css">
    <link rel="stylesheet" href="{{asset('css/inputScore.css')}}">
</head>
<body>

<div class="container-fluid">
    <div class="row bg-light mb-4" style="
            border-radius: 5px;
            background-color: #ffffff;
            box-shadow:  5px 5px 7px #d6d6d6;
        ">
        <header class="py-2">
            <span class="fs-3">Input Scoring</span>
            <span class="px-3">All existing students in this course</span>
        </header>
    </div>

    <div class="container-fluid px-2 py-0" style="
        width: 100%;
        height: auto !important ;
        border-top: 4px solid #274afcf2;
        border-radius: 5px;
        ">

        <div class="row">
            <div class="col-7">
                <div class="row">
                    <div class="col-auto">
                        <div class="input-group my-3">
                            <select name="" id="" class="form-select shadow-none">
                                <option value=""> Unit Operations and Processes for Environmental Engineering |GS-T2  |S_1</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-auto m-0 p-0">
                        <div class="input-group my-3">
                            <select class="form-select shadow-none">
                                <option value="">group</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="input-group my-3 d-flex flex-row-reverse">
                    <button class="btn btn-primary dropdown-toggle dropdown-toggle-split rounded-end-2 shadow-none" data-bs-toggle="dropdown" aria-expanded="false">
                        Export Score
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" id="exportCSV">Export as CSV</a></li>
                        <li><a class="dropdown-item" href="#" id="exportXLS">Export as XLS</a></li>
                        <li><a class="dropdown-item" href="#" id="exportXLSX">Export as XLSX</a></li>
                    </ul>

                    <button class="btn text-light mx-2 rounded-start-2 rounded-end-2 shadow-none" type="button" style="background-color:#FF6700;" onmouseover="this.style.backgroundColor='#ca5100';" onmouseout="this.style.backgroundColor='#FF6700';">Save Changes</button>
                    <button class="btn text-light rounded-start-2 rounded-end-2 shadow-none" type="button" style="background-color:#00CED1;" onmouseover="this.style.backgroundColor='#00a3a6';" onmouseout="this.style.backgroundColor='#00CED1';">Import Score</button>
                </div>
            </div>

        </div><hr class="mt-0">
        <div class="row">
            <div class="col-12 w-100" style="height: 71vh; overflow-y: auto; scrollbar-gutter:stable both-edges;">
                <div id="hot-container"></div>
            </div>
        </div>
    </div>
</div>

    <!-- Include Bootstrap 4 JS (jQuery is required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Handsontable CSS and JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable@9.0.2/dist/handsontable.full.css">
    <script src="https://cdn.jsdelivr.net/npm/handsontable@9.0.2/dist/handsontable.full.js"></script>

    <!-- SheetJS (XLSX and XLS) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>



<script>
    var students = @json($students);
    var container = document.getElementById('hot-container');
    var containerWidth = container.offsetWidth;
    var hot = new Handsontable(container, {
        data: students,
        columns: [
            // Define your column configuration here
            { data: 'student_id', title: 'Student ID' },
            { data: 'student_name', title: 'Student Name' },
            { data: 'gender_id', title: 'Gender' },
            { data: 'abs', title: 'Abs' },
            { data: 'abs_10%', title: 'Abs-10%' },
            { data: 'midterm_40%', title: 'Midterm-40%' },
            { data: 'final_50%', title: 'Final-50%' },
            {
                // Use a custom renderer for the 'Total' column
                data: 'total',
                title: 'Total',
                renderer: function(instance, td, row, col, prop, value, cellProperties) {
                    // Calculate the sum of 'Abs-10%', 'Midterm-40%', and 'Final-50%'
                    var abs10 = instance.getDataAtCell(row, instance.propToCol('abs_10%')) || 0;
                    var midterm40 = instance.getDataAtCell(row, instance.propToCol('midterm_40%')) || 0;
                    var final50 = instance.getDataAtCell(row, instance.propToCol('final_50%')) || 0;
                    var total = parseFloat(abs10) + parseFloat(midterm40) + parseFloat(final50);

                    // Set the calculated total value in the cell
                    td.innerHTML = total;

                    // Define your conditions for background color
                    if (total < 30) {
                        td.style.backgroundColor = '#FF3E3E';
                    } else if (total < 50) {
                        td.style.backgroundColor = '#FFFF00';
                    } else {
                        // Reset background color to default if it doesn't meet the conditions
                        td.style.backgroundColor = '';
                    }
                }
            },
            { data: 'notation', title: 'Notation', className: 'htNotation' }
        ],
        filters: true, // Enable filtering
        dropdownMenu: true, // Enable filter dropdown menu
        rowHeaders: true,
        dragToScroll: true,
        licenseKey: "non-commercial-and-evaluation",
        // autoColumnSize: true, // Add this line to enable auto column sizing
    });

        // Export as XLSX
        document.getElementById('exportXLSX').addEventListener('click', function () {
        var exportData = hot.getData();
        var columnHeaders = hot.getColHeader();
        var selectedOption = document.querySelector('.input-group.my-3 select').value;
        // Add column headers to the data
        exportData.unshift(columnHeaders);
         //  Set column widths
         var columnWidths = [
            { width: 10 }, // Adjust the width as needed for "Student ID" column
            { width: 20 }, // Adjust the width as needed for "Student Name" column
        ];

        var ws = XLSX.utils.aoa_to_sheet(exportData);

        // Set the column widths in the Excel sheet
        ws['!cols'] = columnWidths;
        var wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
        XLSX.writeFile(wb, 'exportedData_' + selectedOption + '.xlsx'); // Set the file name based on the selected option

    });

        // Export as XLS
        document.getElementById('exportXLS').addEventListener('click', function () {
            var exportData = hot.getData();
            var columnHeaders = hot.getColHeader();
            var selectedOption = document.querySelector('.input-group.my-3 select').value;
            // Add column headers to the data
            exportData.unshift(columnHeaders);

            //  Set column widths
            var columnWidths = [
                { width: 10 }, // Adjust the width as needed for "Student ID" column
                { width: 20 }, // Adjust the width as needed for "Student Name" column
            ];

            var ws = XLSX.utils.aoa_to_sheet(exportData);
            // Set the column widths in the Excel sheet
            ws['!cols'] = columnWidths;
            var wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
            XLSX.writeFile(wb, 'exportedData_' + selectedOption + '.xls'); // Set the file name based on the selected option

    });
    // Export as CSV
        document.getElementById('exportCSV').addEventListener('click', function () {
            var exportData = hot.getData();
            var columnHeaders = hot.getColHeader();
            var selectedOption = document.querySelector('.input-group.my-3 select').value;
            // Add column headers to the data
            exportData.unshift(columnHeaders);

            var csvContent = "data:text/csv;charset=utf-8,";

            exportData.forEach(function (row) {
            var rowData = row.map(function (cell) {
            return '"' + cell + '"';
            }).join(",");
            csvContent += rowData + "\r\n";
    });

        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", 'exportedData_' + selectedOption + '.csv'); // Set the file name based on the selected option
        document.body.appendChild(link); // Required for Firefox
        link.click();
    });

</script>
<!-- ... Rest of the HTML content ... -->
</body>
</html>
@endsection
