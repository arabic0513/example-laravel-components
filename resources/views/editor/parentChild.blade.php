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
        $report = route('report');
        $ajax = "{
        url: '$report',
        type: 'post',
        data: function (d) {
            var selected = siteTable.row({ selected: true });
            if (selected.any()) {
                d.branch_id = selected.data().id;
            }
        }
    }";
        $fn = "siteTable.on('select', function (e) {
            table.ajax.reload();

            editor.field('branch_id').def(siteTable.row({ selected: true }).data().id);
        });

        siteTable.on('deselect', function () {
            table.ajax.reload();
        });

        editor.on('submitSuccess', function () {
            siteTable.ajax.reload();
        });

        siteEditor.on('submitSuccess', function () {
            table.ajax.reload();
        });";
    @endphp
    <table id="sites" class="display">
        <thead>
        <tr>
            <th>Name</th>
            <th>Users</th>
        </tr>
        </thead>
    </table>
    <x-SmartsTable tableId="users" :fn="[$fn]" select="true" :options="['buttons' => $buttons,'ajax' => $ajax]" getData="{{ route('report') }}" exportId="{{\App\Reports\One::class}}" startDate="{{request()->input('startDate')}}" endDate="{{request()->input('endDate')}}"></x-SmartsTable>
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
    const siteEditor = new DataTable.Editor({
        ajax: '/post',
        fields: [
            {
                label: 'Site name:',
                name: 'name'
            }
        ],
        table: '#sites'
    });

    const siteTable = $('#sites').DataTable({
        ajax: "{{ route('branch') }}",
        buttons: [
            { extend: 'create', editor: siteEditor },
            { extend: 'edit', editor: siteEditor },
            { extend: 'remove', editor: siteEditor }
        ],
        columns: [
            { data: 'id' },
            { data: 'users'}
        ],
        dom: 'Bfrtip',
        select: {
            style: 'single'
        }
    });
    var editor = new $.fn.dataTable.Editor({
        ajax: {
            url: "/post",
            data: function (d) {
                var selected = siteTable.row({ selected: true });
                if (selected.any()) {
                    d.site = selected.data().id;
                }
            },
            type: "POST",
        },

        table: "#users",
        fields: [
            {label: "Name:", name: "name"},
            {label: "Email:", name: "email"},
            {label: "Branch ID:", name: "branch_id"},
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
</script>
</body>
</html>
