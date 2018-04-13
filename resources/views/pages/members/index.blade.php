@extends('layouts.app')
@section('body-class') menu-position-top full-screen with-content-panel @stop
@section('content')
    <div class="content-w">
        <div class="content-i">
            <div class="content-box">
                <div class="element-wrapper">
                    <div class="element-box">
                        <h5 class="form-header">
                            Vereinsmitglieder
                        </h5>
                        <div class="form-desc">
                            Hier befinden sich alle Mitglieder des Vereins.
                        </div>
                        @if(count($user->organization->members))
                            <div class="table-responsive">
                                <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                    <thead>
                                    <tr>
                                        <th>Vorname</th>
                                        <th>Nachname</th>
                                        <th>Strasse</th>
                                        <th>Nummer</th>
                                        <th>PLZ</th>
                                        <th>Stadt</th>
                                        <th>Beitrag</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Vorname</th>
                                        <th>Nachname</th>
                                        <th>Strasse</th>
                                        <th>Nummer</th>
                                        <th>PLZ</th>
                                        <th>Stadt</th>
                                        <th>Beitrag</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($user->organization->members as $member)
                                        <tr>
                                            <td>{{ $member->firstname }}</td>
                                            <td>{{ $member->lastname }}</td>
                                            <td>{{ $member->street }}</td>
                                            <td>{{ $member->houseno }}</td>
                                            <td>{{ $member->zipcode }}</td>
                                            <td>{{ $member->city }}</td>
                                            <td>{{ $member->donation }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            0000
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript" src="/assets/components/editable-table/mindmup-editabletable.js"></script>
    <script type="text/javascript" src="/assets/components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/assets/components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript">
        if ($('#dataTable1').length) {
            $('#dataTable1').DataTable({
                language: {
                    "sEmptyTable": "Keine Daten in der Tabelle vorhanden",
                    "sInfo": "_START_ bis _END_ von _TOTAL_ Einträgen",
                    "sInfoEmpty": "Keine Daten vorhanden",
                    "sInfoFiltered": "(gefiltert von _MAX_ Einträgen)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ".",
                    "sLengthMenu": "_MENU_ Einträge anzeigen",
                    "sLoadingRecords": "Wird geladen ..",
                    "sProcessing": "Bitte warten ..",
                    "sSearch": "Suchen",
                    "sZeroRecords": "Keine Einträge vorhanden",
                    "oPaginate": {
                        "sFirst": "Erste",
                        "sPrevious": "Zurück",
                        "sNext": "Nächste",
                        "sLast": "Letzte"
                    }
                },
                dom: 'Bfrtip',
                buttons: [
                    'csvHtml5'
                ]
            });

        }
    </script>
@stop