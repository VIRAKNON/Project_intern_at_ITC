@extends('layout.app')
@section('inputScore')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Handsontable in Laravel</title>
    <!-- Include Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Handsontable CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable@11.1.0/dist/handsontable.full.min.css">
    <style>

        table{
            font-size: 16px;
        }
        .htNotation{
            width:70vh;
        }
        /* large laptop screen */
        @media (max-width: 1200px) {
            .htNotation{
                width:42vh;
            }
        }
        /* laptops screen */
        @media (max-width: 992px){
            .htNotation{
                width:12vh;
            }
        }
        /* tablete screen */
        @media (max-width: 768px){

        }
        /* phones screen */
        @media (max-width: 600px){

        }
    </style>
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-12">
                <div id="hot-container"></div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap 4 JS (jQuery is required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include Handsontable JS -->
    <script src="https://cdn.jsdelivr.net/npm/handsontable@11.1.0/dist/handsontable.full.min.js"></script>

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
                    data: '',
                    title: 'Total',
                    renderer: function(instance, td, row, col, prop, value, cellProperties) {
                        // Calculate the sum of 'Abs-10%', 'Midterm-40%', and 'Final-50%'
                        var abs10 = instance.getDataAtCell(row, instance.propToCol('abs_10%')) || 0;
                        var midterm40 = instance.getDataAtCell(row, instance.propToCol('midterm_40%')) || 0;
                        var final50 = instance.getDataAtCell(row, instance.propToCol('final_50%')) || 0;
                        var total = parseFloat(abs10)  + parseFloat(midterm40)  + parseFloat(final50);

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
            licenseKey: "non-commercial-and-evaluation"
        });

        // Update the 'Total' column when the table is rendered
        hot.addHook('beforeRender', function() {
            var data = hot.getData();
            for (var row = 0; row < data.length; row++) {
                var abs10 = data[row][hot.propToCol('abs_10%')] || 0;
                var midterm40 = data[row][hot.propToCol('midterm_40%')] || 0;
                var final50 = data[row][hot.propToCol('final_50%')] || 0;
                data[row][hot.propToCol('total')] = abs10 + midterm40 + final50;
            }
        });

        // Render the table to apply changes
        hot.render();

    </script>
</body>
</html>
@endsection

