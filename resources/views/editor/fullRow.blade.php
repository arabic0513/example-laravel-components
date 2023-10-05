<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel DataTables Editor</title>
    @bukStyles(true)
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/editor.dataTables.css">
    <link rel="stylesheet" href="/css/editor.bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.5.1/css/dataTables.dateTime.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <a href="/" type="button" class="btn btn-primary">Back</a>
    @php
        $buttons = "[
                    { extend: 'create', editor: editor },
                    { extend: 'edit', editor: editor },
                    { extend: 'remove', editor: editor }
                ]";
        $eventClickValue = "'tbody td.editor-edit', function (e) {
editor.inline(users.cells(this.parentNode, '*').nodes());
}";
    @endphp
    <x-SmartsTable tableId="users" select="true" tableControlers="true" :events="['click' => $eventClickValue]" :options="['buttons' => $buttons]" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
    <x-SmartsTable tableId="users1" select="true" tableControlers="true" :events="['click' => $eventClickValue]" :options="['buttons' => $buttons]" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.4/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/searchbuilder/1.4.0/js/dataTables.searchBuilder.min.js"></script>
<script src="{{asset('js/dataTables.editor.js')}}"></script>
<script src="{{asset('js/editor.bootstrap.min.js')}}"></script>
<script src="https://cdn.datatables.net/buttons/1.5.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.0/js/buttons.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.5.1/js/dataTables.dateTime.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        }
    });
    var editor = new $.fn.dataTable.Editor({
        ajax: {
            url: "/post",
            type: "POST",
        },

        table: "#users",
        fields: [
            {label: "Name:", name: "name"},
            {label: "Email:", name: "email"},
            {
                label: 'Select:',
                name: 'select',
                options: ['1','2'],
                type: 'select',
            },
            {
                label: "Updated At:",
                name: "updated_at",
                type: 'datetime',
                def: function () {
                    return new Date();
                },
                format: 'YYYY-MM-DD h:mm A',
                fieldInfo: 'US style m-d-y date input with 12 hour clock',
                opts: {
                    minutesIncrement: 5
                }
            },
        ]
    });

    // Delete a record
    $('#users').on('click', 'td.editor-delete', function (e) {
        e.preventDefault();

        editor.remove($(this).closest('tr'), {
            title: 'Delete record',
            message: 'Are you sure you wish to remove this record?',
            buttons: 'Delete'
        });
    });
</script>
</body>
</html>
